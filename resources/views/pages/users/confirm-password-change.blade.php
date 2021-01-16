@extends('layouts.master')

@section('title')
	{{ $title }}
@endsection

@section('content')
<div class="register_wrapper">
    <div class="confirmation mt-4">
        <div class="panel panel-body bg-default-100 border-top-primary mt-3">
            <div class="confirmation_body">
                <div class="container">
                    <div class="text-center">
                        <h3>New Password Saved!</h3>
                        @include('includes.flash_message')
                        <p>Click <a href="/login">Login</a>, to login with your new password</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection