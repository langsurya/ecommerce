<?php

namespace App\Http\Controllers\backend\Pelanggan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
// memanggil query builder
// use Illuminate\Support\Facades\DB;
use DB;
use App\Pelanggan;

class PelangganController extends Controller
{
    public function index(Request $request)
    {
      $pelanggans = Pelanggan::orderBy('id','DESC')->paginate(5);
      return view('backend.pelanggan.index',compact('pelanggans'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
      // menampilkan data id terakhir dengan query builder
      $pelanggans = DB::table('pelanggans')
                ->latest('id')
                ->first();
                // dd ($pelanggans);
      return view('backend/pelanggan/create', ['pelanggans' => $pelanggans, 'fungsi'=>'create']);
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'id_pel' => 'required',
        'status' => 'required',
        'name' => 'required',
        'hp' => 'required',
        'email' => 'required|email',
        'line' => 'required',
        'bbm' => 'required',
        'alamat' => 'required',
      ]);
      Pelanggan::create($request->all());
      return redirect()->route('pelanggan.index')
        ->with('success','Pelanggan created successfully');
    }

    public function show()
    {

    }

    public function edit($id)
    {
      $pelanggans = Pelanggan::findOrFail($id);
      // dd($pelanggans);
      // view berfungsi untuk melihat/membuka file edit.blade.php di dalam folder pelanggan
      //
      return view('backend.pelanggan.edit', ['pelanggans' => $pelanggans, 'fungsi'=>'edit']);
    }

    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'id_pel' => 'required',
        'status' => 'required',
        'name' => 'required',
        'hp' => 'required',
        'email' => 'required|email',
        'line' => 'required',
        'bbm' => 'required',
        'alamat' => 'required',
      ]);
		  Pelanggan::find($id)->update($request->all());

      return redirect()->route('pelanggan.index')
        ->with('success','Pelanggan created successfully');
    }

    public function destroy($id)
    {
      Pelanggan::find($id)->delete();
      return redirect()->route('pelanggan.index')
        ->with('success','Pelanggan deleted successfully');
    }

}
