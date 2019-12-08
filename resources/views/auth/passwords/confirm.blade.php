@extends('layouts.app')

@section('content')
<div class="auth_container">
    <h1 class="card-header">{{ __('Confirm Password') }}</h1>
    
    <form class="auth_form" method="POST" action="{{ route('password.confirm') }}">
        @csrf
        
        <p>{{ __('passwords.confirm') }}</p>
        <div class="input_wrap">
            <label for="password" class="input_label">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <p class="input_error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        @if (Route::has('password.request'))
            <a class="auth_forgotPassword" href="{{ route('password.request') }}">
                {{ __('auth.forgotPassword') }}
            </a>
        @endif

        <div class="auth_action_container">
            <button type="submit" class="input_submit">
                {{ __('passwords.validate') }}
            </button>
        </div>
    </form>
</div>
@endsection
