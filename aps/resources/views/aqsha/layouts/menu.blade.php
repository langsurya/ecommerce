<!-- mainmenu-area-start -->
  @if (Request::is('/'))
  <div class="mainmenu-area mainmenu-area-2 white-bg hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
            {{-- fungsi class "checkout-page" untuk hidden menu agar tidak tampil sebelum di klik --}}
                <div class="mainmenu-left visible-lg visible-md">
                    <div class="product-menu-title">
                        <h2>All categories <i class="fa fa-arrow-circle-down"></i></h2>
                    </div>
                    <div class="product_vmegamenu">
                        <ul>
                            <li>
                                <a href="{{ url('/') }}"><img src="{{ url('public/aqsha/') }}/img/menu-l/1.png" alt="" />Home</a></li>
                            <li>
                                <a href="#"><img src="{{ url('public/aqsha/') }}/img/menu-l/2.png" alt="" />Hiasan Dinding</a></li>
                            <li>
                                <a href="#"><img src="{{ url('public/aqsha/') }}/img/menu-l/3.png" alt="" />Aksesoris</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ url('public/aqsha/') }}/img/menu-l/4.png" alt="" />Replika</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ url('public/aqsha/') }}/img/menu-l/5.png" alt="" />Kerajinan Tangan</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ url('public/aqsha/') }}/img/menu-l/8.png" alt="" />About Us</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ url('public/aqsha/') }}/img/menu-l/9.png" alt="" />FAQ!</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ url('public/aqsha/') }}/img/menu-l/10.png" alt="" />Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>  
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="mainmenu">
                    <nav>
                        <ul>
                            <li class="active"><a href="{{ url('/') }}">home</a></li>
                            {{-- <li><a href="{{ url('/shop') }}">bestseller</a></li> --}}
                            <li><a href="{{ url('/shop') }}">product</a></li>
                            <li><a href="{{ url('/about') }}">About Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
  </div>
  @else
  <div class="mainmenu-area mainmenu-area-2 white-bg hidden-xs hidden-sm">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          {{-- fungsi class "checkout-page" untuk hidden menu agar tidak tampil sebelum di klik --}}
          <div class="mainmenu-left visible-lg checkout-page visible-md">
            <div class="product-menu-title">
                <h2>All categories <i class="fa fa-arrow-circle-down"></i></h2>
            </div>
            <div class="product_vmegamenu">
              <ul>
                <li>
                  <a href="{{ url('/') }}"><img src="{{ url('public/aqsha/') }}/img/menu-l/1.png" alt="" />Home</a></li>
                <li>
                  <a href="#"><img src="{{ url('public/aqsha/') }}/img/menu-l/2.png" alt="" />Hiasan Dinding</a></li>
                <li>
                  <a href="#"><img src="{{ url('public/aqsha/') }}/img/menu-l/3.png" alt="" />Aksesoris</a>
                </li>
                <li>
                  <a href="#"><img src="{{ url('public/aqsha/') }}/img/menu-l/4.png" alt="" />Replika</a>
                </li>
                <li>
                  <a href="#"><img src="{{ url('public/aqsha/') }}/img/menu-l/5.png" alt="" />Kerajinan Tangan</a>
                </li>
                <li>
                  <a href="#"><img src="{{ url('public/aqsha/') }}/img/menu-l/8.png" alt="" />About Us</a>
                </li>
                <li>
                  <a href="#"><img src="{{ url('public/aqsha/') }}/img/menu-l/9.png" alt="" />FAQ!</a>
                </li>
                <li>
                  <a href="#"><img src="{{ url('public/aqsha/') }}/img/menu-l/10.png" alt="" />Contact Us</a>
                </li>
              </ul>
            </div>
          </div>  
        </div>
        <div class="col-lg-9 col-md-9">
          <div class="mainmenu">
            <nav>
              <ul>
                <li class="active"><a href="{{ url('/') }}">home</a></li>
                {{-- <li><a href="{{ url('/shop') }}">bestseller</a></li> --}}
                <li><a href="{{ url('/shop') }}">product</a></li>
                <li><a href="{{ url('/about') }}">About Us</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif
<!-- mobile-menu-start -->
