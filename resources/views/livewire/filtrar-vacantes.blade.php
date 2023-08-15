<div class="p-4 py-10">
    <div class="max-w-7xl mx-auto">
        <form wire:submit.prevent="leerDatosFormulario">
            <div class="bg-white md:p-2 rounded-3xl flex flex-col md:flex-row gap-5 md:gap-0 items-end">
                <div class="w-full md:w-1/2 lg:w-1/3 mb-3 md:mb-0">
                    <input id="termino" type="text" placeholder="Buscar por Término: ej. Administracion" class="rounded-3xl border-none w-full focus:border-blue-300 focus:ring-0" wire:model="termino" />
                </div>

                <div class="w-full md:w-1/2 lg:w-1/3 mb-3 md:mb-0">
                    <select wire:model="categoria" class="border-none w-full focus:border-blue-300 focus:ring-0">
                        <option>Categoria</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/3 mb-3 md:mb-0">
                    <select wire:model="salario" class="border-none w-full focus:border-blue-300 focus:ring-0">
                        <option>Modalidad</option>
                        @foreach ($salarios as $salario)
                            <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="w-full md:w-auto">
                    <button type="submit" class="rounded-2xl bg-blue-500 hover:bg-blue-600 transition-colors text-white text-sm font-bold px-10 p-3 uppercase w-full md:w-auto">
                        Buscar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>