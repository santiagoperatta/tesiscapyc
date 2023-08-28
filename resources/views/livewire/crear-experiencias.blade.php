<form class="md:w-full space-y-5" wire:submit.prevent="crearExperiencia">
	<!-- Código de Experiencia Laboral aquí -->
	<div>
		<x-input-label for="empresa" :value="__('Empresa')" />
		<x-text-input id="empresa" class="block mt-1 w-full" type="text" wire:model.lazy="empresa" placeholder="Empresa" :value="old('empresa')"/>
		<x-input-error :messages="$errors->get('empresa')" class="mt-2" />
	</div>

	<div class="grid grid-cols-2 gap-4">	
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
			<x-input-label for="puesto" :value="__('puesto')" />
			<x-text-input id="puesto" class="block mt-1 w-full" type="text" wire:model.lazy="puesto" placeholder="Puesto" :value="old('puesto')"/>
			<x-input-error :messages="$errors->get('puesto')" class="mt-2" />
		</div>
	</div>

	<div>
		<x-input-label for="descripcion" :value="__('Descripcion')" />
		<textarea
			wire:model="descripcion"
			placeholder="Descripcion general del trabajo"
			class="mb-2 w-full h-52"
		></textarea>
		<x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
	</div>
	
	<div class="grid grid-cols-2 gap-4">
		<div>
			<x-input-label for="fecha_inicio_experiencia" :value="__('Fecha de Inicio')" />
			<x-text-input id="fecha_inicio_experiencia" class="block mt-1 w-full" type="date" wire:model.lazy="fecha_inicio_experiencia"/>
			<x-input-error :messages="$errors->get('fecha_inicio_experiencia')" class="mt-2" />
		</div>

		<div>
			<x-input-label for="fecha_fin_experiencia" :value="__('Fecha de Finalizacion')" />
			<x-text-input id="fecha_fin_experiencia" class="block mt-1 w-full" type="date" wire:model.lazy="fecha_fin_experiencia"/>
			<x-input-error :messages="$errors->get('fecha_fin_experiencia')" class="mt-2" />
		</div>
	</div>

	<x-primary-button>
		GUARDAR
	</x-primary-button>
</form>
