<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Products\Product;
use App\Models\Products\Gambar;
use DB;

class CartController extends Controller
{
    public function index() {
   	$this->data['cartItems'] = Cart::content();
    $this->data['abouts'] = DB::table('about')->first();
		$this->data['image'] = Product::with([
               // 'image' 
              ])
              ->take(12)->orderBy('created_at', 'asc')
              ->get();
        
   	return view('aqsha.cart', $this->data);
  }

  public function addItem($id) {
  	$products = Product::find($id);
  	// dd($products);
  	Cart::add($id, $products->product_name, 1, $products->product_price);

  	return back();
  }

  public function addItemQty(Request $request, $id) {
    $products = Product::find($id);
    // dd($products);
    Cart::add($id, $products->product_name, $request->qty, $products->product_price);

    return redirect('/');
  }

  public function destroy($id) {
  	Cart::remove($id);

  	return back();
  }

  public function update(Request $request, $id) {

    Cart::update($id, $request->qty);
    return back();
  }
}
