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
                       <img src="img/publisher/see_you_soon.jpeg" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="register_panel">
                    <div class="text-center">
                        <div class="icon-object border-slate-300 text-slate-300"><i class="icon-user"></i></div>
                        <h4>Log In</h4>
                        <div class="text-muted mt-3 mb-3">Please Enter Details</div>
                        <!-- registraation form goes -->
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @include('includes.flash_message')
                        <!-- login form goes -->
                        <form class="register-form" action="/login_user" method="POST">
                            
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
                            <div class="input-checkbox">
                                <input id="remember" type="checkbox" name="remember">
                                <label>Remember Me</label>
                            </div>
                            <button type="submit" class="btn">
                                Login
                                <span class="fa fa-arrow-right"></span>
                            </button>
                        </form>
                        <div class="clearfix"></div>
                        <!--<div class="content-divider"><span class="text-muted">Or Sign In With</span></div>-->
                        <div class="clearfix"></div>
                        <p class="mt-3"><a href="/reset-password"> Forgot your password</a></p>
                        <p><a href="/"> <i class="icon-chevron-left">&nbsp;Go Public</i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("button.btn").click(function(){
        $('span').removeClass('fa-arrow-right');
        $('span').addClass('fa-spinner');
        $('span').addClass('fa-pulse');
    }); 
</script>
@endsection