@extends('aqsha.layouts.master')
@section('title','Aqsha Shop')
@section('css')
	{{-- expr --}}
@endsection
@section('js')
	{{-- script js --}}
	</script>
@endsection
@section('content')
		<!-- breadcrumb start -->
		<div class="breadcrumb-area">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
				  <li class="active">Cart</li>
				</ol>			
			</div>
		</div>
		<!-- breadcrumb end -->	
		<!-- cart-main-area start -->
		<div class="cart-main-area pt-0">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						{{-- <form action="#">				 --}}
							<div class="table-content table-responsive">
								<table>
									<thead>
										<tr>
											<th class="product-thumbnail">Image</th>
											<th class="product-name">Product</th>
											<th class="product-price">Price</th>
											<th class="product-quantity">Quantity</th>
											<th class="product-subtotal">Total</th>
											<th class="product-remove">Remove</th>
										</tr>
									</thead>
									<tbody>
									@foreach ($cartItems as $cartItem)
										<tr>
											<td class="product-thumbnail">
											@foreach ($image as $img)
												@if ($img->imagefirst->id_product == $cartItem->id)
												<a href="#"><img src="{{ url($img->imagefirst->path_full) }}" alt="" /></a>
												@endif
											@endforeach
											</td>
											<td class="product-name"><a href="#">{{ $cartItem->name }}</a></td>
											<td class="product-price"><span class="amount">Rp {{ number_format($cartItem->price, 2, ',', '.') }}</span></td>
											<td class="product-quantity">
												{!! Form::open(['url' => ['cart/update', $cartItem->rowId], 'method'=>'put']) !!}
												{{-- <input type="button" value="-" onclick="minus{{$cartItem->id}}()"> --}}
												<input type="number" name="qty" value="{{ $cartItem->qty }}" />
												<input type="submit" value="update">
												{!! Form::close() !!}
												{{-- <input type="button" value="+" onclick="plus{{$cartItem->id}}()"> --}}
											</td>
											<td class="product-subtotal">Rp {{ number_format($cartItem->subtotal, 2, ',', '.') }}</td>
											<td class="product-remove"><a href="{{ url('/cart/remove') }}/{{ $cartItem->rowId }}"><i class="fa fa-times"></i></a></td>
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
							<div class="row">
								<div class="col-md-9 col-sm-7 col-xs-12">
									{{-- <div class="buttons-cart">
										<input type="submit" value="Update Cart" />
										<a href="{{ url('/') }}">Continue Shopping</a>
									</div>
									<div class="coupon">
										<h3>Coupon</h3>
										<p>Enter your coupon code if you have one.</p>
										<input type="text" placeholder="Coupon code" />
										<input type="submit" value="Apply Coupon" />
									</div> --}}
								</div>
								<div class="col-md-3 col-sm-5 col-xs-12">
									<div class="cart_totals">
										<h2>Cart Totals</h2>
										<table>
											<tbody>
												<tr class="cart-subtotal">
													<th>Subtotal</th>
													<td><span class="amount">Rp {{ Cart::subtotal() }}</span></td>
												</tr>
												<tr class="order-total">
													<th>Total</th>
													<td>
														<strong><span class="amount">Rp {{ Cart::total() }}</span></strong>
													</td>
												</tr>											
											</tbody>
										</table>
										<div class="wc-proceed-to-checkout">
											<a href="{{ url('/checkout') }}">Proceed to Checkout</a>
										</div>
									</div>
								</div>
							</div>
						{{-- </form>	 --}}
					</div>
				</div>
			</div>
		</div>
		<!-- cart-main-area end -->	
		<!-- brand-area-start -->
		<div class="brand-area pb-60 pt-60 dotted-style-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h3>Logo Brands & Clients</h3>
						</div>					
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="brand-active border-1">
							<div class="single-brand">
								<a href="#"><img src="{{ url('public/aqsha/') }}/img/brand/1.jpg" alt="" /></a>
							</div>
							<div class="single-brand">
								<a href="#"><img src="{{ url('public/aqsha/') }}/img/brand/2.jpg" alt="" /></a>
							</div>
							<div class="single-brand">
								<a href="#"><img src="{{ url('public/aqsha/') }}/img/brand/3.jpg" alt="" /></a>
							</div>
							<div class="single-brand">
								<a href="#"><img src="{{ url('public/aqsha/') }}/img/brand/4.jpg" alt="" /></a>
							</div>
							<div class="single-brand">
								<a href="#"><img src="{{ url('public/aqsha/') }}/img/brand/5.jpg" alt="" /></a>
							</div>
							<div class="single-brand">
								<a href="#"><img src="{{ url('public/aqsha/') }}/img/brand/6.jpg" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- brand-area-end -->
		<!-- blog-area-start -->
		<div class="blog-area dotted-style-2  pb-60">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h3>latest from blog</h3>
						</div>					
					</div>
				</div>
				<div class="row">
					<div class="blog-active">
						<div class="col-lg-12">
							<div class="single-blog">
								<div class="blog-img">
									<img src="{{ url('public/aqsha/') }}/img/blog/1.jpg" alt="" />
								</div>
								<div class="blog-content-inner">
									<div class="blog-content white-bg">
										<a href="#"><h4>LATIN PROFESSOR</h4></a>
										<p class="mb-0">Donec vitae hendrerit arcu, sit amet faucibus nisl..</p>
										<a href="#" class="read-more text-capitalize">Read more <i class="fa fa-arrow-circle-right"></i></a>
									</div>							
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single-blog">
								<div class="blog-img">
									<img src="{{ url('public/aqsha/') }}/img/blog/2.jpg" alt="" />
								</div>
								<div class="blog-content-inner">
									<div class="blog-content white-bg">
										<a href="#"><h4>LATIN PROFESSOR</h4></a>
										<p class="mb-0">Donec vitae hendrerit arcu, sit amet faucibus nisl..</p>
										<a href="#" class="read-more text-capitalize">Read more <i class="fa fa-arrow-circle-right"></i></a>
									</div>							
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single-blog">
								<div class="blog-img">
									<img src="{{ url('public/aqsha/') }}/img/blog/3.jpg" alt="" />
								</div>
								<div class="blog-content-inner">
									<div class="blog-content white-bg">
										<a href="#"><h4>welcome to plazathemes</h4></a>
										<p class="mb-0">Donec vitae hendrerit arcu, sit amet faucibus nisl..</p>
										<a href="#" class="read-more text-capitalize">Read more <i class="fa fa-arrow-circle-right"></i></a>
									</div>							
								</div>
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>

@endsection

