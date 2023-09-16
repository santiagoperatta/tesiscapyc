<form class="md:w-full space-y-5" wire:submit.prevent="crearCarta">
		<div>
			<x-input-label for="area_interes" :value="__('Area de Interes')" />
			<x-text-input id="area_interes" class="block mt-1 w-full" type="text" wire:model.lazy="area_interes" placeholder="Area de Interes" :value="old('area_interes')"/>
			<x-input-error :messages="$errors->get('area_interes')" class="mt-2" />
		</div>
	
	
		<div>
			<x-input-label for="objetivo_laboral" :value="__('Objetivo Laboral')" />
			<textarea
				wire:model="objetivo_laboral"
				placeholder="Objetivo Laboral"
				class="mb-2 w-full h-52"
			></textarea>
		</div>

	<x-primary-button>
		GUARDAR
	</x-primary-button>
</form>
