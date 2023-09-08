<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900">
                    <h1 class="my-10 text-3xl font-bold text-center mb-10">Mis Postulaciones</h1>
                    <div class="container mx-auto">
                        @if ($postulaciones !== null && count($postulaciones) > 0)
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200 sm:w-full sm:table">
                                    <thead>
                                        <tr>
                                            <th class="px-6 py-3 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Vacante</th>
                                            <th class="px-6 py-3 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Empresa</th>
                                            <th class="px-6 py-3 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Fecha de Postulación</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($postulaciones as $key => $postulacion)
                                        <tr>
                                            <td class="{{ $key === count($postulaciones) - 1 ? '' : 'border-b border-gray-300' }} px-6 py-4 whitespace-no-wrap">
                                                <div class="flex items-center justify-center">
                                                    <div class="text-center">
                                                        <div class="text-sm leading-5 font-medium text-gray-900">
                                                            {{ $postulacion->vacante->titulo }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="{{ $key === count($postulaciones) - 1 ? '' : 'border-b border-gray-300' }} px-6 py-4 whitespace-no-wrap">
                                                <div class="text-center">
                                                    <div class="text-sm leading-5 text-gray-900">{{ $postulacion->vacante->empresa }}</div>
                                                </div>
                                            </td>
                                            <td class="{{ $key === count($postulaciones) - 1 ? '' : 'border-b border-gray-300' }} px-6 py-4 whitespace-no-wrap">
                                                <div class="text-center">
                                                    <div class="text-sm leading-5 text-gray-900">{{ $postulacion->created_at->format('d/m/Y') }}</div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <p class="text-center">No tienes postulaciones.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>