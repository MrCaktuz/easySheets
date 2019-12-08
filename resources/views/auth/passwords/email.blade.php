@extends('layouts.app')

@section('content')
<div class="auth_container">
    <h1 class="page_title">{{ __('auth.forgotPassword') }}</h1>

    <form class="auth_form" method="POST" action="{{ route('password.email') }}">
        @csrf

        @if (session('status'))
            <p class="input_success" role="alert">
                {{ session('status') }}
            </p>
        @endif

        <div class="input_wrap">
            <label for="email" class="input_label">{{ __('auth.email') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <p class="input_error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="auth_action_container">
            <button type="submit" class="input_submit">
                {{ __('passwords.send') }}
            </button>
        </div>
    </form>
</div>
@endsection
