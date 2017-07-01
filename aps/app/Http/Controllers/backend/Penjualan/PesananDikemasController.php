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

class PesananDikemasController extends Controller
{  

    public function edit($id)
    {
        $this->data['title'] = 'Detail Dikemas';
        $this->data['payments'] = DB::table('payments')->get();
        $this->data['ekspedisi'] = Ekspedisi::all();
        $this->data['address'] = DB::table('address')
                ->select('address.fullname', 'address.phone', 'address.email', 'address.city as kota', 'address.postcode', 'address.address as alamat', 'address.notes', 'address.ekspedisi as eksped', 'address.berat', 'address.paket', 'address.ongkir', 'address.payment_type as payment')
                ->where('orders_id', $id)->first(); 
        $this->data['orders'] = DB::table('orders_product')
                    ->leftjoin('orders', 'orders.id', '=', 'orders_product.orders_id')
                    ->leftjoin('product', 'product.id', '=', 'orders_product.product_id')
                    ->select(
                        'product.product_name as name', 'product.product_price',
                        'orders.total as subtotal', 'orders.status', 'orders.pembayaran', 'orders.packing',
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
            $this->data['packing'] = $orders->packing;
            $this->data['pengiriman'] = $orders->pengiriman;
            $this->data['updated_at'] = $orders->updated_at;
        }
        return view('backend.penjualan.dikemasDetail', $this->data)
            ->with('i');
    }

    public function update(Request $request, $id)
    {
        echo "update Dikemas area";
        DB::table('address')
            ->where('orders_id', $id)
            ->update([
                'ekspedisi' => $request->ekspedisi,
                'paket' => $request->paket,
                'berat' => $request->berat,
                'ongkir' => $request->ongkir,
                'notes' => $request->notes,
                'payment_type' => $request->payment_type,
        ]);
         DB::table('orders')
            ->where('id', $id)
            ->update([
                'pembayaran' => $request->pembayaran,
                'packing' => $request->packing,
        ]);

        return back();
        // dd($request->all());
    }

    public function destroy($id)
    {
        //
    }
}
