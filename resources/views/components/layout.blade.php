<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" id="favicon" href="{{ asset('asset/img/DivFusionLogo.svg') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/asset/fontawesome-free/css/all.min.css">
        <style>/* Custom scrollbar styling */
        .overflow-x-auto::-webkit-scrollbar { height: 8px; } 
        .overflow-x-auto::-webkit-scrollbar-thumb { background-color: rgba(0, 0, 0, 0.5); border-radius: 4px; } 
        .overflow-x-auto::-webkit-scrollbar-track { background-color: transparent; }
        .image-container { width: 300px; /* Adjust the width as needed */ height: 300px; /* Adjust the height as needed */ overflow: hidden; position: relative; } .image-container img {-webkit-mask-image: url('/asset/img/DivFusionLogoWhite.svg'); mask-image: url('/asset/img/DivFusionLogoWhite.svg'); -webkit-mask-size: ; mask-size: ; -webkit-mask-repeat: no-repeat; mask-repeat: no-repeat; -webkit-mask-position: center; mask-position: center; }
        </style>
        <script src="/asset/fontawesome-free/js/all.min.js"></script>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-slate-900 text-white min-h-screen">
        <x-header></x-header>
        <div>
            {{ $slot }}
        </div>
        <x-footer></x-footer>
        <script>
        document.addEventListener("DOMContentLoaded", () => {
            const reveals = document.querySelectorAll(".reveal");
            const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                entry.target.classList.add("opacity-100", "translate-y-0");
                entry.target.classList.remove("opacity-0", "translate-y-8");
                }
            });
            }, { threshold: 0.2 });

            reveals.forEach(el => observer.observe(el));
        });
        </script>
    </body>
</html>
