<?php

namespace App\Http\Controllers\backend\Produk;

// use Illuminate\Http\Request;
use App\Http\Requests\backend\Products\ProductRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Products\Product;
use App\Models\Products\Gambar;
use App\Models\Products\Category;
use App\Models\Products\Attribute;
use DB,Request,Image,Store,Entrust;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      // $product = DB::table('product')
      //           ->get();
      $product = Product::all();
      // dd($product);
      return view('backend.produk.index', compact('product'))
      ->with('i');
    }

    public function getProduct() {
      $data = Product::DtProduct();
      return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $this->data['title'] = 'Create Product';
      $this->data['category'] =  Category::where('status', 1)->pluck('nama_barang', 'barang_id');
      // $this->data['category'] = [''=>'Pilih Category'] +  KategoriProduk::where('status', 1)->pluck('nama_barang', 'barang_id')->toArray();
      // dd($this->data['category']);x
      return view('backend.produk.create',  $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        //
        $thumb = public_path('images/products/thumb');
        $full = public_path('images/products/full');
        try {
          $input = $request->except('image');
          $input['product_price'] = str_replace('.', '', $input['product_price']);
          $cat_slug = Category::find($input['id_category'])->slug;
          $input['slug'] = $cat_slug . '/' . str_slug($input['product_name']);
          $input['product_status'] = $request->get('product_status');
          $attr = array_filter($input['name']);
          $product = new Product($input);
          $product->save();
          $pro_id = $product->id;
          if (!empty($attr)) {
            Attribute::SaveAttribute($pro_id, $input['name'], $input['value']);
          }
          if ($request->hasFile('image')) {
            $images = $request->file('image');
            foreach ($images as $image) {
              $name = str_random(5) . '.' . $image->getClientOriginalExtension();
              $img = new Gambar();
              $img->img_name = $name;
              $img->id_product = $pro_id;
              $img->path_thumb = 'images/products/thumb/' . $name;
              $img->path_full = 'images/products/full/' . $name;
              $img->save();
              Image::make($image)->save($full . '/' . $name);
              Image::make($image)->resize('100', '100')->save($thumb . '/' . $name);
            }
          }
        } catch (Exception $e) {
          $message = $e->getMessage();
        }
        if (isset($message)) {
          return redirect()->back()->withInput()->withErrors(['message' => $message]);
        }
        return redirect()->route('produk.index');
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
      $this->data['title'] = "Edit Product";
      $this->data['product'] = Product::find($id);
      $this->data['attribute'] = Attribute::where('id_product', $id)->get();
      $this->data['category'] = Category::where('status', 1)->pluck('nama_barang', 'barang_id');
      $this->data['gambar'] = Gambar::where('id_product', $id)->get();
      // dd($this->data['attribute']);
      return view('backend.produk.edit', $this->data);
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
