<?php 

namespace App\Http\Requests\backend\Products;

use App\Http\Requests\Request;

class ImageRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 * 
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		if (Request::ajax()) {
			return [];
		}
		return [
			// 
			'image[]' => 'image'
		];
	}

	public function message() {
		return [
			'image[].image' => 'FIle harus bentuk gambar jpg,png,bmp.jpeg'
		];
	}
}