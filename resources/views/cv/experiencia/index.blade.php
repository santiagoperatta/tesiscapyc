<x-app-layout>
    <div class="bg-white py-16">
        <div class="max-w mx-auto sm:px-6 lg:px-8">
            <div class="px-20 gap-8">
                <div class=" text-gray-900">
                    <h1 class="text-3xl font-bold text-center">Experiencias</h1>
                        <livewire:mostrar-experiencias />
                </div>
            </div>
        </div>
    </div>
	@if (session()->has('mensaje'))
	<div class="text-center text-lg text-green-600">
		{{session('mensaje')}}
	</div>
	@endif
</x-app-layout>

