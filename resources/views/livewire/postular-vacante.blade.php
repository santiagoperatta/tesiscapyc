<div class="p-5 mt-10 flex flex-col justify-center items-center">
	<h3 class="text-center text-2xl font-bold my-4">Postularme</h3>


	@if (session()->has('mensaje'))
		<div class="text-sm text-green-600 space-y-1">
			{{session('mensaje')}}
		</div>
	@else
		<form wire:submit.prevent='postularme' class="p-2 w-96 mt-5">
			<div class="mb-4">
				<x-input-label for="cv" :value="__('Curriculum')" />
				<x-text-input id="cv" class="block mt-1 w-full" type="file" wire:model="cv" accept=".pdf"/>
			</div>

			@error('cv')
			<x-input-error :messages="$message" class="mt-2" />
			@enderror

			<x-primary-button class="w-full justify-center mt-4">
				{{('Postularme')}}
			</x-primary-button>
		</form>
	@endif
</div>
