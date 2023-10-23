<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		@stack('styles')
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
		@livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
		@livewireScripts
		@stack('scripts')
    </body>

	<footer class="bg-white m-4">
		<div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
			<div class="sm:flex sm:items-center sm:justify-between">
				<div class="ml-4">
					<x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
				</div>
				<ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
					<li>
						<a href="#" class="mr-4 hover:underline md:mr-6 ">Sobre Nosotros</a>
					</li>
					<li>
						<a href="#" class="mr-4 hover:underline md:mr-6">Politicas de Privacidad</a>
					</li>
					<li>
						<a href="#" class="hover:underline">Contactanos</a>
					</li>
				</ul>
			</div>
			<hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
			<span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Capyc Envases</a>. Todos los derechos reservados.</span>
		</div>
	</footer>
</html>

