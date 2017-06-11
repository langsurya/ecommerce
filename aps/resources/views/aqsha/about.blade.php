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
								<p>Have a cool story about how your product or service was helps change lives? Put it on your 'About Us' page. Good stories humanize your brand and provide context and meaning for your product. What's more, good stories are sticky -- which means people are more likely to connect with them and pass them on.</p>
							</div>
							<div class="about-content">
								<p>Yellow Leaf Hammocks does an amazing job of telling you about its product by describing how the hammocks empower artisan weavers and their families. The company uses acombination of words and easily digestible graphics to paint a picture, rather than using big chunks of text. They're clear about why they're different: "Not a Charity," the page reads. And then: "This is the basis for a brighter future, built on a hand up, not a handout."</p>
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