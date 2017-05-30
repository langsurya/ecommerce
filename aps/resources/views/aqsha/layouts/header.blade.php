<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 146, 'stickySetTop': '-146px', 'stickyChangeLogo': false}">
    <!-- header-top-area-start -->
    <div class="header-top-area black-bg ptb-7 hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4">
                    <div class="header-top-left">
                        <span><a href="#">Call us toll free:</a>(+1)866-550-3669</span>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8">
                    <div class="header-top-right">
                        <ul>
                            <li class="slide-toggle"><a href="#">
                                <i class="fa fa-user"></i> <?php if(Auth::check()) { echo Auth::user()->name; } else { echo " My Account"; }  ?></a>
                                <ul class="show-toggle">
                                    @if (Auth::guest())
                                        <li><a href="{{ url('/register') }}">register</a></li>
                                        <li><a href="{{ url('/login') }}">login</a></li> 
                                        @else
                                        <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i class="fa fa-out"></i> Logout</a>
                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            </form>
                                       </li>
                                    @endif                                    
                                </ul>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-top-area-end -->
    <!-- header-bottom-area-start -->
    <div class="header-bottom-area header-bottom-area-2 white-bg ptb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ url('public/aqsha/img/logo-lah.png') }}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="header-bottom-middle">
                        <div class="top-search">
                            <span class="tex_top_email"><i class="fa fa-envelope"></i>Email: <span class="">email@email.com</span></span>
                        </div>
                        <div class="search-box">
                            <form action="#">
                                <select name="#" id="select">
                                    <option value="">All categories</option>
                                    <option value="40">Hiasan Dinding</option>
                                    <option value="41">Aksesoris</option>
                                    <option value="41">Replika</option>
                                    <option value="41">Kerjinan Tangan</option>                     
                                </select>
                                <input type="text" placeholder="Search..."/>
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>                              
                    </div>
                    <div class="header-bottom-right">
                        <div class="left-cart">
                            <div class="header-compire">
                                <a href="wishlist.html"><i class="fa fa-heart"></i> Wish List 0 </a>
                                <a href="compare.html"><i class="fa fa-refresh"></i> Compare  0 </a>
                            </div>
                        </div>
                        <div class="shop-cart-area shop-cart-area-2">
                            <div class="top-cart-wrapper">
                                <div class="block-cart">
                                    <div class="top-cart-title top-cart-title-2">
                                        <a href="{{ url('cart') }}">
                                            <span class="title-cart">my cart</span>
                                            <span class="count-item">{{ Cart::count() }} items</span>
                                            {{-- <span class="price">Rp {{ Cart::subtotal() }}</span> --}}
                                        </a>
                                    </div>
                                    <div class="top-cart-content">
                                        <ol class="mini-products-list">
                                            <!-- single item -->
                                            @foreach ($cartItems as $cartItem)
                                                <li>
                                                    <a class="product-image" href="product-details-gelang.html">
                                                    @foreach ($image as $img)
                                                        @if ($img->imagefirst->id_product == $cartItem->id)
                                                            <img src="{{ url($img->imagefirst->path_thumb) }}" alt="">
                                                        @endif
                                                    @endforeach
                                                    </a>
                                                    <div class="product-details">
                                                        <p class="cartproduct-name">
                                                            <a href="product-details-gelang.html">{{ $cartItem->name }} </a>
                                                        </p>
                                                        <strong class="qty">qty:{{ $cartItem->qty }}</strong>
                                                        <span class="sig-price">Rp {{ number_format($cartItem->price*$cartItem->qty, 2, ',', '.') }}</span>
                                                    </div>
                                                    <div class="pro-action">
                                                        <a class="btn-remove" href="{{ url('/cart/remove') }}/{{ $cartItem->rowId }}">remove</a>
                                                    </div>
                                                </li>
                                            @endforeach
                                            <!-- single item -->

                                        </ol>
                                        <div class="top-subtotal">
                                            Subtotal: <span class="sig-price">Rp {{ Cart::subtotal() }}</span>
                                        </div>
                                        <div class="cart-actions">
                                            <button><span>Checkout</span></button>
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
    <!-- header-bottom-area-end -->
</header>   