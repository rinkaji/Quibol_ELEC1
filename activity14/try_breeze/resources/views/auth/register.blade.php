<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" style="color: #22543d;" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name"
                style="border: 2px solid #38a169; padding: 8px; background-color: #f0fff4; color: #22543d;" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" style="color: #c53030;" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" style="color: #22543d;" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username"
                style="border: 2px solid #38a169; padding: 8px; background-color: #f0fff4; color: #22543d;" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: #c53030;" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" style="color: #22543d;" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password"
                style="border: 2px solid #38a169; padding: 8px; background-color: #f0fff4; color: #22543d;" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: #c53030;" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" style="color: #22543d;" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password"
                style="border: 2px solid #38a169; padding: 8px; background-color: #f0fff4; color: #22543d;" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" style="color: #c53030;" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2"
                href="{{ route('login') }}" style="color: #2f855a; text-decoration: underline; transition: color 0.2s;"
                onmouseover="this.style.color='#22543d'" onmouseout="this.style.color='#2f855a'">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4"
                style="background-color: #2f855a; color: white; padding: 10px 20px; border-radius: 5px; font-weight: bold;">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>