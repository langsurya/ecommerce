<?php

namespace App\Http\Controllers\backend\Finance;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['semua'] = DB::table('orders')
                    ->leftjoin('address', 'address.orders_id', '=', 'orders.id')
                    ->leftjoin('users', 'users.id', '=', 'orders.user_id')
                    ->select('users.name', 'address.payment_type as pay', 'orders.total', 'orders.status' ,'orders.id AS po', 'address.fullname')
                    ->orderBy('orders.id', 'desc')
                    ->get();
        $this->data['pending'] = DB::table('orders')
                    ->leftjoin('address', 'address.orders_id', '=', 'orders.id')
                    ->leftjoin('users', 'users.id', '=', 'orders.user_id')
                    ->select('users.name', 'address.payment_type as pay', 'orders.total', 'orders.status' ,'orders.id AS po', 'address.fullname')
                    ->where('orders.status', '=', 'pending')
                    ->orderBy('orders.id', 'desc')
                    ->get();
        $this->data['disetujui'] = DB::table('orders')
                    ->leftjoin('address', 'address.orders_id', '=', 'orders.id')
                    ->leftjoin('users', 'users.id', '=', 'orders.user_id')
                    ->select('users.name', 'address.payment_type as pay', 'orders.total', 'orders.status' ,'orders.id AS po', 'address.fullname')
                    ->where('orders.status', '=', 'disetujui')
                    ->orderBy('orders.id', 'desc')
                    ->get();
        $this->data['ditolak'] = DB::table('orders')
                    ->leftjoin('address', 'address.orders_id', '=', 'orders.id')
                    ->leftjoin('users', 'users.id', '=', 'orders.user_id')
                    ->select('users.name', 'address.payment_type as pay', 'orders.total', 'orders.status' ,'orders.id AS po', 'address.fullname')
                    ->where('orders.status', '=', 'ditolak')
                    ->orderBy('orders.id', 'desc')
                    ->get();
        return view('backend.finance.index', $this->data)->with('s')->with('p')->with('i')->with('k');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // return view('admin.produk.produkCreate',  ['fungsi'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::table('orders')
        ->where('id',$request->po)
        ->update([
            'status' => $request->status
            ]);
        return back();
        // dd($request->all());
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
        // dd($request->all());
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
