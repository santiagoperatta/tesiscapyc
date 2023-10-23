<div class="pl-2">
	<h2 class="font-semibold text-xl text-blue-900 leading-tight">
		{{$vacante->titulo}}
	</h2>
	<div class="mt-1 first-letter:flex space-x-4">
		<span class="text-sm text-gray-500"> <i class="py-1 fa-solid fa-tag"></i> {{$vacante->categoria->categoria}}</span>
		<span class="text-sm text-gray-500"> <i class="fa-regular fa-clock"></i></i> {{$vacante->salario->salario}}</span>
		<span class="text-sm text-gray-500"> <i class="fa-regular fa-building"></i></i> {{$vacante->empresa}}</span>
	</div>
	<p class="text-gray-800 mt-3">
		{!! nl2br(e($vacante->descripcion)) !!}
	</p>
	<img class="mt-4 w-1/2" src="{{('images/vacantes/' . $vacante->imagen) }}" alt="Imagen del post {{ $vacante->titulo }}">

	@guest
		<div class="mt-5 border-dashed p-5 text-center">
			<p>¿Deseas aplicar a esta vacante? <a  class="font-bold text-blue-800" href="{{route('register')}}">¡Crea una cuenta y aplica a esta y mas vacantes!</a></p>
		</div>
	@endguest

	@auth
		<livewire:postular-vacante :vacante="$vacante"/>
	@endauth
</div>



