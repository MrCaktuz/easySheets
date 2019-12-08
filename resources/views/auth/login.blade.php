@extends('layouts.app')

@section('content')
<div class="auth_container">
    <h1>{{ __('auth.login') }}</h1>
    <form class="auth_form" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="input_wrap">
            <label class="input_label" for="email">{{ __('auth.email') }}</label>
            <input id="email" class="input @error('email') input-invalid @enderror" placeholder="example@gmail.com" value="{{ old('email') }}" type="email" name="email" autocomplete="email" autofocus>
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
            <label class="input_label input_label-checkbox" for="remember">
                <input class="input_checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <span class="input_checkbox_checkmark"></span>
                {{ __('auth.remember') }}
            </label>
        </div>

        @if (Route::has('password.request'))
            <a class="auth_forgotPassword" href="{{ route('password.request') }}">
                {{ __('auth.forgotPassword') }}
            </a>
        @endif
        
        <div class="auth_action_container">
            <button type="submit" class="input_submit">
                {{ __('auth.login') }}
            </button>
        </div>
        
    </form>
</div>
@endsection
