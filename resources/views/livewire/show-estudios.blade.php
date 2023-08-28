<div class="px-4 sm:px-6 lg:px-8">
    <div class="space-y-4">
        @forelse ($estudios as $estudio)
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md">
                <div class="flex flex-col sm:flex-row justify-between items-center">
                    <div class="mb-2 sm:mb-0">
                        <a href="{{ route('estudios.index', $estudio->id) }}" class="uppercase block text-lg font-bold">{{ $estudio->titulo_carrera }}</a>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('estudios.edit', $estudio->id) }}" class="bg-blue-800 py-1 px-2 sm:py-2 sm:px-3 rounded-lg text-white text-xs font-bold uppercase">Editar</a>
                        <button wire:click="$emit('mostrarAlerta', {{ $estudio->id }})" class="bg-red-600 py-1 px-2 sm:py-2 sm:px-3 rounded-lg text-white text-xs font-bold uppercase">Eliminar</button>
                    </div>
                </div>
            </div>
        @empty
            <p class="p-3 text-center text-sm text-gray-600">No hay estudios cargados aún</p>
        @endforelse
        <div class="flex justify-center items-center mt-4">
            <a href="{{ route('estudios.create') }}" class="bg-green-500 py-2 px-6 rounded-lg text-white text-xs font-bold uppercase text-center">Agregar Estudio</a>
        </div>
    </div>
</div>

@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    Livewire.on('mostrarAlerta', estudioId => {
        Swal.fire({
            title: 'Eliminar Estudio',
            text: "Una vez eliminado no puede recuperarse",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar',
            cancelButtonText: "Cancelar" 
        }).then((result) => {
            if (result.isConfirmed) {
                //eliminar el estudio
                Livewire.emit('eliminarEstudio', estudioId)
                
                Swal.fire(
                    'Eliminado',
                    'Tu estudio ha sido eliminado.',
                    'success'
                )
            }
        })
    })
</script>
@endpush