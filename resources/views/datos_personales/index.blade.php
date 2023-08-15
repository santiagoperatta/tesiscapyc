<x-app-layout>
	@if (session()->has('mensaje'))
	<div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3">
		{{session('mensaje')}}
	</div>
	@endif
    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <div class="p-6 text-gray-900">
					<a href={{route('datos_personales.create')}} class="mt-10 text-3xl font-bold">Datos Personales</a>
                </div>
                <div class="p-6 text-gray-900">
					<a href={{route('datos_personales.create')}} class="mt-10 text-3xl font-bold">Estudios</a>
                </div>
                <div class="p-6 text-gray-900">
					<a href={{route('datos_personales.create')}} class="mt-10 text-3xl font-bold">Experiencia Laboral</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>