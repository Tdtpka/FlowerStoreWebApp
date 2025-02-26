<section>
    <header>
        <div class="title">Doi mat khau</div>

        <div class="label">Ensure your account is using a long, random password to stay secure.</div>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="form">
        @csrf
        @method('put')

        <div class="row">
            <x-input-label class="label" for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input class="field" id="update_password_current_password" name="current_password" type="password" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div class="row">
            <x-input-label class="label" for="update_password_password" :value="__('New Password')" />
            <x-text-input class="field" id="update_password_password" name="password" type="password" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div class="row">
            <x-input-label class="label" for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input class="field" id="update_password_password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="row">
            <x-primary-button class="button">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
