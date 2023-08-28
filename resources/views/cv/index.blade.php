<x-app-layout>
    <div class="bg-white px-20 gap-8">
        @if (session()->has('mensaje'))
        <div class="mt-4 text-center text-lg text-green-600 space-y-1">
            {{ session('mensaje') }}
        </div>
        @endif
        <h1 class="text-3xl font-bold text-center">Mi CV</h1>
        <div class="max-w mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 rounded-lg shadow-md w-full">
				<a href="{{ $datopersonal ? route('datos_personales.edit', $datopersonal->id) : route('datos_personales.create') }}" class="block">
					<p class="text-lg uppercase font-bold">DATOS PERSONALES</p>
					<p class="text-left text-gray-700">Completa tus datos personales para destacar en tu CV.</p>
				</a>
            </div>

            <div class="bg-white p-8 rounded-lg shadow-md w-full mt-8">
                <a href="{{ route('estudios.index') }}" class="block">
                    <p class="text-lg uppercase font-bold">ESTUDIOS</p>
                    <p class="text-left text-gray-700">Agrega tus logros académicos y cursos realizados.</p>
                </a>
            </div>

            <div class="bg-white p-8 rounded-lg shadow-md w-full mt-8">
                <a href="{{ route('experiencias.index') }}" class="block">
                    <p class="text-lg uppercase font-bold">EXPERIENCIAS LABORALES</p>
                    <p class="text-left text-gray-700">Muestra tus trabajos anteriores y experiencia laboral.</p>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>