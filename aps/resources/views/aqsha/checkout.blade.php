@extends('aqsha.layouts.master')
@section('title','Aqsha Shop')
@section('css')
	{{-- expr --}}
@endsection
@section('js')
	<script>
		{{-- expression --}}
	</script>
@endsection
@section('content')
	<!-- breadcrumb start -->
	<div class="breadcrumb-area">
		<div class="container">
			<ol class="breadcrumb">
			  <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
			  <li class="active">Checkout</li>
			</ol>			
		</div>
	</div>
	<!-- breadcrumb end -->	
	<!-- coupon-area start -->
	{{-- <div class="coupon-area pt-30">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="coupon-accordion">
						<!-- ACCORDION START -->
						<h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
						<div id="checkout-login" class="coupon-content">
							<div class="coupon-info">
								<p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
								<form action="#">
									<p class="form-row-first">
										<label>Username or email <span class="required">*</span></label>
										<input type="text" />
									</p>
									<p class="form-row-last">
										<label>Password  <span class="required">*</span></label>
										<input type="text" />
									</p>
									<p class="form-row">					
										<input type="submit" value="Login" />
										<label>
											<input type="checkbox" />
											 Remember me 
										</label>
									</p>
									<p class="lost-password">
										<a href="#">Lost your password?</a>
									</p>
								</form>
							</div>
						</div>
						<!-- ACCORDION END -->	
						<!-- ACCORDION START -->
						<h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
						<div id="checkout_coupon" class="coupon-checkout-content">
							<div class="coupon-info">
								<form action="#">
									<p class="checkout-coupon">
										<input type="text" placeholder="Coupon code" />
										<input type="submit" value="Apply Coupon" />
									</p>
								</form>
							</div>
						</div>
						<!-- ACCORDION END -->						
					</div>
				</div>
			</div>
		</div>
	</div> --}}<hr>
	<!-- coupon-area end -->
	<!-- checkout-area start -->
	<div class="checkout-area">
		<div class="container">
			<div class="row">
				<form action="{{ url('/formvalidate') }}" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="col-lg-6 col-md-6">
						<div class="checkbox-form">						
							<h3>Billing Details</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="checkout-form-list">
										<label>Fullname <span class="required">*</span></label>{{ $errors->first('fullname') }}
										<input name="fullname" type="text" placeholder="" value="{{ $user->name }}" />
									</div>
								</div>
								<div class="col-md-12">
									<div class="checkout-form-list">
										<label>Address <span class="required">*</span></label> {{ $errors->first('address') }}
										<input name="address" type="text" placeholder="Street address" value="{{ old('address') }}" />
									</div>
								</div>
								<div class="col-md-12">
									<div class="country-select">
										<label>Country <span class="required">*</span></label>
										<select name="country">
										  <option >bangladesh</option>
										  <option >Algeria</option>
										  <option >Afghanistan</option>
										  <option >Ghana</option>
										  <option >Albania</option>
										  <option >Bahrain</option>
										  <option >Colombia</option>
										  <option >Dominican Republic</option>
										</select> 										
									</div>
								</div>
								<div class="col-md-6">
									<div class="checkout-form-list">
										<label>Town / City <span class="required">*</span></label>{{ $errors->first('city') }}
										<input name="city" type="text" placeholder="Town / City" value="{{ old('city') }}" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="checkout-form-list">
										<label>Postcode / Zip <span class="required">*</span></label>{{ $errors->first('postcode') }}										
										<input name="postcode" type="text" placeholder="Postcode / Zip" value="{{ old('postcode') }}" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="checkout-form-list">
										<label>Email Address <span class="required">*</span></label>{{ $errors->first('email') }}										
										<input name="email" type="email" placeholder="" value="{{ $user->email }}" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="checkout-form-list">
										<label>Phone  <span class="required">*</span></label>{{ $errors->first('phone') }}	
										<input name="phone" type="text" placeholder="Phone" value="{{ old('phone') }}" />
									</div>
								</div>
								<div class="order-notes col-md-12">
									<div class="checkout-form-list">
										<label>Order Notes</label>{{ $errors->first('notes') }}
										<textarea id="checkout-mess" name="notes" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery." >{{ old('notes') }}</textarea>
									</div>									
								</div>
								<div class="col-md-12">
									<div class="country-select">
										<label>Type Pembayaran <span class="required">*</span></label>
										<select name="pay">
										  <option value="cod">COD</option>
										  <option value="bri">BRI</option>
										  <option value="bca">BCA</option>
										  <option value="mandiri">MANDIRI</option>
										</select> 										
									</div>
								</div>
								{{-- <div class="col-md-12">
									<div class="checkout-form-list create-acc">	
										<input id="cbox" type="checkbox" />
										<label>Create an account?</label>
									</div>
									<div id="cbox_info" class="checkout-form-list create-account">
										<p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
										<label>Account password  <span class="required">*</span></label>
										<input type="password" placeholder="password" />	
									</div>
								</div> --}}								
							</div>																			
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="your-order">
							<h3>Your order</h3>
							<div class="your-order-table table-responsive">
								<table>
									<thead>
										<tr>
											<th class="product-name">Product</th>
											<th class="product-total">Total</th>
										</tr>							
									</thead>
									<tbody>
									@foreach ($cartItems as $cartItem)
										<tr class="cart_item">
											<td class="product-name">
												{{ $cartItem->name }} <strong class="product-quantity"> X 1</strong>
											</td>
											<td class="product-total">
												<span class="amount">{{ number_format($cartItem->price, '0', ',', '.') }}</span>
											</td>
										</tr>
									@endforeach
										{{-- <tr class="cart_item">
											<td class="product-name">
												Vestibulum dictum magna	<strong class="product-quantity"> X 1</strong>
											</td>
											<td class="product-total">
												<span class="amount">$50.00</span>
											</td>
										</tr> --}}
									</tbody>
									<tfoot>
										<tr class="cart-subtotal">
											<th>Cart Subtotal</th>
											<td><span class="amount">{{ Cart::subtotal() }}</span></td>
										</tr>
										<tr class="order-total">
											<th>Order Total</th>
											<td><strong><span class="amount">{{ Cart::total() }}</span></strong>
											</td>
										</tr>								
									</tfoot>
								</table>
							</div>
							<div class="payment-method">
								<div class="payment-accordion">
									<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingOne">
												<h4 class="panel-title">
													<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													Direct Bank Transfer
													</a>
												</h4>
											</div>
											<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
												<div class="panel-body">
													<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingTwo">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													Cheque Payment
												</a>
												</h4>
											</div>
										<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
											<div class="panel-body">
												<p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
											</div>
										</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingThree">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
													PayPal
												</a>
												</h4>
											</div>
											<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
												<div class="panel-body">
													<p>Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="order-button-payment">
										<input type="submit" value="Place order" />
									</div>								
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- checkout-area end -->	
	<!-- brand-area-start -->
	<div class="brand-area pb-60 dotted-style-2">
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
							<a href="#"><img src="{{ url('/public/aqsha/') }}/img/brand/1.jpg" alt="" /></a>
						</div>
						<div class="single-brand">
							<a href="#"><img src="{{ url('/public/aqsha/') }}/img/brand/2.jpg" alt="" /></a>
						</div>
						<div class="single-brand">
							<a href="#"><img src="{{ url('/public/aqsha/') }}/img/brand/3.jpg" alt="" /></a>
						</div>
						<div class="single-brand">
							<a href="#"><img src="{{ url('/public/aqsha/') }}/img/brand/4.jpg" alt="" /></a>
						</div>
						<div class="single-brand">
							<a href="#"><img src="{{ url('/public/aqsha/') }}/img/brand/5.jpg" alt="" /></a>
						</div>
						<div class="single-brand">
							<a href="#"><img src="{{ url('/public/aqsha/') }}/img/brand/6.jpg" alt="" /></a>
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
								<img src="{{ url('/public/aqsha') }}/img/blog/1.jpg" alt="" />
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
								<img src="{{ url('/public/aqsha') }}/img/blog/2.jpg" alt="" />
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
								<img src="{{ url('/public/aqsha') }}/img/blog/3.jpg" alt="" />
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
	<!-- blog-area-end -->

@endsection

