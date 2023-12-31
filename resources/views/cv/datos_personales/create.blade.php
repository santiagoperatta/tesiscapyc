<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
					@if (session('mensaje'))
						<div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4" role="alert">
							<p class="font-bold">¡Atención!</p>
							<p>{{ session('mensaje') }}</p>
						</div>
					@endif
					<h1 class="text-3xl font-bold text-center">Datos Personales</h1>
                    <div class="md:flex md:justify-center p-5">
						<livewire:crear-datos-personales/>
					</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>