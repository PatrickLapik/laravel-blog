<section>
    <header>
        <h2 class="py-2 font-bold">
            {{ __('Update Password') }}
        </h2>

        <p class="text-sm text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <label class="w-full form-control">
            <div class="label">
                <span class="label-text">Current Password</span>
            </div>
            <input class="input input-bordered @error('current_password') input-error @enderror w-full"
                for="current_password" name="current_password" type="password" />
            <div class="label">
                @if ($errors->updatePassword->has('current_password'))
                    <span class="label-text-alt text-error">
                        {{ $errors->updatePassword->first('current_password') }}
                    </span>
                @endif
            </div>
        </label>


        <label class="w-full form-control">
            <div class="label">
                <span class="label-text">New Password</span>
            </div>
            <input class="input input-bordered @error('password') input-error @enderror w-full" for="password"
                name="password" type="password" autocomplete="new-password" />
            <div class="label">
                @if ($errors->updatePassword->has('password'))
                    <span class="label-text-alt text-error">
                        {{ $errors->updatePassword->first('password') }}
                    </span>
                @endif
            </div>
        </label>

        <label class="w-full form-control">
            <div class="label">
                <span class="label-text">Confirm Password</span>
            </div>
            <input class="input input-bordered @error('password_confirmation') input-error @enderror w-full"
                for="confirm_password" name="password_confirmation" type="password" autocomplete="new-password" />
            <div class="label">
                @if ($errors->updatePassword->has('confirm_password'))
                    <span class="label-text-alt text-error">
                        {{ $errors->updatePassword->first('confirm_password') }}
                    </span>
                @endif
            </div>
        </label>
        <div class="flex items-center gap-4">
            <div class="flex justify-start items-center gap-2">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>

            @if (session('status') === 'password-updated')
                <p class="text-sm p-2">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
