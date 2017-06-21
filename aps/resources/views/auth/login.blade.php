@extends('aqsha.layouts.master')
@section('title','Aqsha Shop')
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
              <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
              <li class="active">Login</li>
            </ol>           
        </div>
    </div>
    <!-- breadcrumb end -->
    <!-- account area start -->
        <div class="account-area pt-30 log">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-6">
                        <div class="account-info pb-30">
                            <form  role="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                                <div class="form-fields">
                                    <h2>Login</h2>
                                    <p>
                                        <label>
                                            Username or email address
                                            <span class="required">*</span>
                                        </label>
                                        <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </p>
                                    <p>
                                        <label>
                                            Password
                                            <span class="required">*</span>
                                        </label>
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </p>
                                </div>
                                <div class="form-action">
                                    <label>
                                    <a href="{{ url('/password/reset') }}" class="lost_password">Lost your password?</a>                               
                                        <input type="checkbox" name="remember">
                                        Remember me
                                    </label>
                                    <input value="Login" type="submit">
                                </div>                              
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6">
                        <form  role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}
                            <div class="form-fields pb-30">
                                <h2>Register</h2>
                                <p>
                                    <label>Full Name  <span class="required">*</span></label>
                                    <input type="text" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </p>
                                <p>
                                    <label>Username  <span class="required">*</span></label>
                                    <input type="text"  name="username" value="{{ old('username') }}" required autofocus>

                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </p>
                                <p>
                                    <label>Email address  <span class="required">*</span></label>
                                    <input type="email" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </p>
                                <p>
                                    <label>Password <span class="required">*</span></label>
                                    <input type="password" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </p>
                                <p>
                                    <label>Confirm Password <span class="required">*</span></label>
                                    <input type="password" name="password_confirmation" required>

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </p>
                            </div>
                            <div class="form-action floatright">
                                <input value="Register" type="submit">
                            </div>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- account area end -->   
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

