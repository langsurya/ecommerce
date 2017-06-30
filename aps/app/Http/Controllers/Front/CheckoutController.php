<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\Controller;
use App\Models\Products\Product;
use App\Models\Products\Gambar;
use App\Models\Address;
use App\User;
use App\Models\orders;
use DB;

class CheckoutController extends Controller
{
  public function index() {
  	// check for user login
  	if (Auth::check()) {
      $userid = Auth::user()->id;
      $this->data['payments'] = DB::table('payments')->get();
      $this->data['user'] = User::find($userid);
      $this->data['cartItems'] = Cart::content();
			$this->data['image'] = Product::with([
                  // 'image' 
                ])
                  ->take(12)->orderBy('created_at', 'asc')
                  ->get();
  		return view('aqsha.checkout', $this->data);
  	} else {
  		return redirect('login');
  	}
  }

  public function formvalidate(Request $request) {
  	$this->validate($request, [
  		'fullname' => 'required|min:5|max:35',
  		'address' => 'required|min:5|max:35',
  		'country' => 'required|min:5|max:35',  		
  		'city' => 'required',
  		'postcode' => 'required',
  		'email' => 'required|email|max:255',
  		'phone' => 'required',
  		'notes' => 'required'
  		]);

  	$userid = Auth::user()->id;
    
  	// dd($request->all());

    orders::createOrder();
    $orders = DB::table('orders')
                ->orderBy('id', 'desc')
                ->limit(1)
                ->get();

    foreach ($orders as $order) {
    	$address = new Address;
    	$address->fullname = $request->fullname;
    	$address->address = $request->address;
     	$address->country = $request->country;
     	$address->city = $request->city;
      $address->postcode = $request->postcode;
      $address->email = $request->email;
      $address->user_id = $userid;
      $address->orders_id = $order->id;
      $address->notes = $request->notes;
      $address->phone = $request->phone;
      $address->payment_type = $request->pay;
      // $address->ekspedisi = '';
      // $address->paket = '';
      $address->ongkir = 0;
     	$address->save();
     }
    Cart::destroy();
    return redirect('profile');
  }
}
