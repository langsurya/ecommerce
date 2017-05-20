<?php 

function shopOpt($key = '') {
	$data = App\Models\Options\ShopOption::where('shop_opt_name', $key)->first();
	if ($data) {
		return $data->shop_opt_value;
	}
}