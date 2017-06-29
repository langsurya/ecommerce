<?php

namespace App\Http\Controllers\backend\Penjualan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Products\Product;
use App\Models\Ekspedisi;
use App\Models\Users;
use App\Models\Address;
use App\Models\orders;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['barangs'] = DB::table('orders_product')
                    ->leftjoin('product', 'product.id', '=', 'orders_product.product_id')
                    ->leftjoin('orders', 'orders.id', '=', 'orders_product.orders_id')
                    ->select('product.product_name', 'product.product_price as harga', 'orders_product.qty', 'orders.total', 'orders.status' ,'orders.id', 'orders.created_at')
                    ->orderBy('orders.id','DESC')
                    ->get();
                    // dd($this->data['barangs']);
            foreach ($this->data['barangs'] as $barang) {
                $this->data['nama_produk'] = $barang->product_name;
                $this->data['harga'] = $barang->harga;
                // $this->data['id'] = $barang->po;
                $this->data['total'] = $barang->total;
            }
        $this->data['orders'] = DB::table('orders')
                ->leftjoin('address', 'address.orders_id', '=', 'orders.id')
                ->leftjoin('users', 'users.id', '=', 'orders.user_id')
                ->select('orders.id as po', 'orders.status', 'orders.total' ,'address.fullname', 'users.name','orders.created_at', 'orders.updated_at')
                ->orderBy('orders.id','DESC')
                ->get();
                // dd($this->data['orders']);
      return view('backend.penjualan.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['cartItems'] = Cart::content();
        $this->data['products'] = Product::all();
        $this->data['ekspedisi'] = Ekspedisi::all();
        $this->data['pelanggans'] = Users::orderBy('name','ASC')->get();
        $this->data['payments'] = DB::table('payments')->get();
      return view('backend.penjualan.create', $this->data,  ['fungsi'=>'create', 'title' => 'Tambah Pesanan'])->with('i');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $userid = Auth::user()->id;
        DB::table('orders')->insert([
            'status' => 'pending',
            'user_id' => $userid,
            'pembayaran' => $request->pembayaran,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
            'total'=> Cart::total()
            ]);
        $orders = DB::table('orders')
                ->orderBy('id', 'desc')
                ->limit(1)
                ->get();

        foreach ($orders as $order) {
            $pelanggan = Users::find($request->id);
            
            // dd($request->id);
            $address = new Address;
            $address->fullname = $pelanggan->name;
            $address->address = $request->alamat;
            $address->city = $request->city;
            $address->country = 'Indonesia';
            $address->user_id = $request->id;
            $address->orders_id = $order->id;
            $address->notes = $request->notes;
            $address->postcode = $request->postcode;
            $address->email = $request->email;
            $address->phone = $request->phone;
            $address->payment_type = $request->payment_type;
            $address->ekspedisi = $request->ekspedisi;
            $address->paket = $request->paket;
            $address->ongkir = $request->ongkir;
            $address->save();
            
            $cartItems = Cart::content();
            foreach ($cartItems as $cartItem) {

                DB::table('orders_product')->insert([
                    'tax' => Cart::tax(),
                    'total' => $cartItem->price * $cartItem->qty,
                    'product_id' => $cartItem->id,
                    'orders_id' => $order->id,
                    'qty' => $cartItem->qty,
                    'created_at' => new \DateTime(),
                    'updated_at' => new \DateTime(),
                ]);
                $products = Product::find($cartItem->id);
                DB::table('product')
                    ->where('id', $cartItem->id)
                    ->update([
                        'product_stok' => ($products->product_stok-$cartItem->qty)
                ]);
            }
        }
        // orders::createOrder();
        Cart::destroy();
        return redirect('admin/pesanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['pelanggans'] = Users::orderBy('name','ASC')->get();
        $this->data['payments'] = DB::table('payments')->get();
        $this->data['products'] = Product::all();
        $this->data['ekspedisi'] = Ekspedisi::all();
        $this->data['title'] = 'Edit Orders';
        $this->data['address'] = DB::table('address')->where('orders_id', $id)->get();            
        foreach ($this->data['address'] as $address) {
            $this->data['fullname'] = $address->fullname;
            $this->data['po'] = $address->orders_id;
            $this->data['email'] = $address->email;
            $this->data['phone'] = $address->phone;
            $this->data['alamat'] = $address->address;
            $this->data['postcode'] = $address->postcode;
            $this->data['kota'] = $address->city;
            $this->data['ongkir'] = $address->ongkir;
            $this->data['payment'] = $address->payment_type;
            $this->data['eksped'] = $address->ekspedisi;
            $this->data['paket'] = $address->paket;
            $this->data['berat'] = $address->berat;
            $this->data['notes'] = $address->notes;
        }
        $this->data['orders'] = DB::table('orders_product')
                    ->leftjoin('orders', 'orders.id', '=', 'orders_product.orders_id')
                    ->leftjoin('product', 'product.id', '=', 'orders_product.product_id')
                    ->select(
                        'product.product_name as name', 'product.product_price',
                        'orders.total as subtotal', 'orders.status', 'orders.pembayaran',
                        'orders_product.total', 'orders_product.qty'
                        )
                    ->where('orders_product.orders_id', $id)
                    ->get();
        foreach ($this->data['orders'] as $orders) {
            $this->data['subtotal'] = $orders->subtotal;
        }
        return view('backend.penjualan.edit', $this->data)
            ->with('i');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // dd($request->all());
    }

    public function updatepenjualan(Request $request, $id)
    {
        DB::table('address')
            ->where('orders_id', $id)
            ->update([
                'ekspedisi' => $request->ekspedisi,
                'paket' => $request->paket,
                'berat' => $request->berat,
                'ongkir' => $request->ongkir,
                ]);
         DB::table('orders')
            ->where('id', $id)
            ->update(['pembayaran' => $request->pembayaran]);

       return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
