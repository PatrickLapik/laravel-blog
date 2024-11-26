<section>
    <header>
        <h2 class="py-2 font-bold">
            {{ __('Profile Information') }}
        </h2>

        <p class="text-sm text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <label class="w-full form-control">
            <div class="label">
                <span class="label-text">Name</span>
            </div>
            <input class="input input-bordered @error('name') input-error @enderror w-full" for="name"
                value="{{old('name', $user->name)}}" name="name" />
            <div class="label">
                @error('name')
                    <span class="label-text-alt text-error">{{ $message }}</span>
                @enderror
            </div>
        </label>

        <div>
            <label class="w-full form-control">
                <div class="label">
                    <span class="label-text">Email</span>
                </div>
                <input class="input input-bordered @error('email') input-error @enderror w-full" for="email"
                    value="{{old('email', $user->email)}}" name="email"/>
                <div class="label">
                    @error('email')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    @enderror
                </div>
                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2">
                            {{ __('Your email address is unverified.') }}

                            <button form="send-verification"
                                class="btn btn-primary">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="text-sm mt-2">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </label>

            <div class="w-full">

                <div class="flex justify-start items-center gap-2">
                    <input type="submit" class="btn btn-primary" value="Save">
                </div>

                @if (session('status') === 'profile-updated')
                    <p class="text-sm p-2">{{ __('Saved.') }}</p>
                @endif
            </div>
    </form>
</section>
