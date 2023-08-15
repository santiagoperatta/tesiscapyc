<x-guest-layout>
    <div class="mb-3 text-sm text-gray-600">
        {{ __('¿Olvidaste tu contraseña? Coloca tu email y te enviaremos un enlace para reestablecer una nueva contraseña') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <x-primary-button class="w-full justify-center mt-4">
            {{ __('Enviar link') }}
        </x-primary-button>

        <div class="flex justify-between mt-4">
			<x-link
				:href="route('register')">
				Registrate
			</x-link>

			<x-link
				:href="route('login')">
				Iniciar Sesion
			</x-link>
        </div>
    </form>
</x-guest-layout>
