<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-themes="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
         @if (Request::segment(1) == '')
        <meta property="og:title" content="{{ config('app.name', 'Laravel') }}"/>
        <meta name="description" content="Satu Foto, Sejuta Cerita"/>
        <meta property="og:url" content="http:/foto-ku.test"/>
        <meta property="og:description" content="Lumina Fotografi"/>
        <meta property="og:image" content="{{ asset('gambar/avatarbaru.png') }}"/>
        <meta property="og:type" content="article"/>
        <title>{{ config('app.name', 'Laravel') }}</title>
        @elseif (Request::segment(1) == 'show')
        <meta property="og:title" content="{{ $artikel->title }}"/>
        <meta name="description" content="{{ $artikel->title }}"/>
        <meta property="og:url" content="http:/foto-ku.test/show/{{ $artikel->slug }}"/>
        <meta property="og:description" content="{{ $artikel->title }}"/>
        @if ($artikel->image)
        <meta property="og:image" content="{{ asset('storage/' . $artikel->image) }}"/>
        @else
         <meta property="og:image" content="{{ asset('gambar/avatarbaru.png') }}"/>
         @endif
         <meta property="og:type" content="article"/>

         <title>{{ config('app.name', 'Laravel') }} | {{ $artikel->title }}</title>
         @endif

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        {{-- google font --}}
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-jost">
@livewire('news-navbar')

<main class="py-10">
    {{ $slot }}
</main>

<footer class="bg-black text-white py-5">
<p class="text-center">
    @copyright {{ date('Y') }} - www.<span class="font-semibold">Lumina.com</span>
</p>
<div class="text-center text-gray-400">
    <small >Design| @by. <span class="text-red-500 border border-white text-xl px-2">L</span><span>umina</span></small>
</div>
</footer>

   @stack('modals')
        @livewireScripts
    </body>
</html>
