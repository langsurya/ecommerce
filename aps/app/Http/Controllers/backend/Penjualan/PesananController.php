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
                ->select(
                    'address.fullname', 'address.payment_type', 'address.ekspedisi', 'address.paket', 
                    'orders.id as po', 'orders.status', 'orders.total', 'orders.pembayaran', 
                    'orders.packing', 'orders.pengiriman','orders.no_resi', 'orders.created_at', 'orders.updated_at',
                    'users.name')
                ->orderBy('orders.id','DESC')
                ->get();
        $this->data['blmbayar'] = DB::table('orders')
                ->leftjoin('address', 'address.orders_id', '=', 'orders.id')
                ->leftjoin('users', 'users.id', '=', 'orders.user_id')
                ->select(
                    'address.fullname', 'address.payment_type', 'address.ekspedisi', 'address.paket', 
                    'orders.id as po', 'orders.status', 'orders.total', 'orders.pembayaran', 
                    'orders.packing', 'orders.pengiriman', 'orders.created_at', 'orders.updated_at',
                    'users.name')
                // ->where('pembayaran','=','batalbayar')
                ->where('pembayaran','=','belumbayar')
                ->orWhere('pembayaran','=',null)
                ->orWhere('pembayaran','=', '')
                ->orderBy('orders.id','DESC')
                ->get();
        $this->data['finances'] = DB::table('orders')
                ->leftjoin('address', 'address.orders_id', '=', 'orders.id')
                ->leftjoin('users', 'users.id', '=', 'orders.user_id')
                ->select(
                    'address.fullname', 'address.payment_type', 'address.ekspedisi', 'address.paket', 
                    'orders.id as po', 'orders.status', 'orders.total', 'orders.pembayaran', 
                    'orders.packing', 'orders.pengiriman', 'orders.no_resi', 'orders.created_at', 'orders.updated_at',
                    'users.name')
                ->where('pembayaran','=','sudahbayar')
                ->orderBy('orders.id','DESC')
                ->get();
        $this->data['packings'] = DB::table('orders')
                ->leftjoin('address', 'address.orders_id', '=', 'orders.id')
                ->leftjoin('users', 'users.id', '=', 'orders.user_id')
                ->select(
                    'address.fullname', 'address.payment_type', 'address.ekspedisi', 'address.paket', 
                    'orders.id as po', 'orders.status', 'orders.total', 'orders.pembayaran', 
                    'orders.packing', 'orders.pengiriman', 'orders.created_at', 'orders.updated_at',
                    'users.name')
                ->where('pembayaran','=','sudahbayar')
                ->Where('packing','=', null)
                ->orWhere('packing','=','')
                ->orWhere('packing','=','belum')
                ->orderBy('orders.id','DESC')
                ->get();
        $this->data['dikirims'] = DB::table('orders')
                ->leftjoin('address', 'address.orders_id', '=', 'orders.id')
                ->leftjoin('users', 'users.id', '=', 'orders.user_id')
                ->select(
                    'address.fullname', 'address.payment_type', 'address.ekspedisi', 'address.paket', 
                    'orders.id as po', 'orders.status', 'orders.total', 'orders.pembayaran', 
                    'orders.packing', 'orders.pengiriman', 'orders.created_at', 'orders.updated_at',
                    'users.name')
                ->where('pembayaran','=','sudahbayar')
                ->Where('packing','=','dikemas')
                ->Where('pengiriman', '=', null)
                ->orWhere('pengiriman', '=', 'belum')
                ->orderBy('orders.id','DESC')
                ->get();
        $this->data['selesai'] = DB::table('orders')
                ->leftjoin('address', 'address.orders_id', '=', 'orders.id')
                ->leftjoin('users', 'users.id', '=', 'orders.user_id')
                ->select(
                    'address.fullname', 'address.payment_type', 'address.ekspedisi', 'address.paket', 
                    'orders.id as po', 'orders.status', 'orders.total', 'orders.pembayaran', 
                    'orders.packing', 'orders.pengiriman', 'orders.no_resi', 'orders.created_at', 'orders.updated_at',
                    'users.name')
                ->where('pembayaran','=','sudahbayar')
                ->Where('packing','=','dikemas')
                ->Where('pengiriman', '=', 'dikirim')
                ->orderBy('orders.id','DESC')
                ->get();
        $this->data['batals'] = DB::table('orders')
                ->leftjoin('address', 'address.orders_id', '=', 'orders.id')
                ->leftjoin('users', 'users.id', '=', 'orders.user_id')
                ->select(
                    'address.fullname', 'address.payment_type', 'address.ekspedisi', 'address.paket', 
                    'orders.id as po', 'orders.status', 'orders.total', 'orders.pembayaran', 
                    'orders.packing', 'orders.pengiriman', 'orders.no_resi', 'orders.created_at', 'orders.updated_at',
                    'users.name')
                ->where('pembayaran','=','batalbayar')
                ->orWhere('packing','=','batalkemas')
                ->orWhere('pengiriman', '=', 'batalkirim')
                ->orderBy('orders.id','DESC')
                ->get();
            // echo $this->data['belum'];
        // $this->data['dibayar'] = DB::table('orders')->get();
                // dd($this->data['belumdibayar']);
      return view('backend.penjualan.index', $this->data);
    }

    public function create()
    {
        $this->data['cartItems'] = Cart::content();
        $this->data['products'] = Product::all();
        $this->data['ekspedisi'] = Ekspedisi::all();
        $this->data['pelanggans'] = Users::orderBy('name','ASC')->get();
        $this->data['payments'] = DB::table('payments')->get();
      return view('backend.penjualan.create', $this->data,  ['fungsi'=>'create', 'title' => 'Tambah Pesanan'])->with('i');
    }

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

    public function show($id)
    {
        //
    }

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
        $this->data['tbl_orders'] = DB::table('orders')->where('id', $id)->get();
        foreach ($this->data['tbl_orders'] as $orders) {
            $this->data['subtotal'] = $orders->total;
            $this->data['pembayaran'] = $orders->pembayaran;
        }
        return view('backend.penjualan.edit', $this->data)
            ->with('i');
    }

    public function update(Request $request, $id)
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

    public function updatepenjualan(Request $request, $id)
    {
        
    }

    public function financeDetail($id)
    {
        $this->data['title'] = 'Edit Orders';
        $this->data['payments'] = DB::table('payments')->get();
        $this->data['ekspedisi'] = Ekspedisi::all();
        $this->data['address'] = DB::table('address')
                ->select('address.fullname', 'address.phone', 'address.email', 'address.city as kota', 'address.postcode', 'address.address as alamat', 'address.notes', 'address.ekspedisi as eksped', 'address.berat', 'address.ongkir', 'address.payment_type as payment')
                ->where('orders_id', $id)->first(); 
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
        // $this->data['orders'] = orders::findOrFail($id); 
        $this->data['po'] = $id;
        $this->data['tbl_orders'] = DB::table('orders')->where('id', $id)->get();
        foreach ($this->data['tbl_orders'] as $orders) {
            $this->data['subtotal'] = $orders->total;
            $this->data['pembayaran'] = $orders->pembayaran;
            $this->data['updated_at'] = $orders->updated_at;
        }
        return view('backend.penjualan.financeDetail', $this->data)
            ->with('i');
    }

    public function updateFinance(Request $request, $id)
    {
        echo "update finance area";
        dd($request->all());
    }

    public function destroy($id)
    {
        //
    }
}
