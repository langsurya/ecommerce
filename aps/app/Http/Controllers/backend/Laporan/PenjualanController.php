<?php

namespace App\Http\Controllers\backend\Laporan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['orders'] = DB::table('orders')
                ->leftjoin('address', 'address.orders_id', '=', 'orders.id')
                // ->leftjoin('users', 'users.id', '=', 'orders.user_id')
                ->select(
                    'address.fullname', 'address.payment_type as pay', 'address.ekspedisi', 'address.paket',
                    'address.ongkir', 
                    'orders.id as po', 'orders.status', 'orders.total', 'orders.pembayaran', 
                    'orders.packing', 'orders.pengiriman','orders.no_resi', 'orders.created_at', 'orders.updated_at')
                ->orderBy('orders.id','DESC')
                ->get();
      return view('backend.laporan.penjualan.index', $this->data)->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // belum ada penjualan create
      return view('backend.laporan.penjualan.create',  ['fungsi'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
