<form class="md:w-full space-y-5" wire:submit.prevent="editarEstudio">
	<div>
		<x-input-label for="titulo_carrera" :value="__('Carrera')" />
		<x-text-input id="titulo_carrera" class="block mt-1 w-full" type="text" wire:model.lazy="titulo_carrera" placeholder="Titulo de la Carrera" :value="old('titulo_carrera')"/>
		<x-input-error :messages="$errors->get('titulo_carrera')" class="mt-2" />
	</div>
	<div class="grid grid-cols-2 gap-4">	
		<div>
			<x-input-label for="tipo_estudio" :value="__('Tipo de estudio')" />
			<x-text-input id="tipo_estudio" class="block mt-1 w-full" type="text" wire:model.lazy="tipo_estudio" placeholder="Ej. Secundario, Universitario" :value="old('tipo_estudio')"/>
			<x-input-error :messages="$errors->get('titulo_carrera')" class="mt-2" />
		</div>

		<div>
			<x-input-label for="estado_estudio" :value="__('Estado')" />
			<x-text-input id="estado_estudio" class="block mt-1 w-full" type="text" wire:model.lazy="estado_estudio" placeholder="Ej. Pausado, Finalizado" :value="old('tipo_estudio')"/>
			<x-input-error :messages="$errors->get('estado_estudio')" class="mt-2" />
		</div>
	</div>

	<div>
		<x-input-label for="institucion" :value="__('Institucion')" />
		<x-text-input id="institucion" class="block mt-1 w-full" type="text" wire:model.lazy="institucion" placeholder="Institucion" :value="old('institucion')"/>
		<x-input-error :messages="$errors->get('institucion')" class="mt-2" />
	</div>
	<div class="grid grid-cols-2 gap-4">	
		<div>
			<x-input-label for="fecha_inicio_estudio" :value="__('Fecha de Inicio')" />
			<x-text-input id="fecha_inicio_estudio" class="block mt-1 w-full" type="date" wire:model.lazy="fecha_inicio_estudio"/>
			<x-input-error :messages="$errors->get('fecha_inicio_estudio')" class="mt-2" />
		</div>

		<div>
			<x-input-label for="fecha_fin_estudio" :value="__('Fecha de Finalizacion')" />
			<x-text-input id="fecha_fin_estudio" class="block mt-1 w-full" type="date" wire:model.lazy="fecha_fin_estudio"/>
			<x-input-error :messages="$errors->get('fecha_fin_estudio')" class="mt-2" />
		</div>
	</div>

	<x-primary-button>
		GUARDAR
	</x-primary-button>
</form>
