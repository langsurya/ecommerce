<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Products\Product;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
  protected $fillable = ['total', 'status'];

  public function orderFields() {
  	return $this->belongsToMany(product::class)->withPivot('qty', 'total');
  }

  public static function createOrder() {

  	$user = Auth::user();
  	$order = $user->orders()->create(['total' => Cart::total(), 'status' => 'pending']);

  	$cartItems = Cart::content();
  	foreach ($cartItems as $cartItem) {
  		$order->orderFields()->attach($cartItem->id, ['qty' => $cartItem->qty, 'tax' => Cart::tax(), 'total' => $cartItem->qty * $cartItem->price]);
      $products = Product::find($cartItem->id);
      DB::table('product')
          ->where('id', $cartItem->id)
          ->update([
          'product_stok' => ($products->product_stok-$cartItem->qty)
      ]);
  	}
  }
}
