@extends('partials.layout')
@section('title', 'Forgot Password')
@section('content')
    <div class="container mx-auto card bg-base-300 p-2 w-1/2 shadow-xl">
        <div class="card-body">
            <div class="mb-4 text-sm">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->

                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Email</span>

                    </div>
                    <input name="email" type="email" placeholder="Email" value="{{ old('email') }}"
                        class="input input-bordered @error('email') input-error @enderror w-full" required
                        autocomplete="username" />
                    <div class="label">
                        @error('email')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>

                <div class="flex items-center justify-end mt-2">
                    <div class="flex justify-start items-center gap-2">
                        <input type="submit" class="btn btn-primary" value="Email Password Reset Link">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
