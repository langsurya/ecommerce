<?php

namespace App\Http\Controllers\backend\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
// use DB;
use App\Payment;

class PaymentController extends Controller
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
      $payments = Payment::orderBy('id','DESC')->paginate(5);
      return view('backend.setting.payment.index',compact('payments'))
        ->with('i', ($request->input('page', 1) -1) * 5);
    }

    public function create()
    {
      // return view('backend.index');
      return view('backend.setting.payment.tambah', ['fungsi'=>'create', 'title'=>'Tambah Payment']);
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'nama_bank' => 'required',
        'no_rekening' => 'required',
        'pemilik' => 'required',
        'cabang' => 'required',
      ]);
      Payment::create($request->all());
      return redirect()->route('payment.index')
        ->with('success','Pelanggan created successfully');
    }

    public function edit($id)
    {
      $payment = Payment::findOrFail($id);
      return view('backend.setting.payment.edit', ['payment' => $payment, 'fungsi'=>'edit']);
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
