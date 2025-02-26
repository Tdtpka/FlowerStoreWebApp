<section class="space-y-6">
    <x-modal name="confirm-user-deletion" :show="true" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="title">
                {{ __('Xoa tai khoan') }}
            </h2>

            <p class="label">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="row">
                <x-input-label for="password" value="{{ __('Password') }}" class="label" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="field"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="row">
                <x-danger-button class="button">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
