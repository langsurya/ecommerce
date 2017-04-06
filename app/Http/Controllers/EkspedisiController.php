<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
// use DB;
use App\Payment;

class EkspedisiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      return view('admin.setting.ekspedisi');
    }

    public function create()
    {
      // return view('admin.index');
      return view('admin.setting.ekspedisicreate', ['fungsi'=>'create']);
    }

    public function store(Request $request)
    {
      // $this->validate($request, [
      //   'nama_bank' => 'required',
      //   'no_rekening' => 'required',
      //   'pemilik' => 'required',
      //   'cabang' => 'required',
      // ]);
      // Payment::create($request->all());
      return redirect()->route('ekspedisi.index')
        ->with('success','Pelanggan created successfully');
    }

    public function edit($id)
    {
      $payment = Payment::findOrFail($id);
      return view('admin.setting.paymentedit', ['payment' => $payment, 'fungsi'=>'edit']);
    }

    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'nama_bank' => 'required',
        'no_rekening' => 'required',
        'pemilik' => 'required',
        'cabang' => 'required',
      ]);
		  Payment::find($id)->update($request->all());

      return redirect()->route('payment.index')
        ->with('success','Pelanggan created successfully');
    }

    public function destroy($id)
    {
      Payment::find($id)->delete();
      return redirect()->route('payment.index')
        ->with('success','Pelanggan deleted successfully');
    }
}
