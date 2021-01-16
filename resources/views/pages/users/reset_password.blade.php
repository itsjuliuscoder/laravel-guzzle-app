@extends('layouts.master')

@section('title')
	{{ $title }}
@endsection

@section('content')
    <div class="reset_panel pt-5">
        <div class="panel-body panel bg-default-100">
            <div class="reset_panel_body">
                <div class="text-center">
                    <div class="icon-object border-slate-300 text-slate-300"><i class="icon-user-lock"></i></div>
                    <h4>Create New Password</h4>
                    <div class="text-muted">Complete the details below</div>
                </div>
                @include('includes.flash_message')
                <form class="register-form mt-3" action="/create_password/{{$id}}" method="POST">
                    
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
                    <div class="input-container">
                        <input type="hidden" name="id" value="{{$id}}" class="input-field">
                    </div>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    <div class="input-container">
                        <i class="icon-lock2 icon"></i>
                        <input type="password" name="password" placeholder="New Password" class="input-field">
                    </div>
                    @if ($errors->has('password_confirmation'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    <div class="input-container">
                        <i class="icon-lock4 icon"></i>
                        <input type="password" name="password_confirmation" placeholder="New Password Again" class="input-field">
                    </div>
                    <button type="submit" class="btn">
                        Create New Password
                        <span class="icon-arrow-right14"></span>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection