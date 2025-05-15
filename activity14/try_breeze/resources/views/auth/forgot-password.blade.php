<x-guest-layout>
    <div class="mb-4 text-sm" style="color: #2f855a;">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password
        reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" style="color: #22543d;" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus style="border: 2px solid #38a169; padding: 8px; background-color: #f0fff4; color: #22543d;" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: #c53030;" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button
                style="background-color: #2f855a; color: white; padding: 10px 20px; border-radius: 5px; font-weight: bold;">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>