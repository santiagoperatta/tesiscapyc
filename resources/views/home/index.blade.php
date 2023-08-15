<x-app-layout>
	<div class="py-16 overflow-hidden lg:py-24" style="background-image: url('{{ asset('images/fondo.jpg') }}');">
		<div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
			<div class="relative">
				<h2 class="text-center text-4xl leading-8 font-extrabold tracking-tight text-white sm:text-6xl">Trabaja con Nosotros</h2>
				<p class="mt-4 max-w-3xl mx-auto text-center text-xl text-white">Conectando talento y oportunidades laborales en un solo lugar confiable. ¡Te estamos esperando!</p>
				<livewire:filtrar-vacantes/>
			</div>
		</div>
	</div>

	<livewire:home-vacantes/>
</x-app-layout>