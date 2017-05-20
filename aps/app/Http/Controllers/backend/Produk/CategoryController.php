<?php

namespace App\Http\Controllers\backend\Produk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Products\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $KategoriProduk = Category::orderBy('barang_id','DESC')->get();
      // dd($KategoriProduk);
      return view('backend.produk.kategori.index', [ 'produks' => $KategoriProduk])
       ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('backend.produk.kategori/create',  ['fungsi'=>'create', 'title' => 'Tambah Produk']);
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
      Category::create($request->all());
      return redirect()->route('category.index')
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
      $barangs = Category::findOrFail($id);
      // dd($barangs);
      return view('backend.produk.kategori.edit', ['barang' => $barangs, 'title' => 'Edit Barang']);
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
      Category::find($id)->update($request->all());

      return redirect()->route('category.index')
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
      Category::find($id)->delete();
      return redirect()->route('category.index')
        ->with('success', 'Produk deleted Successfully');
    }
}
