<!-- slider-area-start -->
  <div class="slider-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs"></div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="main-slider">
            <div class="slider-container">
              <!-- Slider Image -->
              <div id="mainSlider" class="nivoSlider slider-image">
                  <img src="{{ url('public/aqsha/') }}/img/slider/slider 1.jpg" alt="" title="#htmlcaption1"/>
                  <img src="{{ url('public/aqsha/') }}/img/slider/slider 2.jpg" alt="" title="#htmlcaption2"/>
              </div>
            </div>  
          </div>
          <div class="slider-product dotted-style-1 pt-30">
              <div class="slider-product-active">
                @foreach ($products as $product)
                  <div class="single-product single-product-sidebar white-bg">
                      <div class="product-img product-img-left">
                          <a href="{{ url('product_detail/') }}/{{ $product->id }}"><img src="{{ $product->image()->first()->path_thumb }}" alt="" /></a>
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
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="slider-sidebar">
            <div class="slider-single-img mb-20">
              <a href="#">
                <img class="img_a" src="{{ url('public/aqsha/') }}/img/menu-l/1-1.jpg" alt="">
                <img class="img_b" src="{{ url('public/aqsha/') }}/img/menu-l/1-1.jpg" alt="">
              </a>
            </div>
            <div class="slider-single-img none-sm">
              <a href="#">
                <img class="img_a" src="{{ url('public/aqsha/') }}/img/menu-l/1-2.jpg" alt="">
                <img class="img_b" src="{{ url('public/aqsha/') }}/img/menu-l/1-2.jpg" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- slider-area-end -->