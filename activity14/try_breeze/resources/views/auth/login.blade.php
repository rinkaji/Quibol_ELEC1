<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" style="color: #22543d;" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username"
                style="border: 1px solid #9ae6b4; padding: 8px; background-color: #f0fff4; color: #22543d;" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: #c53030;" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" style="color: #22543d;" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password"
                style="border: 1px solid #9ae6b4; padding: 8px; background-color: #f0fff4; color: #22543d;" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: #c53030;" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-green-300 text-green-600 shadow-sm focus:ring-green-500" name="remember">
                <span class="ms-2 text-sm" style="color: #2f855a;">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2"
                href="{{ route('password.request') }}"
                style="color: #2f855a; text-decoration: underline; transition: color 0.2s;"
                onmouseover="this.style.color='#22543d'" onmouseout="this.style.color='#2f855a'">
                {{ __('Forgot your password?') }}
            </a>
            @endif

            <x-primary-button class="ms-3"
                style="background-color: #38a169; color: white; padding: 8px 16px; border-radius: 4px;">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>