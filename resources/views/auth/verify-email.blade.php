@extends('partials.layout')
@section('title', 'Verify Email')
@section('content')
<div class="container mx-auto card bg-base-300 w-1/2 shadow-xl">
    <div class="card-body">

    <div class="mb-4 text-gray-400">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didnt receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-400">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <button class="btn btn-primary" type="submit">Resend Verification Email</button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="btn">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
    </div>
</div>
@endsection