<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" novalidate>
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

		<div class="mt-4">
            <x-input-label for="email" :value="__('¿Que tipo de cuenta deseas?')" />
           
			<select
			id="rol"
			name="rol"
			class="block text-sm text-gray-500 font-bold uppercase mb-2 w-full"
		   >
				<option value="">-- Selecciona un rol --</option>
				<option value="1">Developer - Obtener empleo</option>
				<option value="2">Recruiter - Publicar empleos</option>
		   </select>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-3">
            <x-input-label for="password_confirmation" :value="__('Confirma tu Contraseña')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

		<x-primary-button class="w-full justify-center mt-4">
			{{ __('Crear Cuenta') }}
		</x-primary-button>

        <div class="flex justify-between mt-4">
			<x-link
				:href="route('login')">
				¿Ya tienes una cuenta?
			</x-link>
        </div>
    </form>
</x-guest-layout>
