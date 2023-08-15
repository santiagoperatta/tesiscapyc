<form class="md:w-1/2 space-y-5" wire:submit.prevent='crearDatos'>
	<div class="mt-4">
		<x-input-label for="nombre" :value="__('Nombre')" />
		<x-text-input id="nombre" class="block mt-1 w-full px-4 py-2" type="text" wire:model.lazy="nombre" placeholder="Nombre" :value="old('nombre')" />
		<x-input-error :messages="$errors->get('nombre')" class="mt-2" />
	</div>
	
	<div class="mt-4">
		<x-input-label for="apellido" :value="__('Apellido')" />
		<x-text-input id="apellido" class="block mt-1 w-full px-4 py-2" type="text" wire:model.lazy="apellido" placeholder="Apellido" :value="old('apellido')" />
		<x-input-error :messages="$errors->get('apellido')" class="mt-2" />
	</div>

	<div class="mt-4">
		<x-input-label for="telefono" :value="__('Telefono')" />
		<x-text-input id="telefono" class="block mt-1 w-full px-4 py-2" type="number" wire:model.lazy="telefono" placeholder="Tu numero de telefono" :value="old('telefono')" />
		<x-input-error :messages="$errors->get('telefono')" class="mt-2" />
	</div>

	<div class="mt-4">
		<x-input-label for="dni" :value="__('DNI')" />
		<x-text-input id="dni" class="block mt-1 w-full px-4 py-2" type="number" wire:model.lazy="dni" placeholder="Tu DNI" :value="old('dni')" />
		<x-input-error :messages="$errors->get('dni')" class="mt-2" />
	</div>

	<div class="mt-4">
		<x-input-label for="sexo" :value="__('Sexo')" />
		<x-text-input id="sexo" class="block mt-1 w-full px-4 py-2" type="text" wire:model.lazy="sexo" placeholder="Sexo" :value="old('sexo')" />
		<x-input-error :messages="$errors->get('sexo')" class="mt-2" />
	</div>

	<div class="mt-4">
		<x-input-label for="fecha_nacimiento" :value="__('fecha_nacimiento')" />
		<x-text-input id="fecha_nacimiento" class="block mt-1 w-full px-4 py-2" type="date" wire:model.lazy="fecha_nacimiento" />
		<x-input-error :messages="$errors->get('fecha_nacimiento')" class="mt-2" />
	</div>

	<div class="mt-4">
		<x-input-label for="provincia" :value="__('Provincia')" />
		<x-text-input id="provincia" class="block mt-1 w-full px-4 py-2" type="text" wire:model.lazy="provincia" placeholder="Tu provincia" :value="old('provincia')" />
		<x-input-error :messages="$errors->get('provincia')" class="mt-2" />
	</div>

	<div class="mt-4">
		<x-input-label for="localidad" :value="__('Localidad')" />
		<x-text-input id="localidad" class="block mt-1 w-full px-4 py-2" type="text" wire:model.lazy="localidad" placeholder="Tu localidad" :value="old('localidad')" />
		<x-input-error :messages="$errors->get('localidad')" class="mt-2" />
	</div>

	<div class="mt-4">
		<x-input-label for="direccion" :value="__('Direccion')" />
		<x-text-input id="direccion" class="block mt-1 w-full px-4 py-2" type="text" wire:model.lazy="direccion" placeholder="Tu direccion" :value="old('direccion')" />
		<x-input-error :messages="$errors->get('direccion')" class="mt-2" />
	</div>

	<div class="mt-4">
		<x-input-label for="imagen" :value="__('Imagen')" />
		<x-text-input id="imagen" class="block mt-1 w-full px-4 py-2" type="file" wire:model.lazy="imagen" accept="image/*" />
		
		<div class="my-5 w-80">
			@if($imagen)
				<img src="{{$imagen->temporaryUrl()}}">
			@endif
		</div>
		<x-input-error :messages="$errors->get('imagen')" class="mt-2" />
	</div>

	<x-primary-button>
		GUARDAR
	</x-primary-button>
</form>