@extends('aqsha.layouts.master')
@section('title','Profile Member')
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
				  <li class="active">My Account</li>
				</ol>			
			</div>
		</div>
		<!-- breadcrumb end -->	
		<!-- product-tab-area-2-start -->
		<div class="product-tab-area-2 pb-50">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="product-tab-menu white-bg border-2">
							<ul>
								<li class="active"><a href="#home2" data-toggle="tab">Personal Data</a></li>
								<li><a href="#profile2" data-toggle="tab">Address Settings</a></li>
							</ul>						
						</div>
					</div>
				</div>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home2">
						<div class="row">
							<div class="col-lg-4 col-md-4 hidden-sm col_m  col-xs-12">
								<div class="login-area pt-30">
								<div class="single-product pt-30 pb-20 white-bg">
									<div class="product-img pb-40">
										<img src="{{ url('/public/aqsha/') }}/img/client/1.jpg" alt="" />
									</div>
									<div class="product-content">
										<div class="col-sm-8 col-md-offset-2 col-sm-offset-2">
											 <p class="col-sm-12">
												<input type="submit" value="Input Gambar" name="signup" class="theme-button marL0">
											 </p>
										</div>
									</div>										
										<div class="col-sm-8 col-md-offset-2 col-sm-offset-2">
											<h5>File jpg,jpeg,png. Maks 1 Mb</h5>
										</div>									
								</div>
								</div>
							</div>
							<div class="col-lg-8 col-md-8 col-sm-12  col_m  col-xs-12">
								<!-- login-area start -->
								<div class="login-area pt-30">
									<div class="continer">
										<div class="row">
										   <div class="clear"></div>
										   <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
											  <div class="billing-fields row">
												 <p class="form-row col-sm-6">
													<label for="billing_first_name">First Name<abbr title="required" class="required">*</abbr></label>
													<input type="text" name="billing_first_name" id="billing_first_name" class="form-controller">
												 </p>
												 <p class="form-row col-sm-6">
													<label for="billing_last_name">Last Name<abbr title="required" class="required">*</abbr></label>
													<input type="text" name="billing_last_name" id="billing_last_name" class="form-controller">
												 </p>
												 <p class="form-row col-sm-12">
													<label for="billing_company">Company Name</label>
													<input type="text" name="billing_company" id="billing_company" class="form-controller">
												 </p>
												 <p class="form-row col-sm-6">
													<label for="billing_email">Email Address<abbr title="required" class="required">*</abbr></label>
													<input type="text" name="billing_email" id="billing_email" class="form-controller">
												 </p>
												 <p class="form-row col-sm-6">
													<label for="billing_email">Phone<abbr title="required" class="required">*</abbr></label>
													<input type="text" name="billing_phone" id="billing_phone" class="form-controller">
												 </p>
												 <p class="col-sm-12">
													<label class="" for="account_password">Account password<abbr title="required" class="required">*</abbr></label>
													<input type="password" value="" placeholder="Password" id="account_password" name="account_password" class="form-controller">
												 </p>
												 <p class="col-sm-12" >
													<label class="" for="confirm_password">Confirm password<abbr title="required" class="required">*</abbr></label>
													<input type="password" value="" placeholder="Password" id="confirm_password" name="confirm_password" class="form-controller">
												 </p>
												 <p class="col-sm-12">
													<input type="submit" value="Simpan" name="signup" class="theme-button marL0">
												 </p>
											  </div>
										   </div>
										   <!-- /.col-md-6 -->
										   <div class="col-md-6 marTB30">
										   </div>
										   <!-- /.col-md-6 -->
										</div>
										<!-- /.row -->
									 </div>
								</div>
								<!-- login-area end -->	
							</div>
						</div>
					</div>
					<div class="tab-pane" id="profile2">
						<div class="row">
							<!-- login-area start -->
								<div class="login-area pt-30">
									<div class="continer">
										<div class="row">
										   <div class="clear"></div>
										   <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
											  <div class="billing-fields row">
												 <p class="form-row col-sm-12">
													<label for="billing_country">Country<abbr title="required" class="required">*</abbr></label>
													<select class="billing_country" id="billing_country" name="billing_country">
													   <option value="">Select a country</option>
													   <option value="AX">Aland Islands</option>
													   <option value="AF">Afghanistan</option>
													   <option value="AL">Albania</option>
													   <option value="DZ">Algeria</option>
													   <option value="AS">American Samoa</option>
													   <option value="AD">Andorra</option>
													   <option value="AO">Angola</option>
													   <option value="AI">Anguilla</option>
													   <option value="AQ">Antarctica</option>
													   <option value="AG">Antigua and Barbuda</option>
													</select>
												 </p>
												 <p class="form-row col-sm-12">
													<label for="billing_address_1">Address<abbr title="required" class="required">*</abbr></label>
													<input type="text" name="billing_address_1" id="billing_address_1" placeholder="Street address" class="form-controller">
													<input type="text" name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" class="form-controller">
												 </p>
												 <p class="form-row col-sm-12">
													<label for="billing_city">Town/City<abbr title="required" class="required">*</abbr></label>
													<input type="text" name="billing_city" id="billing_city" class="form-controller">
												 </p>
												 <p class="form-row col-sm-6">
													<label for="billing_state">State<abbr title="required" class="required">*</abbr></label>
													<select class="billing_state" id="billing_state" name="billing_state">
													   <option value="">Select a State</option>
													   <option value="AP">Andhra Pradesh</option>
													   <option value="AR">Arunachal Pradesh</option>
													   <option value="DL">Delhi</option>
													   <option value="LD">Lakshadeep</option>
													   <option value="PY">Pondicherry (Puducherry)</option>
													</select>
												 </p>
												 <p class="form-row col-sm-6">
													<label for="billing_postcode">Postcode/zip<abbr title="required" class="required">*</abbr></label>
													<input type="text" name="billing_postcode" id="billing_postcode" placeholder="Postcode/zip" class="form-controller">
												 </p>
												 <p class="col-sm-12">
													<input type="submit" value="Simpan" name="signup" class="theme-button marL0">
												 </p>
											  </div>
										   </div>
										   <!-- /.col-md-6 -->
										   <div class="col-md-6 marTB30">
										   </div>
										   <!-- /.col-md-6 -->
										</div>
										<!-- /.row -->
									 </div>
								</div>
								<!-- login-area end -->
						</div>
					</div>
				</div>				
			</div>
		</div>
		<!-- product-tab-area-2-end -->
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

