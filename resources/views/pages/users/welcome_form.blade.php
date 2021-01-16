@extends('layouts.master')

@section('title')
	{{ $title }}
@endsection

@section('content')
<div class="register_wrapper">
    <div class="panel panel-body bg-default-100 border-top-primary mt-8">
        <div class="row">
            <div class="col-md-6">
                <div class="login_info">
                    <div class="text-center">
                       <img src="../img/publisher/welcome.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="register_panel">
                    <div class="text-center">
                        <div class="icon-object border-slate-300 text-slate-300"><i class="icon-user"></i></div>
                        <h4>Log In</h4>
                        @if(isset($confirmation) && !empty($confirmation))
                            <span class="text-success mt-2 mb-2">{{ $confirmation }}</span>
                        @endif

                        @include('includes.flash_message')
                        <!-- login form goes -->
                        <form class="register-form mt-3" action="/login_user" method="POST">
                            
                            {{ csrf_field() }}
                            
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            <div class="input-container">
                                <i class="icon-mail5 icon"></i>
                                <input type="email" name="email" placeholder="Email Address" class="input-field">
                            </div>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                            <div class="input-container">
                                <i class="icon-lock4 icon"></i>
                                <input type="password" name="password" placeholder="Password" class="input-field">
                            </div>
                            <button type="submit" class="btn">
                                Login
                                <span class="icon-arrow-right14"></span>
                            </button>
                        </form>
                        <div class="clearfix"></div>
                        <!--<div class="content-divider"><span class="text-muted">Or Sign In With</span></div>-->
                        <div class="clearfix"></div>
                        <!--<div class="social-login-flex">
                            <div>
                                <a href="#" class="social-icon-flex social-icon1">
                                    <i class="icon-facebook"></i>
                                </a>
                            </div>
                            <div>
                                <a href="#" class="social-icon-flex social-icon2">
                                    <i class="icon-twitter"></i>
                                </a>
                            </div>
                            <div>
                                <a href="#" class="social-icon-flex social-icon3">
                                    <i class="icon-google"></i>
                                </a>
                            </div>
                        </div>-->
                        <!-- <p class="mt-3 mb-0">Don't have an account? <a href="register">Sign Up</a> </p> -->
                        <p class="mt-3"><a href="/reset-password">Forgot your password</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection