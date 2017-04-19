<?php

namespace App\Http\Controllers\backend\Produk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\KategoriProduk;
class KategoriprodukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $KategoriProduk = KategoriProduk::orderBy('barang_id','DESC')->get();
      // dd($KategoriProduk);
      return view('admin.produk.kategori.index', [ 'produks' => $KategoriProduk])
       ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.produk.kategori/create',  ['fungsi'=>'create', 'title' => 'Tambah Produk']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'nama_barang' => 'required',
        'parent' => 'required',
        'keterangan' => 'required',
        'status' => 'required',
      ]);
      // dd($p);
      KategoriProduk::create($request->all());
      return redirect()->route('KategoriProduk.index')
        ->with('success','Kategri Produk Created Successfully');
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
      $barangs = KategoriProduk::findOrFail($id);
      // dd($barangs);
      return view('admin.produk.kategori.edit', ['barang' => $barangs, 'title' => 'Edit Barang']);
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
      $this->validate($request, [
        'nama_barang' => 'required',
        'parent' => 'required',
        'keterangan' => 'required',
        'status' => 'required',
      ]);
      KategoriProduk::find($id)->update($request->all());

      return redirect()->route('KategoriProduk.index')
        ->with('success','Kategori Produk Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      KategoriProduk::find($id)->delete();
      return redirect()->route('KategoriProduk.index')
        ->with('success', 'Produk deleted Successfully');
    }
}
