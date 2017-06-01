@extends('aqsha.layouts.master')

@section('content')

	<!-- breadcrumb start -->
		<div class="breadcrumb-area">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
				  <li class="active">Product Details </li>
				</ol>			
			</div>
		</div>
		<!-- breadcrumb end -->	
		<!-- product-details-start -->
		<div class="product-details-area pt-20">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-5">					
						<div class="product-zoom dotted-style-1">
							<!-- Tab panes -->
							<div class="tab-content">
								<div class="tab-pane active" id="home">
									<div class="pro-large-img">
										<img src="{{ url('/') }}/{{ $images->first()->path_full }}" alt="" />
										{{-- <a class="popup-link" href="img/product/produk4.jpg">View larger <i class="fa fa-search-plus" aria-hidden="true"></i></a> --}}
									</div>
								</div>
							</div>
							<!-- Nav tabs -->
							<ul class="details-tab">
								<li class="active"><a href="#home" data-toggle="tab"><img src="img/product/produk4.jpg" alt="" /></a></li>
							</ul>								
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-7">
						<div class="product-details">
							<h2 class="pro-d-title">{{ $products->product_name }}</h2>
							<div class="pro-rating ">
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star-o"></i></a>
							</div>
							<br>
							<div class="pro-ref">
								<p>
									<label>Reference: </label> 
									<span> Reference: demo_1 </span>
								</p>
								<p>
									<label>Condition: </label> 
									<span>New product</span>
								</p>							
							</div>
							<div class="price-box">
								<span class="price product-price">Rp {{ number_format($products->product_price, 2,',', '.') }}</span>
							</div>
							<div class="short-desc">
								<p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
							</div>
							<div class="box-quantity">
								<form action="#">
									<label>Quantity</label>	
									<input type="number" value="1" />
									<button>add to cart</button>
								</form>
							</div>
							<div class="usefull_link_block">
								<ul>
									<li><a href="#"><i class="fa fa-envelope-o"></i>Send to a friend</a></li>
									<li><a href="#"><i class="fa fa-print"></i>Print</a></li>
									<li><a href="#"><i class="fa fa-heart-o"></i> Add to wishlist</a></li>
								</ul>
							</div>
							<div class="select-size">
								<form action="#">
									<label>Size</label>
									<select name="#">
										<option value="">5</option>
										<option value="">6</option>
										<option value="">7</option>
										<option value="">8</option>
										<option value="">9</option>
									</select>
								</form>
							</div>
							<div class="color-list">
								<a href="#"></a>
								<a href="#"></a>
							</div>						
							<div class="share-icon">
								<a class="twitter" href="#"><i class="fa fa-facebook"></i>  facebook</a>
								<a class="facebook" href="#"><i class="fa fa-twitter"></i>  twitter</a>
								<a class="google" href="#"><i class="fa fa-google-plus"></i>  linkedin</a>
								<a class="pinterest" href="#"><i class="fa fa-pinterest"></i>  facebook</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
		<!-- product-details-end -->
		<!-- pro-info-area start -->
		<div class="pro-info-area">
			<div class="container">
				<div class="pro-info-box">
					<!-- Nav tabs -->
					<ul class="pro-info-tab" role="tablist">
						<li class="active"><a href="#home3" data-toggle="tab">More info</a></li>
						<li><a href="#profile3" data-toggle="tab">Data sheet</a></li>
						<li><a href="#messages3" data-toggle="tab">Reviews</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="home3">
							<div class="pro-desc">
								<p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
							</div>
						</div>
						<div class="tab-pane" id="profile3">
							<div class="pro-desc">
								<table class="table-data-sheet">
									<tbody>
										<tr class="odd">
											<td>Compositions</td>
											<td>Cotton</td>
										</tr>
										<tr class="even">
											<td>Styles</td>
											<td>Casual</td>
										</tr>
										<tr class="odd">
											<td>Properties</td>
											<td>Short Sleeve</td>
										</tr>
									</tbody>
								</table>						
							</div>
						</div>
						<div class="tab-pane" id="messages3">
							<div class="pro-desc">
								<a href="#">Be the first to write your review!</a>
							</div>
						</div>
					</div>		
				</div>
			</div>
		</div>
		<!-- pro-info-area end -->
		<!-- .slider-product-area-3-start -->
		<div class="slider-product-area-4 pt-30 pb-50">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title mb-40 text-center section-title-pro">
							<h3>Accessories</h3>
						</div>						
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="slider-product dotted-style-1 pt-20">
							<div class="slider-product-active-3">
								<div class="single-product single-product-sidebar white-bg">
									<div class="product-img product-img-left">
										<a href="product-details-pot.html"><img src="img/product/keramik pot.jpg" alt="" /></a>
									</div>
									<div class="product-content product-content-right">
										<div class="pro-title">
											<h4><a href="product-details-mug.html">Keramik Pot</a></h4>
										</div>
										<div class="pro-rating ">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>
										<div class="price-box">
											<span class="price product-price">Rp 800.000,00</span>
										</div>
										<div class="product-icon">
											<div class="product-icon-left f-left">
												<a href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
											</div>
										</div>
									</div>
								</div>	
								<div class="single-product single-product-sidebar white-bg">
									<div class="product-img product-img-left">
										<a href="product-details-tas-bordir.html"><img src="img/product/Tas Bordir.jpg" alt="" /></a>
									</div>
									<div class="product-content product-content-right">
										<div class="pro-title">
											<h4><a href="product-details-tas-bordir.html">Tas Bordir</a></h4>
										</div>
										<div class="pro-rating ">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>
										<div class="price-box">
											<span class="price product-price">Rp 900.000,00</span>
										</div>
										<div class="product-icon">
											<div class="product-icon-left f-left">
												<a href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
											</div>
										</div>
									</div>
								</div>	
								<div class="single-product single-product-sidebar white-bg">
									<div class="product-img product-img-left">
										<a href="product-details-gelang.html"><img src="img/product/produk4.jpg" alt="" /></a>
									</div>
									<div class="product-content product-content-right">
										<div class="pro-title">
											<h4><a href="product-details-gelang.html">Gelang Plasetine</a></h4>
										</div>
										<div class="pro-rating ">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>
										<div class="price-box">
											<span class="price product-price">Rp 75.000,00</span>
										</div>
										<div class="product-icon">
											<div class="product-icon-left f-left">
												<a href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
											</div>
										</div>
									</div>
								</div>
								<div class="single-product single-product-sidebar white-bg">
									<div class="product-img product-img-left">
										<a href="product-details-mangkuk-2.html"><img src="img/product/Piring Keramik uk.jpg" alt="" /></a>
									</div>
									<div class="product-content product-content-right">
										<div class="pro-title">
											<h4><a href="product-details-mangkuk-2.html">Mangkuk Keramik uk 27cm</a></h4>
										</div>
										<div class="pro-rating ">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star-o"></i></a>
										</div>
										<div class="price-box">
											<span class="price product-price">Rp 400.000,00</span>
										</div>
										<div class="product-icon">
											<div class="product-icon-left f-left">
												<a href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
											</div>
										</div>
									</div>					
								</div>							
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
		<!-- .slider-product-area-3-end -->	
		<!-- .slider-product-area-3-start -->
		<div class="slider-product-area-4 pt-30 pb-60 res-pro">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title mb-40 text-center section-title-pro">
							<h3>10 other products in the same category: </h3>
						</div>						
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="slider-product dotted-style-1 pt-20">
							<div class="slider-product-active-3">
								<div class="single-product single-product-sidebar white-bg">
									<div class="product-img product-img-left">
										<a href="product-details-piring-gypsum-vertikal"><img src="img/product/gypsum vertikal.jpg" alt="" /></a>
									</div>
									<div class="product-content product-content-right">
										<div class="pro-title">
											<h4><a href="product-details-piring-gypsum-vertikal.html">Piring Gypsum Vertikal 20cm</a></h4>
										</div>
										<div class="pro-rating ">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>
										<div class="price-box">
											<span class="price product-price">$201.00</span>
										</div>
										<div class="product-icon">
											<div class="product-icon-left f-left">
												<a href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
											</div>
										</div>
									</div>
								</div>	
								<div class="single-product single-product-sidebar white-bg">
									<div class="product-img product-img-left">
										<a href="product-details-mangkuk-1.html"><img src="img/product/mangkuk keramik.jpg" alt="" /></a>
									</div>
									<div class="product-content product-content-right">
										<div class="pro-title">
											<h4><a href="product-details-mangkuk-1.html">Mangkuk Keramik 20cm</a></h4>
										</div>
										<div class="pro-rating ">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>
										<div class="price-box">
											<span class="price product-price">Rp 350.000,00</span>
										</div>
										<div class="product-icon">
											<div class="product-icon-left f-left">
												<a href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
											</div>
										</div>
									</div>
								</div>
								<div class="single-product single-product-sidebar white-bg">
									<div class="product-img product-img-left">
										<a href="product-details-mug.html"><img src="img/product/Mug.jpg" alt="" /></a>
									</div>
									<div class="product-content product-content-right">
										<div class="pro-title">
											<h4><a href="product-details-mug.html">Mug</a></h4>
										</div>
										<div class="pro-rating ">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>
										<div class="price-box">
											<span class="price product-price">Rp 150.000,00</span>
										</div>
										<div class="product-icon">
											<div class="product-icon-left f-left">
												<a href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
											</div>
										</div>
									</div>
								</div>	
								<div class="single-product single-product-sidebar white-bg">
									<div class="product-img product-img-left">
										<a href="product-details-piring-gypsum.html"><img src="img/product/Piring gypsum.jpg" alt="" /></a>
									</div>
									<div class="product-content product-content-right">
										<div class="pro-title">
											<h4><a href="product-details-piring-gypsum.html">Piring Gypsum 30cm</a></h4>
										</div>
										<div class="pro-rating ">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>
										<div class="price-box">
											<span class="price product-price">Rp 600.000,00</span>
										</div>
										<div class="product-icon">
											<div class="product-icon-left f-left">
												<a href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
											</div>
										</div>
									</div>
								</div>									
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>

@endsection