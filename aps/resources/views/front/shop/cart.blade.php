@extends('front.layouts.master')
@section('content')

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<?php 
			if ($cartItems->isEmpty()) {
				echo "<h1 align='center' style='color:green'>Cart is Empty</h1>";
			}else{
			?>
			
				<div class="table-responsive cart_info">
					<table class="table table-condensed">
						<thead>
							<tr class="cart_menu">
								<td class="image">Item</td>
								<td class="description"></td>
								<td class="price">Price</td>
								<td class="quantity">Quantity</td>
								<td class="total">Total</td>
								<td></td>
							</tr>
						</thead>
						@foreach ($cartItems as $cartItem)
						<tbody>
							<tr>
								<td class="cart_product">
								@foreach ($image as $img)
									@if ($img->imagefirst->id_product == $cartItem->id)
										<a href=""><img src="{{ url($img->imagefirst->path_thumb) }}" alt=""></a>
									@endif
								@endforeach
								</td>
								<td class="cart_description">
									<h4><a href=""> &nbsp;&nbsp; {{ $cartItem->name }}</a></h4>
									<p  style="border-left: 35px">&nbsp;&nbsp;Web ID: 1089772</p>
								</td>
								<td class="cart_price">
									<p>Rp. {{ number_format($cartItem->price, 0, ',', '.') }}</p>
								</td>
								<td class="cart_quantity">
									<div class="cart_quantity_button">
										{!! Form::open(['url' => ['cart/update', $cartItem->rowId], 'method'=>'put']) !!}
											<input type="button" value="-" onclick="minus{{$cartItem->id}}()">
											<input type="text" value="{{ $cartItem->qty}}" name="qty" id="count{{$cartItem->id}}" size="4">
											<input type="button" value="+" onclick="plus{{$cartItem->id}}()">
											<br>
											<input type="submit" class="btn btn-primary" value="Update" style="margin:5px">
										{!! Form::close() !!}
									</div>
								</td>
								<td class="cart_total">
									<p class="cart_total_price">Rp. {{ number_format($cartItem->subtotal, 0, ',', '.') }}</p>
								</td>
								<td class="cart_delete">
									<a class="cart_quantity_delete" href="{{ url('/cart/remove') }}/{{ $cartItem->rowId }}"><i class="fa fa-times"></i></a>
								</td>
							</tr>

						</tbody>
						@endforeach
					</table>
				</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>Rp {{ number_format($cartItem->subtotal, 0,',', '.' ) }}</span></li>
							<li>Eco Tax <span>Rp {{ number_format($cartItem->tax, 0 ,',', '.') }}</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>Rp {{ number_format($cartItem->total, 0, ',', '.') }}</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->	

	<script>
		@foreach ($cartItems as $cartItem)
			var count{{$cartItem->id}} = {{$cartItem->qty}};
			var countEl{{$cartItem->id}} = document.getElementById("count{{$cartItem->id}}");
			function plus{{$cartItem->id}}() {
				count{{$cartItem->id}}++;
				countEl{{$cartItem->id}}.value = count{{$cartItem->id}};
			}
			function minus{{$cartItem->id}}() {
				if (count{{$cartItem->id}} > 1) {
					count{{$cartItem->id}}--;
					countEl{{$cartItem->id}}.value = count{{$cartItem->id}};
				}
			}
		@endforeach
	</script>

<?php } ?>	
	
@endsection