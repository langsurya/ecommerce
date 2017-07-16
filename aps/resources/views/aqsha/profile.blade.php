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
								<li class="active"><a href="#home2" data-toggle="tab">Profile</a></li>
								<li><a href="#orders" data-toggle="tab">Orders</a></li>
								<li><a href="#konfirmasi" data-toggle="tab">Konfirmasi Pembayaran</a></li>
							</ul>						
						</div>
					</div>
				</div>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home2">
						<div class="row">
							<form action="{{ url('/profile_update/') }}/{{ Auth::user()->id }}" method="post">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="col-lg-4 col-md-4 hidden-sm col_m  col-xs-12">
									<div class="login-area pt-30">
										<div class="single-product pt-30 pb-20 white-bg">
											<div class="product-img pb-40" align="center">
												{{-- <img src="{{ url('/public/aqsha/') }}/img/client/1.jpg" alt="" /> --}}
											</div>
											{{-- <div class="product-content">
												<div class="col-sm-8 col-md-offset-2 col-sm-offset-2">
													 <p class="col-sm-12">
														<input type="submit" value="Input Gambar" name="signup" class="theme-button marL0">
													 </p>
												</div>
											</div>										
											<div class="col-sm-8 col-md-offset-2 col-sm-offset-2">
												<h5>File jpg,jpeg,png. Maks 1 Mb</h5>
											</div> --}}								
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
														<p class="form-row col-sm-12">
															<label for="name">First Name</label>
															<input type="text" name="name" id="name" value="{{ $user->name }}" class="form-controller">
														</p>
														<p class="form-row col-sm-12">
															<label for="username">Username</label>
															<input type="text" name="username" id="username" value="{{ $user->username }}" class="form-controller" disabled>
														</p>
														<p class="form-row col-sm-6">
															<label for="email">Email Address</label>
															<input type="text" name="email" id="email" value="{{ $user->email }}" class="form-controller">
														</p>
														<p class="form-row col-sm-6">
															<label for="phone">Phone<abbr title="required" class="required">*</abbr></label>
															<input type="text" name="phone" id="phone" value="{{ $user->phone }}" class="form-controller">
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
							</form>
						</div>
					</div>
					<div class="tab-pane" id="orders">
						<div class="row">
							<!-- login-area start -->
								<div class="login-area pt-30">
									<div class="continer">
										<div class="row">
										   <div class="clear"></div>
										   <div class="col-md-12 col-sm-12">
											  <div class="table-content table-responsive">
													<table>
														<thead>
															<tr>
																<th class="product-thumbnail">ID Orders</th>
																<th class="product-name">Product</th>
																<th class="product-price">Price</th>
																<th class="product-quantity">Quantity</th>
																<th class="product-subtotal">Pembayaran</th>
															</tr>
														</thead>
														<tbody>
															@foreach ($orders as $order)
															<tr>
																<td class="product-thumbnail">#{{ $order->po }}
																</td>
																<td class="product-name">{{ $order->product_name }}</td>
																<td class="product-price"><span class="amount">Rp {{ $order->total }}</span></td>
																<td class="product-quantity">{{ $order->qty }}</td>
																<td class="product-subtotal">{{ ($order->pembayaran=='sudahbayar') ? 'Sudah Bayar' : 'Belum Bayar' }}</td>
															</tr>
															@endforeach
														</tbody>
													</table>
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
					<div class="tab-pane" id="konfirmasi">
						<div class="row">
							<!-- login-area start -->
								<div class="login-area pt-30">
									<div class="continer">
										<div class="row">
										   <div class="clear"></div>
										   <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
												<div class="billing-fields row">
											  	<form action="{{ url('/konfirmasi/') }}" method="post">
														<input type="hidden" name="_token" value="{{ csrf_token() }}">
														<p class="form-row col-sm-12">
															<label for="id_order">ID Order</label>
															<input type="text" name="id_order" id="id_order" placeholder="ID Order" class="form-controller">
														</p>
														<p class="form-row col-sm-12">
															<label for="pengirim">Nama Pengirim (a/n)</label>
															<input type="text" name="pengirim" id="pengirim" class="form-controller">
														</p>
														<p class="form-row col-sm-6">
															<label for="bank">Bank<abbr title="required" class="required">*</abbr></label>
															<select class="billing_state" id="bank" name="bank">
																@foreach ($banks as $bank)
															   <option value="{{ $bank->nama_bank }}">{{ $bank->nama_bank . " ( ".$bank->pemilik ." - ".$bank->no_rekening." )" }}</option>
																@endforeach
															</select>
														</p>
														<p class="form-row col-sm-6">
															<label for="transfer">Jumlah Transfer</label>
															<input type="text" name="jumlah_transfer" id="transfer" placeholder="Rp" class="form-controller">
														</p>
														<p class="col-sm-12">
															<input type="submit" value="Kirim Konfirmasi" name="submit" class="theme-button">
														</p>
												 	</form>
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

