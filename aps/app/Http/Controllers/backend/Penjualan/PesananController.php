<?php

namespace App\Http\Controllers\backend\Penjualan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Products\Product;
use App\Models\Ekspedisi;
use App\Models\Users;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['orders'] = DB::table('orders_product')
                    ->leftjoin('product', 'product.id', '=', 'orders_product.product_id')
                    ->leftjoin('orders', 'orders.id', '=', 'orders_product.orders_id')
                    ->leftjoin('users', 'users.id', '=', 'orders.user_id')
                    ->leftjoin('address', 'address.id', '=', 'orders_product.orders_id')
                    ->select('product.product_name', 'product.product_price as harga', 'orders.total', 'orders.status' ,'orders.id AS po', 'orders.created_at', 'users.name', 'address.fullname')
                    ->get();
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
        return back();
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
        //
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
        //
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
