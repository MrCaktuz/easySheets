@extends('layouts.app')

@section('content')
<div class="auth_container">
    <h1 class="page_title">{{ __('auth.verifyTitle') }}</h1>

    <form class="auth_form" method="POST" action="{{ route('verification.resend') }}">
        @csrf
        
        @if (session('resent'))
            <p class="input_success" role="alert">
                {{ __('auth.verifySentSuccess') }}
            </p>
        @endif

        <p>{{ __('auth.verifyMessage') }}</p>
        <p>{{ __('auth.verifyDisclaimer') }}</p>
        <div class="auth_action_container">
            <button type="submit" class="input_submit">{{ __('auth.verifySendAgain') }}</button>
        </div>
    </form>
</div>
@endsection
