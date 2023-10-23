<form class="md:w-1/2 space-y-5" wire:submit.prevent='crearVacante'>
	<div>
		<x-input-label for="titulo" :value="__('Titulo Vacante')" />
		<x-text-input id="titulo" class="block mt-1 w-full" type="text" wire:model="titulo" placeholder="Titulo vacante" :value="old('titulo')"/>
		<x-input-error :messages="$errors->get('titulo')" class="mt-2" />
	</div>

	<div>
		<x-input-label for="salario" :value="__('Salario')" />
		<select id="salario" wire:model="salario" class="mb-2 w-full"
		>
		<option value="">-- Seleccione --</option>
		@foreach ( $salarios as $salario )
			<option value="{{$salario->id}}">{{$salario->salario}}</option>
		@endforeach
		</select>
	</div>

	<div>
		<x-input-label for="categoria" :value="__('Categoria')" />
		<select id="categoria" wire:model="categoria" class="mb-2 w-full"
		>
		<option value="">-- Seleccione --</option>
		@foreach ( $categorias as $categoria )
			<option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
		@endforeach
		</select>
	</div>

	<div>
		<x-input-label for="empresa" :value="__('Empresa')" />
		<x-text-input id="empresa" class="block mt-1 w-full" type="text" wire:model="empresa" placeholder="Empresa: ej. Capyc, Supersol, SSD" :value="old('empresa')"/>
		<x-input-error :messages="$errors->get('empresa')" class="mt-2" />
	</div>

	<div>
		<x-input-label for="ultimo_dia" :value="__('Ultimo dia para postularse')" />
		<x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" wire:model="ultimo_dia"/>
		<x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
	</div>

	<div>
		<x-input-label for="descripcion" :value="__('Descripcion del Puesto')" />
		<textarea
			wire:model="descripcion"
			placeholder="Descripcion general del puesto"
			class="mb-2 w-full h-52"
		></textarea>
	</div>

	<div>
		<x-input-label for="imagen" :value="__('Imagen')" />
		<x-text-input id="imagen" class="block mt-1 w-full" type="file" wire:model="imagen" accept="image/*"/>
		
		<div class="my-5 w-80">
			@if($imagen)
				<img src="{{$imagen->temporaryUrl()}}">
			@endif
		</div>
		
		<x-input-error :messages="$errors->get('imagen')" class="mt-2" />
	</div>

	<x-primary-button>
		Crear Vacante
	</x-primary-button>
</form>