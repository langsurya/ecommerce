    
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{ url('public/aqsha/') }}/img/favicon.png" />
        <!-- Place favicon.ico in the root directory -->
            <!-- all css here -->
            <!-- bootstrap.min.css -->
        <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
            <!-- font-awesome.min.css -->
        <link rel="stylesheet" href="{{ asset('public/aqsha/css/font-awesome.min.css') }}">
            <!-- owl.carousel.css -->
        <link rel="stylesheet" href="{{ asset('public/aqsha/css/owl.carousel.css') }}">
            <!-- owl.carousel.css -->
        <link rel="stylesheet" href="{{ asset('public/aqsha/css/meanmenu.min.css') }}">
            <!-- shortcode/shortcodes.css -->
        <link rel="stylesheet" href="{{ asset('public/aqsha/css/shortcode/shortcodes.css') }}">
            <!-- nivo-slider.css -->
        <link rel="stylesheet" href="{{ asset('public/aqsha/css/nivo-slider.css') }}">
            <!-- style.css -->
        <link rel="stylesheet" href="{{ asset('public/aqsha/style.css') }}">
            <!-- responsive.css -->
        <link rel="stylesheet" href="{{ asset('public/aqsha/css/responsive.css') }}">
        @section('css')
        @show
      <script src="{{ asset('public/aqsha/') }}/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!-- Add your site or application content here -->
        <!-- header -->
        @include('aqsha.layouts.header')
        <!-- header -->
        <!-- mainmenu-area-start -->
        @if (Request::is('/'))
            @include('aqsha.layouts.menu_home')
            @else
            @include('aqsha.layouts.menu')               
        @endif
        <!-- mainmenu-area-end -->
        
        @yield('content')
        <!-- newletter-area-start -->
        <div class="newletter-area ptb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="newletter-logo">
                            <a href="#"><img src="{{ url('public/aqsha/') }}/img/logo.jpeg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="subscribe-form">
                            <form action="#">
                                <input placeholder="Email address..." type="text"/>
                                <button class="subscribe">Subscribe</button>                            
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="subscribe-social text-right">
                            <a href="#"><i class="fa fa-youtube"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newletter-area-end -->
        <footer>
            <!-- footer-top-area -->
            <div class="footer-top-area border-1 ptb-30 bg-color-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-title">
                                <h4>Store Information</h4>
                            </div>
                            <div class="footer-widget">
                                <div class="contact-info">
                                    <ul>
                                        <li>
                                            <div class="contact-icon">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            <div class="contact-text">
                                                <span>PO Box 16122 Collins Street West Victoria 8007 Australia</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contact-icon">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="contact-text">
                                                <a href="#"><span>demo@towerthemes.com</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contact-icon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <div class="contact-text">
                                                <span>(+1)866-550-3669</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-title">
                                <h4>Information</h4>
                            </div>
                            <div class="footer-widget">
                                <div class="list-unstyled">
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="contact-us">Site Map</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-title">
                                <h4>My Account</h4>
                            </div>
                            <div class="footer-widget">
                                <div class="list-unstyled">
                                    <ul>
                                        <li><a href="checkout.html">My Account</a></li>
                                        <li><a href="#">Wish List</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-title">
                                <h4>Instagram</h4>
                            </div>
                            <div class="footer-widget"> 
                                <div class="footer-widget-img">
                                    <div class="single-img">
                                        <a href="#"><img src="{{ url('public/aqsha/') }}/img/footer/1.jpg" alt="" /></a>
                                    </div>
                                    <div class="single-img">
                                        <a href="#"><img src="{{ url('public/aqsha/') }}/img/footer/2.jpg" alt="" /></a>
                                    </div>
                                    <div class="single-img">
                                        <a href="#"><img src="{{ url('public/aqsha/') }}/img/footer/3.jpg" alt="" /></a>
                                    </div>
                                    <div class="single-img">
                                        <a href="#"><img src="{{ url('public/aqsha/') }}/img/footer/4.jpg" alt="" /></a>
                                    </div>
                                    <div class="single-img">
                                        <a href="#"><img src="{{ url('public/aqsha/') }}/img/footer/5.jpg" alt="" /></a>
                                    </div>
                                    <div class="single-img">
                                        <a href="#"><img src="{{ url('public/aqsha/') }}/img/footer/6.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- copyright-area-start -->
        <div class="copyright-area text-center bg-color-3">
            <div class="container"> 
                <div class="copyright-border ptb-30">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright text-left">
                              <p>Developed by <a href="http:\\www.cobytecs.com">Cobytecs</a>.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="payment text-right">
                              <a href="#"><img src="{{ url('public/aqsha/') }}/img/payment.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        <!-- copyright-area-end -->
        <!-- social_block-start -->
        <div id="social_block">
            <ul>
                <li class="facebook"><a href="#">Facebook</a></li>
                <li class="twitter"><a href="#">twitter</a></li>
                <li class="rss"><a href="#">rss</a></li>
                <li class="youtube"><a href="#">youtube</a></li>
                <li class="google-plus"><a href="#">google plus</a></li>
                <li class="pinterest"><a href="#">pinterest</a></li>
            </ul>
        </div>
        <!-- social_block-end -->
        
        <!-- all js here -->
        @section('js')
        @show
        <!-- jquery-1.12.0 -->
        <script src="{{ asset('public/aqsha/js/vendor/jquery-1.12.0.min.js') }}"></script>
        <!-- bootstrap.min.js -->
        <script src="{{ asset('public/aqsha/js/bootstrap.min.js') }}"></script>
        <!-- nivo.slider.js -->
        <script src="{{ asset('public/aqsha/js/jquery.nivo.slider.pack.js') }}"></script>
        <!-- jquery-ui.min.js -->
        <script src="{{ asset('public/aqsha/js/jquery-ui.min.js') }}"></script>
        <!-- jquery.magnific-popup.min.js -->
        <script src="{{ asset('public/aqsha/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- jquery.meanmenu.min.js -->
        <script src="{{ asset('public/aqsha/js/jquery.meanmenu.js') }}"></script>
        <!-- jquery.scrollup.min.js-->
        <script src="{{ asset('public/aqsha/js/jquery.scrollup.min.js') }}"></script>
        <!-- owl.carousel.min.js -->
        <script src="{{ asset('public/aqsha/js/owl.carousel.min.js') }}"></script>      
        <!-- plugins.js -->
        <script src="{{ asset('public/aqsha/js/plugins.js') }}"></script>
        <!-- main.js -->
        <script src="{{ asset('public/aqsha/js/main.js') }}"></script>
        <!-- Theme Initialization Files -->
        <script src="{{ asset('public/aqsha/js/theme.init.js') }}"></script>
        <!-- Costum JS -->
        <script src="{{ asset('public/aqsha/js/costum.js') }}"></script>
    </body>
</html>
