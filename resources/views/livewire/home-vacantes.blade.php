<div>
    <div class="p-4">
		<div class="p-8 max-w-7xl mx-auto">
			<div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
				@foreach ($vacantes as $vacante)
					<div class="shadow-lg">
						<a href={{route('vacantes.show', $vacante->id)}}>
							<img src="{{ asset('images/vacantes/' . $vacante->imagen) }}" alt="Imagen del post {{ $vacante->titulo }}">
						</a>
						<div class="p-5 bg-white border-b border-gray-200 md:flex md:justify-between">
							<div>
								<p class="text-xl font-bold">
									{{$vacante->titulo}}
								</p>
								<p class="text-l font-semibold">
									{{$vacante->empresa}}, {{$vacante->salario->salario}}
								</p>
								<p class="text-sm text-gray-500">Cierre Inscripciones: {{$vacante->ultimo_dia->format('Y-m-d')}}</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

