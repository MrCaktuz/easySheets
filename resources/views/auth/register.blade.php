@extends('layouts.app')

@section('content')
<div class="auth_container">
    <h1>{{ __('auth.register') }}</h1>
    <form class="auth_form" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="input_wrap">
            <label class="input_label" for="name">{{ __('auth.name') }}</label>
            <input id="name" type="text" class="input @error('name') input-invalid @enderror" placeholder="Iron Man" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
            @error('name')
                <p class="input_error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="input_wrap">
            <label class="input_label" for="email">{{ __('auth.email') }}</label>
            <input id="email" class="input @error('email') input-invalid @enderror" placeholder="example@gmail.com" value="{{ old('email') }}" type="email" name="email" autocomplete="email">
            @error('email')
                <p class="input_error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="input_wrap">
            <label class="input_label" for="password">{{ __('auth.password') }}</label>
            <input id="password" type="password" class="form-control @error('password') input-invalid @enderror" name="password" autocomplete="current-password">
            @error('password')
                <p class="input_error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="input_wrap">
            <label class="input_label" for="password-confirm">{{ __('auth.confirmPassword') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
        </div>

        <div class="auth_action_container">
            <button type="submit" class="input_submit">
                {{ __('auth.register') }}
            </button>
        </div>
        
    </form>
</div>
@endsection
