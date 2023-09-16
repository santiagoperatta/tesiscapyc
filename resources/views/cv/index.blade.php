<x-app-layout>
    <div class="bg-white px-20 gap-8">
        @if (session()->has('mensaje'))
        <div class="mt-4 text-center text-lg text-green-600 space-y-1">
            {{ session('mensaje') }}
        </div>
        @endif
        <h1 class="mt-10 text-3xl font-bold text-center">Mi CV</h1>
        <div class="max-w mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 rounded-lg shadow-md w-full">
                <div class="flex items-center justify-start">
                    <i class="text-blue-700 fa-solid fa-user text-3xl mr-4"></i>
                    <a href="{{ $datopersonal ? route('datos_personales.edit', $datopersonal->id) : route('datos_personales.create') }}" class="block">
                        <p class="text-lg uppercase font-bold">DATOS PERSONALES</p>
                        <p class="text-left text-gray-700">Completa tus datos personales para destacar en tu CV.</p>
                    </a>
                </div>
            </div>

            <div class="bg-white p-8 rounded-lg shadow-md w-full mt-8">
                <div class="flex items-center justify-start">
                    <i class="text-blue-700 fa-solid fa-graduation-cap text-3xl mr-4"></i>
                    <a href="{{ route('estudios.index') }}" class="block">
                        <p class="text-lg uppercase font-bold">ESTUDIOS</p>
                        <p class="text-left text-gray-700">Agrega tus logros académicos y cursos realizados.</p>
                    </a>
                </div>
            </div>

            <div class="bg-white p-8 rounded-lg shadow-md w-full mt-8">
                <div class="flex items-center justify-start">
                    <i class="text-blue-700 fa-solid fa-laptop-code text-3xl mr-4"></i>
                    <a href="{{ route('experiencias.index') }}" class="block">
                        <p class="text-lg uppercase font-bold">EXPERIENCIAS LABORALES</p>
                        <p class="text-left text-gray-700">Muestra tus trabajos anteriores y experiencia laboral.</p>
                    </a>
                </div>
            </div>

            <div class="bg-white p-8 rounded-lg shadow-md w-full mt-8">
                <div class="flex items-center justify-start">
                    <i class="text-blue-700 fa-solid fa-handshake-simple text-3xl mr-4"></i>
                    <a href="{{ route('situacion_laboral.index') }}" class="block">
                        <p class="text-lg uppercase font-bold">SITUACION LABORAL</p>
                        <p class="text-left text-gray-700">Carga tu situación laboral y tu pretensión salarial.</p>
                    </a>
                </div>
            </div>

            <div class="bg-white p-8 rounded-lg shadow-md w-full mt-8">
                <div class="flex items-center justify-start">
                    <i class="text-blue-700 fa-regular fa-clipboard text-3xl mr-4"></i>
					<a href="{{ $cartapresentacion ? route('carta_presentacion.edit', $cartapresentacion->id) : route('carta_presentacion.create') }}" class="block">
                        <p class="text-lg uppercase font-bold">CARTA DE PRESENTACIÓN</p>
                        <p class="text-left text-gray-700">Cuéntanos sobre ti, así nos conocemos mejor.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>