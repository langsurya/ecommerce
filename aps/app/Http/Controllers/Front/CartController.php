<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Products\Product;
use App\Models\Products\Gambar;

class CartController extends Controller
{
   public function index() {
   	$cartItems = Cart::content();
   	foreach ($cartItems as $image) {
   		$image = Gambar::all()->where('id_product', $image->id)->first();
   	}
   	return view('front.shop.cart', compact('cartItems', 'image'));

  }

  public function addItem($id) {
  	$products = Product::find($id);
  	// dd($products);
  	Cart::add($id, $products->product_name, 1, $products->product_price);

  	return back();
  }
}
