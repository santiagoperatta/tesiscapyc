<div class="px-4 sm:px-6 lg:px-8">
    <div class="space-y-4">
        @forelse ($experiencias as $experiencia)
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md">
                <div class="flex flex-col sm:flex-row justify-between items-center">
                    <div class="mb-2 sm:mb-0">
                        <a href="{{ route('experiencias.index', $experiencia->id) }}" class="uppercase block text-lg font-bold">{{ $experiencia->empresa }}</a>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('experiencias.edit', $experiencia->id) }}" class="bg-blue-800 py-1 px-2 sm:py-2 sm:px-3 rounded-lg text-white text-xs font-bold uppercase">Editar</a>
                        <button wire:click="$emit('mostrarAlerta', {{ $experiencia->id }})" class="bg-red-600 py-1 px-2 sm:py-2 sm:px-3 rounded-lg text-white text-xs font-bold uppercase">Eliminar</button>
                    </div>
                </div>
            </div>
        @empty
            <p class="p-3 text-center text-sm text-gray-600">No hay experiencias cargadas aún</p>
        @endforelse
        <div class="flex justify-center items-center mt-4">
            <a href="{{ route('experiencias.create') }}" class="bg-green-500 py-2 px-6 rounded-lg text-white text-xs font-bold uppercase text-center">Agregar Experiencia</a>
        </div>
    </div>
</div>

@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    Livewire.on('mostrarAlerta', experienciaId => {
        Swal.fire({
            title: 'Eliminar Experiencia',
            text: "Una vez eliminado no puede recuperarse",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar',
            cancelButtonText: "Cancelar" 
        }).then((result) => {
            if (result.isConfirmed) {
                //eliminar la vacante
                Livewire.emit('eliminarExperiencia', experienciaId)
                
                Swal.fire(
                    'Eliminado',
                    'Tu experiencia ha sido eliminada.',
                    'success'
                )
            }
        })
    })
</script>
@endpush