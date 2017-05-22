<?php 

namespace App\Http\Controllers\Front;

use Request;
use App\Http\Controllers\Controller;
use App\Models\Products\Product;
use App\Models\Products\Gambar;
use DB;


class PageController extends Controller {

	// public function __construct() {
		// parent::__construct();
	// }

	/**
	 * Display a listing of the resurce.
	 * 
	 * @return Response
	 */
	public function index() {
		// 
		return view('front.shop.home');
	}

	public function shop(){
		$Products = \App\Models\Products\Product::paginate(5); // get() or pageinate() or all()
		
		return view('front.shop.products')->with('Products', $Products);
	}


	public function product_details($id) {
		$products = \App\Models\Products\Product::find($id);
								// dd($Products);
		return view('front.shop.product_details', compact('products'));
	}

}