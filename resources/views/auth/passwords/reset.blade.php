@extends('layouts.app')

@section('content')
<div class="auth_container">
    <h1 class="page_title">{{ __('passwords.resetTitle') }}</h1>

    <form class="auth_form" method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="input_wrap">
            <label for="email" class="input_label">{{ __('auth.email') }}</label>
            <input id="email" type="email" class="input @error('email') input-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <p class="input_error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="input_wrap">
            <label for="password" class="input_label">{{ __('passwords.newPassword') }}</label>
            <input id="password" type="password" class="input @error('password') input-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <p class="input_error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="input_wrap">
            <label class="input_label" for="password-confirm">{{ __('passwords.newConfirmPassword') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
        </div>

        <div class="auth_action_container">
            <button type="submit" class="input_submit">
                {{ __('passwords.validate') }}
            </button>
        </div>
    </form>
</div>
@endsection
