@extends('aqsha.layouts.master')

@section('content')

	<!-- breadcrumb start -->
		<div class="breadcrumb-area">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
				  <li class="active">About Us</li>
				</ol>			
			</div>
		</div>
		<!-- breadcrumb end -->	
		<!-- about-us-area-start -->
		<div class="about-us-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="about-us-page">
							<div class="about-content">
								{!! $about->isi !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- about-us-area-end -->

		<!-- brand-area-start -->
		<div class="brand-area ptb-60 dotted-style-2">
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

@endsection