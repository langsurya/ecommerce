<?php

namespace App\Http\Controllers\backend\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
// use DB;
use App\Models\Ekspedisi;

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
    public function index()
    {
      $ekspedisi = DB::table('ekspedisis')
                ->orderBy('id', 'desc')
                ->get();
                // dd($ekspedisi);
      return view('backend.setting.ekspedisi.index',['ekspedisi' => $ekspedisi])
            ->with('i');
    }

    public function create()
    {
      // return view('backend.index');
      return view('backend.setting.ekspedisi.create', ['fungsi'=>'create', 'title'=>'Tambah Ekspedisi']);
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'name' => 'required',
        'keterangan' => 'required',
      ]);
      Ekspedisi::create($request->all());
      return redirect()->route('ekspedisi.index')
        ->with('success','Pelanggan created successfully');
    }

    public function edit($id)
    {
      $ekspedisi = Ekspedisi::findOrFail($id);
      return view('backend.setting.ekspedisi.edit', ['ekspedisi' => $ekspedisi, 'fungsi'=>'edit', 'title'=>'Edit Ekspedisi']);
    }

    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'name' => 'required',
        'keterangan' => 'required',
      ]);

		  Ekspedisi::find($id)->update($request->all());

      return redirect()->route('ekspedisi.index')
        ->with('success','Pelanggan created successfully');
    }

    public function destroy($id)
    {
      Ekspedisi::find($id)->delete();
      return redirect()->route('ekspedisi.index')
        ->with('success','Ekspedisi deleted successfully');
    }
}
