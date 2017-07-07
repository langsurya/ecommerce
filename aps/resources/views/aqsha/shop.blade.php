@extends('aqsha.layouts.master')
@section('title','Aqsha Shop')
@section('content')
  <!-- breadcrumb start -->
    <div class="breadcrumb-area">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
          <li class="active">Shop</li>
        </ol>     
      </div>
    </div>
    <!-- breadcrumb end --> 
    <!-- shop-area start -->
    <div class="shop-area">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-4">
            <div class="column mt-55">
              <!-- bestseller-area -->
            <div class="bestseller-area dotted-style-2">
              <div class="section-title">
                <h3>Bestseller</h3>
              </div>
              <div class="single-product-items-active border-1">
                <div class="single-product-items">
                  @foreach ($products as $product)
                    <div class="single-product single-product-sidebar white-bg">
                      <div class="product-img product-img-left">
                        <a href="{{ url('product_detail/') }}/{{ $product->id }}"><img src="{{ url('/') }}/{{ $product->image()->first()->path_thumb }}" alt="" /></a>
                      </div>
                      <div class="product-content product-content-right">
                        <div class="pro-title">
                          <h4><a href="{{ url('product_detail/') }}/{{ $product->id }}">{{ $product->product_name }}</a></h4>
                        </div>
                        <div class="pro-rating ">
                          <a href="#"><i class="fa fa-star"></i></a>
                          <a href="#"><i class="fa fa-star"></i></a>
                          <a href="#"><i class="fa fa-star"></i></a>
                          <a href="#"><i class="fa fa-star"></i></a>
                          <a href="#"><i class="fa fa-star-o"></i></a>
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
                <div class="single-product-items">
                  @foreach ($products as $product)
                    <div class="single-product single-product-sidebar white-bg">
                      <div class="product-img product-img-left">
                        <a href="{{ url('product_detail/') }}/{{ $product->id }}"><img src="{{ url('/') }}/{{ $product->image()->first()->path_thumb }}" alt="" /></a>
                      </div>
                      <div class="product-content product-content-right">
                        <div class="pro-title">
                          <h4><a href="{{ url('product_detail/') }}/{{ $product->id }}">{{ $product->product_name }}</a></h4>
                        </div>
                        <div class="pro-rating ">
                          <a href="#"><i class="fa fa-star"></i></a>
                          <a href="#"><i class="fa fa-star"></i></a>
                          <a href="#"><i class="fa fa-star"></i></a>
                          <a href="#"><i class="fa fa-star"></i></a>
                          <a href="#"><i class="fa fa-star-o"></i></a>
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
            <!-- special-products-area -->
            <div class="special-products-area dotted-style-2 ptb-50">
              <div class="section-title">
                <h3>special-products</h3>
              </div>
              <div class="special-products-active border-1">
                <div class="single-product  white-bg">
                  <div class="product-img product-20">
                    <a href="product-details-replika-masjid.html"><img src="{{ url('/public/aqsha/') }}/img/product/Masjid Silver.jpg" alt="" /></a>
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
                <div class="single-product  white-bg">
                  <div class="product-img product-20">
                    <a href="product-details-hiasan-1.html"><img src="{{ url('/public/aqsha/') }}/img/product/lukisan karang.jpg" alt="" /></a>
                  </div>
                  <div class="product-content">
                    <div class="pro-title">
                      <h4><a href="product-details-lukisan-karang-1.html">Lukisan Karang</a></h4>
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
            </div>
            </div>
          </div>
          <!-- search head -->
          <div class="col-md-9 col-sm-8">
            <h2 class="page-heading mt-40">
              {{-- <span class="cat-name">Hasil Pencarian...</span> --}}
              <span class="heading-counter">There are {{ $products->total() }} products.</span>
            </h2>
            <div class="shop-page-bar">
              <div> 
                <div class="shop-bar">
                  <!-- Nav tabs -->
                  <ul class="shop-tab f-left" role="tablist">
                    <li role="presentation" class="active"><a href="#home" data-toggle="tab"><i class="fa fa-th-large" aria-hidden="true"></i></a></li>
                    <li role="presentation"><a href="#profile" data-toggle="tab"><i class="fa fa-th-list" aria-hidden="true"></i></a></li>
                  </ul>
                  <div class="selector-field f-left ml-20 hidden-xs">
                    <form action="#">
                      <label>Sort by</label>
                      <select name="select">
                        <option value="">----</option>
                        <option value="">Price: Lowest first</option>
                        <option value="">Price: Highest first</option>
                        <option value="">Product Name: A to Z</option>
                        <option value="">Product Name: Z to A</option>
                        <option value="">In stock</option>
                        <option value="">Reference: Lowest first</option>
                        <option value="">Reference: Highest first</option>
                      </select>
                    </form>
                  </div>
                  <div class="selector-field f-left ml-30 hidden-xs">
                    <form action="#">
                      <label>Show</label>
                      <select name="select">
                        <option value="">12</option>
                        <option value="">13</option>
                        <option value="">14</option>
                      </select>
                    </form>
                  </div>
                  <div class="selector-field f-right ml-30">
                    <form action="#">
                      <button class="compare">Compare (1)</button>
                    </form>
                  </div>
                </div>  
                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="home">
                    <div class="row">
                      @foreach ($shops as $shop)
                        <div class="col-lg-4 col-md-4 col-sm-6">
                          <div class="single-product  white-bg">
                            <div class="product-img product-20">
                            <a href="{{ url('product_detail/') }}/{{ $shop->id }}"><img src="{{ url('/') }}/{{ $shop->image()->first()->path_thumb }}" alt="" /></a>
                            </div>
                            <div class="product-content product-i">
                              <div class="pro-title">
                                <h4><a href="{{ url('product_detail/') }}/{{ $shop->id }}">{{ $shop->product_name }}</a></h4>
                              </div>
                              <div class="pro-rating ">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                              </div>
                              <div class="price-box">
                                <span class="price product-price">Rp {{ number_format($shop->product_price, 2, ",", ".") }}</span>
                              </div>
                              <div class="product-icon">
                                <div class="product-icon-left f-left">
                                  <a href="{{ url('/cart/addItem')}}/{{ $shop->id }}"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                                </div>
                                <div class="product-icon-right floatright">
                                  <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
                                  <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart"></i></a>
                                </div>
                              </div>
                            </div>
                            {{-- <span class="new">new</span> --}}
                          </div>
                        </div>
                      @endforeach
                    </div>
                    <div class="content-sortpagibar">
                      <div class="product-count display-inline">Showing  1 - 12 of {{ $shops->total() }} items</div>
                      <ul class="shop-pagi display-inline">
                        {{ $shops->links() }}
                        {{-- <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li> --}}
                      </ul>
                      <div class="selector-field f-right">
                        <form action="#">
                          <button class="compare">Compare (1)</button>
                        </form>
                      </div>                        
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="profile">
                    <div class="row">
                      @foreach ($products as $product)
                        <div class="col-lg-12">
                          <div class="single-product  shop-single-product mb-30 white-bg">
                            <div class="product-img pt-20">
                              <a href="{{ url('product_detail/') }}/{{ $product->id }}"><img src="{{ url('/') }}/{{ $product->image()->first()->path_thumb }}" alt="" /></a>
                            </div>
                            <div class="product-content">
                              <div class="pro-title">
                              <h4><a href="{{ url('product_detail/') }}/{{ $product->id }}">{{ $product->product_name }}</a></h4>
                              </div>
                              <div class="pro-rating mb-20">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                              </div>
                                {!! $product->product_description !!}
                              <div class="price-box">
                                <span class="price product-price">Rp {{ number_format($product->product_price, 2, ",", ".") }}</span>
                              </div>
                              <div class="product-icon">
                                <div class="product-icon-left f-left">
                                  <a href="{{ url('/cart/addItem')}}/{{ $product->id }}"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                                </div>
                                <div class="product-icon-right floatright">
                                  <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
                                  <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>  
                        </div>
                      @endforeach
                      {{-- <div class="col-lg-12">
                        <div class="single-product  shop-single-product mb-30 white-bg">
                          <div class="product-img pt-20">
                            <a href="product-details-piring-gypsum.html"><img src="img/product/Piring gypsum.jpg" alt="" /></a>
                          </div>
                          <div class="product-content">
                            <div class="pro-title">
                              <h4><a href="product-details-piring-gypsum.html">Piring Gypsum 30 cm</a></h4>
                            </div>
                            <div class="pro-rating mb-20">
                              <a href="#"><i class="fa fa-star"></i></a>
                              <a href="#"><i class="fa fa-star"></i></a>
                              <a href="#"><i class="fa fa-star"></i></a>
                              <a href="#"><i class="fa fa-star"></i></a>
                              <a href="#"><i class="fa fa-star-o"></i></a>
                            </div>
                            <p>Revolutionary multi-touch interface. iPod touch features the same multi-touch screen technology as iPhone. Pinch to zoom in on a photo. Scroll through your songs and videos with a flick. Flip through your library by album artwork with Cover Flow. Gorgeous 3.5-inch widescreen display. Watc..</p>
                            <div class="price-box">
                              <span class="price product-price">Rp 600.000,00</span>
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
                        </div>  
                      </div>
                      <div class="col-lg-12">
                        <div class="single-product  shop-single-product mb-30 white-bg">
                          <div class="product-img pt-20">
                            <a href="product-details-panel-kayu-zaitun.html"><img src="img/product/panel kayu.jpg" alt="" /></a>
                          </div>
                          <div class="product-content">
                            <div class="pro-title">
                              <h4><a href="product-details-panel-kayu-zaitun.html">Panel Kayu Zaitun 20cm</a></h4>
                            </div>
                            <div class="pro-rating mb-20">
                              <a href="#"><i class="fa fa-star"></i></a>
                              <a href="#"><i class="fa fa-star"></i></a>
                              <a href="#"><i class="fa fa-star"></i></a>
                              <a href="#"><i class="fa fa-star"></i></a>
                              <a href="#"><i class="fa fa-star-o"></i></a>
                            </div>
                            <p>Revolutionary multi-touch interface. iPod touch features the same multi-touch screen technology as iPhone. Pinch to zoom in on a photo. Scroll through your songs and videos with a flick. Flip through your library by album artwork with Cover Flow. Gorgeous 3.5-inch widescreen display. Watc..</p>
                            <div class="price-box">
                              <span class="price product-price">Rp 475.000,00</span>
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
                        </div>  
                      </div>
                      <div class="col-lg-12">
                        <div class="single-product  shop-single-product mb-30 white-bg">
                          <div class="product-img pt-20">
                            <a href="products-details-keramik-square.html"><img src="img/product/keramik square.jpg" alt="" /></a>
                          </div>
                          <div class="product-content">
                            <div class="pro-title">
                              <h4><a href="product-details-keramik-square.html">Kermaik Square uk 20x20cm</a></h4>
                            </div>
                            <div class="pro-rating mb-20">
                              <a href="#"><i class="fa fa-star"></i></a>
                              <a href="#"><i class="fa fa-star"></i></a>
                              <a href="#"><i class="fa fa-star"></i></a>
                              <a href="#"><i class="fa fa-star"></i></a>
                              <a href="#"><i class="fa fa-star-o"></i></a>
                            </div>
                            <p>Revolutionary multi-touch interface. iPod touch features the same multi-touch screen technology as iPhone. Pinch to zoom in on a photo. Scroll through your songs and videos with a flick. Flip through your library by album artwork with Cover Flow. Gorgeous 3.5-inch widescreen display. Watc..</p>
                            <div class="price-box">
                              <span class="price product-price">Rp 455.000,00</span>
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
                        </div>  
                      </div> --}}
                    </div>
                    <div class="content-sortpagibar">
                      <div class="product-count display-inline">Showing 1 - 12 of 13 items</div>
                      <ul class="shop-pagi display-inline">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                      </ul>
                      <div class="selector-field f-right">
                        <form action="#">
                          <button class="compare">Compare (1)</button>
                        </form>
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
    <!-- shop-area end -->
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
                <a href="#"><img src="img/brand/1.jpg" alt="" /></a>
              </div>
              <div class="single-brand">
                <a href="#"><img src="img/brand/2.jpg" alt="" /></a>
              </div>
              <div class="single-brand">
                <a href="#"><img src="img/brand/3.jpg" alt="" /></a>
              </div>
              <div class="single-brand">
                <a href="#"><img src="img/brand/4.jpg" alt="" /></a>
              </div>
              <div class="single-brand">
                <a href="#"><img src="img/brand/5.jpg" alt="" /></a>
              </div>
              <div class="single-brand">
                <a href="#"><img src="img/brand/6.jpg" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- brand-area-end --> 
@endsection