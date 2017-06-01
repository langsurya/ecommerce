@extends('aqsha.layouts.master')
@section('title','Aqsha Shop')
@section('content')
  <!-- slider-area-start -->
  @include('aqsha.widget.slider')
  <!-- slider-area-end -->
	<!-- product-tab-area-2-start -->
	<div class="product-tab-area-2 pb-50">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="product-tab-menu white-bg border-2">
            <ul>
              <li class="active"><a href="#home2" data-toggle="tab">Hot</a></li>
              <li><a href="#profile2" data-toggle="tab">Special</a></li>
            </ul>                       
          </div>
        </div>
      </div>
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="home2">
          <div class="row">
            <div class="col-lg-4 col-md-4 hidden-sm col_m  col-xs-12">

              <div class="single-product pt-30 pb-20 white-bg">
                <div class="product-img pb-40">
                	<a href="#"><img src="{{ url('public/aqsha/') }}/img/product/lukisan karang.jpg" alt="" /></a>
                </div>
                <div class="product-content">
                  <div class="pro-title">
                    <h4><a href="#">Lukisan Karang</a></h4>
                  </div>
                  <div class="pro-rating ">
                    <a href="#"><i class="fa fa-star"></i></a>
                    <a href="#"><i class="fa fa-star"></i></a>
                    <a href="#"><i class="fa fa-star"></i></a>
                    <a href="#"><i class="fa fa-star"></i></a>
                    <a href="#"><i class="fa fa-star-o"></i></a>
                  </div>
                  <div class="price-box">
                      <span class="price product-price">Rp 1.100.000,00</span>
                  </div>
                  <div class="product-icon">
                    <div class="product-icon-left f-left">
                      <a href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                    </div>
                    <div class="product-icon-right floatright">
                      <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
                      <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart"></i></a>
                    </div>
                  </div>
                </div>
                <span class="new">new</span>
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 dotted-style-2 col_m  col-xs-12">
              <div class="single-product-items-2-active ">
                {{-- tengah --}}
                <div class="single-product-items-2">
                  @foreach ($productsk as $row_center)
                    <div class="single-product single-product-sidebar white-bg">
                      <div class="product-img product-img-left">
                        <a href="{{ url('product_detail/') }}/{{ $row_center->id }}"><img src="{{ $row_center->image()->first()->path_full }}" alt="" /></a>
                      </div>
                      <div class="product-content product-content-right">
                        <div class="pro-title">
                          <h4><a href="{{ url('product_detail/') }}/{{ $row_center->id }}">{{ $row_center->product_name }}</a></h4>
                        </div>
                        <div class="pro-rating ">
                          <a href="#"><i class="fa fa-star"></i></a>
                          <a href="#"><i class="fa fa-star"></i></a>
                          <a href="#"><i class="fa fa-star"></i></a>
                          <a href="#"><i class="fa fa-star"></i></a>
                          <a href="#"><i class="fa fa-star"></i></a>
                        </div>
                        <div class="price-box">
                          <span class="price product-price">Rp {{ number_format($row_center->product_price, 2, ",", ".") }}</span>
                        </div>
                        <div class="product-icon">
                          <div class="product-icon-left f-left">
                            <a href="{{ url('/cart/addItem')}}/{{ $row_center->id }}"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>                                     
                  @endforeach
                </div>
                {{-- kanan --}}
                <div class="single-product-items-2">
                  @foreach ($products as $product)
                    <div class="single-product single-product-sidebar white-bg">
                      <div class="product-img product-img-left">
                      <a href="{{ url('product_detail/') }}/{{ $product->id }}"><img src="{{ $product->image()->first()->path_full }}" alt="" /></a>
                      </div>
                      <div class="product-content product-content-right">
                          <div class="pro-title">
                              <h4><a href="product-details-mug.html">{{ $product->product_name }}</a></h4>
                          </div>
                          <div class="pro-rating ">
                              <a href="#"><i class="fa fa-star"></i></a>
                              <a href="#"><i class="fa fa-star"></i></a>
                              <a href="#"><i class="fa fa-star"></i></a>
                              <a href="#"><i class="fa fa-star"></i></a>
                              <a href="#"><i class="fa fa-star"></i></a>
                          </div>
                          <div class="price-box">
                              <span class="price product-price">Rp {{ number_format($product->product_price, 2, ",", ".") }}</span>
                          </div>
                          <div class="product-icon">
                              <div class="product-icon-left f-left">
                                  <a href="{{ url('/cart/addItem')}}/{{ $product->id }}"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                              </div>
                          </div>
                      </div>
                    </div>
                  @endforeach                                
                </div>                              
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="profile2">
          <div class="row">
            <div class="col-lg-4 col-md-4 hidden-sm col_m  col-xs-12">
                <div class="single-product pt-30 pb-20 white-bg">
                    <div class="product-img pb-40">
                        <a href="product-details-replika-masjid.html"><img src="{{ url('public/aqsha/') }}/img/product/Masjid Silver.jpg" alt="" /></a>
                    </div>
                    <div class="product-content">
                        <div class="pro-title">
                            <h4><a href="product-details-replika-masjid.html">Miniatur Masjid Aqsa Silver</a></h4>
                        </div>
                        <div class="pro-rating ">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                        </div>
                        <div class="price-box">
                            <span class="price product-price">Rp 2.554.000,00</span>
                        </div>
                        <div class="product-icon">
                            <div class="product-icon-left f-left">
                                <a href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                            </div>
                            <div class="product-icon-right floatright">
                                <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
                                <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <span class="new">new</span>
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-12 dotted-style-2 col_m  col-xs-12">
                <div class="single-product-items-2-active ">
                    <div class="single-product-items-2">
                        <div class="single-product single-product-sidebar white-bg">
                            <div class="product-img product-img-left">
                                <a href="product-details-shall.html"><img src="{{ url('public/aqsha/') }}/img/product/Shall Palestine.jpg" alt="" /></a>
                            </div>
                            <div class="product-content product-content-right">
                                <div class="pro-title">
                                    <h4><a href="product-details-shall.html">Shall Palestine</a></h4>
                                </div>
                                <div class="pro-rating ">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="price product-price">Rp 150.00,00</span>
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
                                <a href="product-details-panel-kayu-zaitun.html"><img src="{{ url('public/aqsha/') }}/img/product/panel kayu.jpg" alt="" /></a>
                            </div>
                            <div class="product-content product-content-right">
                                <div class="pro-title">
                                    <h4><a href="product-details-panel-kayu-zaitun.html">Panel Kayu Zaitun 20cm</a></h4>
                                </div>
                                <div class="pro-rating ">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="price product-price">Rp 475.000,00</span>
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
                                <a href="product-details-piring-gypsum-vertikal"><img src="{{ url('public/aqsha/') }}/img/product/gypsum vertikal.jpg" alt="" /></a>
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
                                    <span class="price product-price">Rp 410.000,00</span>
                                </div>
                                <div class="product-icon">
                                    <div class="product-icon-left f-left">
                                        <a href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>                                      
                    </div>
                    <div class="single-product-items-2">
                        <div class="single-product single-product-sidebar white-bg">
                            <div class="product-img product-img-left">
                                <a href="product-details-pot.html"><img src="{{ url('public/aqsha/') }}/img/product/keramik pot.jpg" alt="" /></a>
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
                                <a href="product-details-keramik-square.html"><img src="{{ url('public/aqsha/') }}/img/product/keramik square.jpg" alt="" /></a>
                            </div>
                            <div class="product-content product-content-right">
                                <div class="pro-title">
                                    <h4><a href="product-details-keramik-square.html">Kermaik Square uk 20x20cm</a></h4>
                                </div>
                                <div class="pro-rating ">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="price product-price">Rp 455.000.,00</span>
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
                                <a href="product-details-piring-gypsum-horizontal.html"><img src="{{ url('public/aqsha/') }}/img/product/gypsum horizontal.jpg" alt="" /></a>
                            </div>
                            <div class="product-content product-content-right">
                                <div class="pro-title">
                                    <h4><a href="product-details-piring-gypsum-horizontal.html">Piring Gypsum Horizontal 20cm</a></h4>
                                </div>
                                <div class="pro-rating ">
                                  <a href="#"><i class="fa fa-star"></i></a>
                                  <a href="#"><i class="fa fa-star"></i></a>
                                  <a href="#"><i class="fa fa-star"></i></a>
                                  <a href="#"><i class="fa fa-star"></i></a>
                                  <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="price-box">
                                  <span class="price product-price">Rp 410.000,00</span>
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
    </div>
	</div>
	<!-- product-tab-area-2-end -->
	<!-- banner-area-start -->
	<div class="banner-area-2 pb-60">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="slider-single-img">
            <a href="#">
            <img class="img_a" src="{{ url('public/aqsha/') }}/img/banner/5.jpg" alt="" />
            <img class="img_b" src="{{ url('public/aqsha/') }}/img/banner/5.jpg" alt="" />
            </a>
          </div>                  
        </div>
      </div>
    </div>
	</div>
@endsection