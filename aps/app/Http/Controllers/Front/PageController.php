<?php 

namespace App\Http\Controllers\Front;

use Request;
use App\Http\Controllers\Controller;
use App\Models\Products;


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
		return view('front.shop.pages.home');
		// return "this is front pages";
	}

}