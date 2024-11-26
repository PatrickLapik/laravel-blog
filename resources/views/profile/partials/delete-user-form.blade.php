<section class="space-y-6">
    <header>
        <h2 class="font-bold py-2">
            {{ __('Delete Account') }}
        </h2>

        <p class="text-sm text-gray-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <div>
        <button x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')" class="btn btn-error">Delete
            Account</button>
    </div>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable class="card bg-base-300">
        <form method="post" action="{{ route('profile.destroy') }}" class="card-body">
            @csrf
            @method('delete')

            <h2 class="text-lg text-gray-100">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm dark:text-gray-400">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <label class="w-full form-control">
                    <div class="label">
                        <span class="label-text">New Password</span>
                    </div>
                    <input class="input input-bordered @error('password') input-error @enderror w-full" for="password"
                        name="password" type="password" autocomplete="new-password" />
                    <div class="label">
                        @if ($errors->userDeletion->has('password'))
                            <span class="label-text-alt text-error">
                                {{ $errors->userDeletion->first('password') }}
                            </span>
                        @endif
                    </div>
                </label>
            </div>

            <div class="mt-6 flex justify-end">
                <button class="btn btn-secondary" x-on:click="$dispatch('close')">Cancel</button>
                <button class="btn btn-error" type="submit">Delete Account</button>
            </div>
        </form>
    </x-modal>
</section>
