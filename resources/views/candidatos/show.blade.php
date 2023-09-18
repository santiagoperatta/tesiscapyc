<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$candidato->user->name}}
        </h2>
    </x-slot>

    <div class="pt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col sm:flex-row items-center">
                    <div class="flex-grow sm:mr-5 mb-5 sm:mb-0">
                        <h1 class="text-3xl font-bold mb-5">
                            Datos Personales
                        </h1>

                        <div>
                            <span class="font-bold uppercase">Nombre:</span> {{ $candidato->user->datosPersonales->nombre }} {{ $candidato->user->datosPersonales->apellido }}
                        </div>

                        <div>
                            <span class="font-bold uppercase">Telefono:</span> {{ $candidato->user->datosPersonales->telefono }}
                        </div>
                        <div>
                            <span class="font-bold uppercase">Dni:</span> {{ $candidato->user->datosPersonales->dni }}
                        </div>

                        <div>
                            <span class="font-bold uppercase">Sexo:</span> {{ $candidato->user->datosPersonales->sexo }}
                        </div>

                        <div>
                            <span class="font-bold uppercase">Edad:</span>
                            @php
                                $fechaNacimiento = $candidato->user->datosPersonales->fecha_nacimiento;
                                $edad = \Carbon\Carbon::parse($fechaNacimiento)->age;
                            @endphp
                            {{ $edad }}
                        </div>

                        <div>
                            <span class="font-bold uppercase">Localidad:</span> {{ $candidato->user->datosPersonales->localidad }}, {{ $candidato->user->datosPersonales->provincia }}
                        </div>

                        <div>
                            <span class="font-bold uppercase">Direccion:</span> {{ $candidato->user->datosPersonales->direccion }}
                        </div>
                    </div>
                    <div class="ml-5">
                        <img src="{{ asset('images/fotosperfil/' . $candidato->user->datosPersonales->imagen) }}" class="w-40">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col sm:flex-row items-center">
                    <div class="flex-grow sm:mr-5 mb-5 sm:mb-0">
                        <h1 class="text-3xl font-bold mb-5">Estudios</h1>
                        <ul>
                            @forelse ($estudios as $estudio)
                                <li>
                                    <span class="font-bold">Título de la carrera:</span> {{ $estudio->titulo_carrera }}<br>
                                    <span class="font-bold">Tipo de estudio:</span> {{ $estudio->tipo_estudio }}<br>
                                    <span class="font-bold">Estado de estudio:</span> {{ $estudio->estado_estudio }}<br>
                                    <span class="font-bold">Institución:</span> {{ $estudio->institucion }}<br>
									<span class="font-bold">Fecha de inicio:</span> {{ \Carbon\Carbon::parse($estudio->fecha_inicio_estudio)->format('d/m/Y') }}<br>
                                    <span class="font-bold">Fecha de fin:</span> {{ $estudio->fecha_fin_estudio ? \Carbon\Carbon::parse($estudio->fecha_fin_estudio)->format('d/m/Y') : 'Actualidad' }}<br>
                                </li>
                                @if (!$loop->last) <!-- Verifica si no es el último elemento en el bucle -->
                                    <hr class="my-6">
                                @endif
                            @empty
                                <p>No tiene estudios cargados.</p>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col sm:flex-row items-center">
                    <div class="flex-grow sm:mr-5 mb-5 sm:mb-0">
                        <h1 class="text-3xl font-bold mb-5">Experiencias</h1>
                        <ul>
                            @forelse ($experiencias as $experiencia)
                                <li>
                                    <span class="font-bold">Empresa:</span> {{ $experiencia->empresa }}<br>
                                    <span class="font-bold">Categoria:</span> {{ $experiencia->categoria->categoria }}<br>
                                    <span class="font-bold">Puesto:</span> {{ $experiencia->puesto }}<br>
                                    <span class="font-bold">Descripcion:</span> {{ $experiencia->descripcion }}<br>
									<span class="font-bold">Fecha de inicio:</span> {{ \Carbon\Carbon::parse($experiencia->fecha_inicio_experiencia)->format('d/m/Y') }}<br>
                                    <span class="font-bold">Fecha de fin:</span> {{ $experiencia->fecha_fin_experiencia ? \Carbon\Carbon::parse($experiencia->fecha_fin_experiencia)->format('d/m/Y') : 'Actualidad' }}<br>
                                </li>
                                @if (!$loop->last) <!-- Verifica si no es el último elemento en el bucle -->
                                    <hr class="my-6">
                                @endif
                            @empty
                                <p>No tiene experiencias cargadas.</p>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center my-5">
		<h1 class="text-xl font-bold mb-5">¿Aplica el candidato a la vacante?</h1>
        <i class="text-green-500 fa-solid fa-circle-check text-4xl mx-2"></i>
        <i class="text-yellow-500 fa-solid fa-square-minus text-4xl mx-2"></i>
        <i class="text-red-500 fa-solid fa-square-xmark text-4xl mx-2"></i>
    </div>
</x-app-layout>