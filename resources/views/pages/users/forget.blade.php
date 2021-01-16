@extends('layouts.master')

@section('title')
	{{ $title }}
@endsection

@section('content')
    <div class="reset_panel pt-5">
        <div class="panel-body panel bg-default-100">
            <div class="reset_panel_body">
                <div class="text-center">
                    <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reset"></i></div>
                    <h4>Reset Your Password</h4>
                    <div class="text-muted">Follow the instructions sent to your Email</div>
                </div>
                <form class="register-form mt-3" action="/password_recovery" method="POST">
                    
                    {{ csrf_field() }}

                    <div class="input-container">
                        <i class="icon-mail5 icon"></i>
                        <input type="email" name="email" placeholder="Email Address" class="input-field">
                    </div>
                    <button type="submit" class="btn">
                        Reset Password
                        <span class="icon-arrow-right14"></span>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection