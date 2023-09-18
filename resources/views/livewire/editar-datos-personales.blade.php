<form class="md:w-full space-y-5" wire:submit.prevent='editarDatos'>
	<div class="mb-5 w-60 mx-auto">
		<img src="{{ asset('images/fotosperfil/' . $imagen) }}" class="rounded-full mx-auto">
	</div>

	<div>
		<x-input-label for="imagen" :value="__('Imagen')" />
		<x-text-input id="imagen" class="block mt-1 w-full" type="file" wire:model="imagen_nueva" accept="image/*"/>
		
		<x-input-error :messages="$errors->get('imagen')" class="mt-2" />
	</div>
	<div>
		@if ($imagen_nueva)
			Imagen nueva:
			<img src="{{$imagen_nueva->temporaryUrl()}}" alt="">
			
		@endif
	</div>

	<div class="grid grid-cols-2 gap-4">
        <div>
            <div class="mt-1">
                <x-input-label for="nombre" :value="__('Nombre')" />
                <x-text-input id="nombre" class="block mt-1 w-full px-4 py-2" type="text" wire:model.lazy="nombre" placeholder="Nombre" :value="old('nombre')" />
                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
            </div>
        </div>
        <div>
            <div class="mt-1">
                <x-input-label for="apellido" :value="__('Apellido')" />
                <x-text-input id="apellido" class="block mt-1 w-full px-4 py-2" type="text" wire:model.lazy="apellido" placeholder="Apellido" :value="old('apellido')" />
                <x-input-error :messages="$errors->get('apellido')" class="mt-2" />
            </div>
        </div>
    </div>
    
	<div class="grid grid-cols-2 gap-4">
		<div class="mt-1">
			<x-input-label for="telefono" :value="__('Telefono')" />
			<x-text-input id="telefono" class="block mt-1 w-full px-4 py-2" type="number" wire:model.lazy="telefono" placeholder="Tu numero de telefono" :value="old('telefono')" />
			<x-input-error :messages="$errors->get('telefono')" class="mt-2" />
		</div>
	
		<div class="mt-1">
			<x-input-label for="dni" :value="__('DNI')" />
			<x-text-input id="dni" class="block mt-1 w-full px-4 py-2" type="number" wire:model.lazy="dni" placeholder="Tu DNI" :value="old('dni')" />
			<x-input-error :messages="$errors->get('dni')" class="mt-2" />
		</div>
	</div>

	<div class="grid grid-cols-2 gap-4">
		<div class="mt-1">
			<x-input-label for="sexo" :value="__('Sexo')" />
			<x-text-input id="sexo" class="block mt-1 w-full px-4 py-2" type="text" wire:model.lazy="sexo" placeholder="Sexo" :value="old('sexo')" />
			<x-input-error :messages="$errors->get('sexo')" class="mt-2" />
		</div>
	
		<div class="mt-1">
			<x-input-label for="fecha_nacimiento" :value="__('fecha nacimiento')" />
			<x-text-input id="fecha_nacimiento" class="block mt-1 w-full px-4 py-2" type="date" wire:model.lazy="fecha_nacimiento" />
			<x-input-error :messages="$errors->get('fecha_nacimiento')" class="mt-2" />
		</div>	
	</div>

	<div class="grid grid-cols-3 gap-4">
		<div class="mt-1">
			<x-input-label for="provincia" :value="__('Provincia')" />
			<x-text-input id="provincia" class="block mt-1 w-full px-4 py-2" type="text" wire:model.lazy="provincia" placeholder="Tu provincia" :value="old('provincia')" />
			<x-input-error :messages="$errors->get('provincia')" class="mt-2" />
		</div>
	
		<div class="mt-1">
			<x-input-label for="localidad" :value="__('Localidad')" />
			<x-text-input id="localidad" class="block mt-1 w-full px-4 py-2" type="text" wire:model.lazy="localidad" placeholder="Tu localidad" :value="old('localidad')" />
			<x-input-error :messages="$errors->get('localidad')" class="mt-2" />
		</div>
	
		<div class="mt-1">
			<x-input-label for="direccion" :value="__('Direccion')" />
			<x-text-input id="direccion" class="block mt-1 w-full px-4 py-2" type="text" wire:model.lazy="direccion" placeholder="Tu direccion" :value="old('direccion')" />
			<x-input-error :messages="$errors->get('direccion')" class="mt-2" />
		</div>
	</div>

	<x-primary-button>
		GUARDAR
	</x-primary-button>
</form>