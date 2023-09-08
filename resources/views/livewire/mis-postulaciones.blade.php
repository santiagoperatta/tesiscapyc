<div class="container mx-auto">
	<h1 class="text-3xl font-semibold mb-5">Mis Postulaciones</h1>
	<table class="min-w-full bg-white">
		<thead>
			<tr>
				<th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Vacante</th>
				<th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Fecha de Postulación</th>
			</tr>
		</thead>
		<tbody>
			@forelse ($postulaciones as $postulacion)
				<tr>
					<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
						<div class="flex items-center">
							<div class="ml-4">
								<div class="text-sm leading-5 font-medium text-gray-900">
									{{ $postulacion->vacante->titulo }}
								</div>
							</div>
						</div>
					</td>
					<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
						<div class="text-sm leading-5 text-gray-900">{{ $postulacion->created_at->format('d/m/Y') }}</div>
					</td>
				</tr>
			@empty
				<tr>
					<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300" colspan="2">
						No tienes postulaciones.
					</td>
				</tr>
			@endforelse
		</tbody>
	</table>
</div>