@extends('layouts.master')

@section('title')
	{{ $title }}
@endsection

@section('content')
<div class="register_wrapper">
    <div class="panel panel-body bg-default-100 border-top-primary">
        <div class="row">
            <div class="col-md-6">
                <div class="register_info"><br>
                    <div class="text-center">
                        <img src="img/afrihow.png" class="img-fluid pl-0">
                    </div>
                    <div class="text-left mt-2">
                        <div class="info">
                            <p>I am so excited to know that you have gotten this far. The future of the WORLD will be built here in AFRICA.</p>
                            <p>Knowing that you are the true reality of our product, we decided to first release our Minimum Viable Product where we will get your honest feedback and work on it before releasing our full version.</p>
                            <p>If you have any challenge, our support team is on ground to see you through. WELCOME TO THE FUTURE.</p>
                            <h6>CEO, Afrihow.</h6>
                            <span class="ceo">Julius Olajumoke</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="register_panel">
                    <div class="text-center">
                        <div class="icon-object border-slate-300 text-slate-300"><i class="icon-user"></i></div>
                        <h4>Create an Account</h4>
                        <div class="text-muted mt-3 mb-3">Please Enter Details</div>

                        @include('includes.flash_message')
                        <!-- registraation form goes -->
                        <form class="register-form" action="{{ url('create_user') }}" method="POST">
                            
                            {{ csrf_field() }}
                            
                            @if ($errors->has('fullname'))
                                <span class="text-danger">{{ $errors->first('fullname') }}</span>
                            @endif
                            <div class="input-container">
                                <i class="icon-user icon"></i>
                                <input type="text" name="fullname" placeholder="Full Name" value="{{ old('fullname') }}" class="input-field">
                            </div>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            <div class="input-container">
                                <i class="icon-mail5 icon"></i>
                                <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" class="input-field">
                            </div>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                            <div class="input-container">
                                <i class="icon-lock4 icon"></i>
                                <input type="password" name="password" placeholder="Password" value="{{ old('password') }}" class="input-field">
                            </div>
                            @if ($errors->has('password_confirmation'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                            <div class="input-container">
                                <i class="icon-lock4 icon"></i>
                                <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Enter Password Again" class="input-field">
                            </div>
                            <button type="submit" class="btn">
                                Register 
                                <span class="fa fa-arrow-right"></span>
                            </button>
                        </form>
                        <div class="clearfix"></div>
                        <p class="mt-2">Already have an account? <a href="login">Login</a> </p>
                        <div class="text-muted mt-1"><p>By continuing, you confirm that you've read and agreed to our <a href="/terms-privacy-policies" class="text-decorate-none">Terms & Privacy Policies</a> </p></div>
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