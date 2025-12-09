<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Bakso Kuwung Satu')</title>

    @vite('resources/css/app.css')
</head>

<body class="min-h-screen flex flex-col bg-[#0A0A0A]">

    @include('partials.nav')

    <main class="flex-1 flex items-center justify-center {{ request()->routeIs('index') ? "" : "mt-16 p-4"}}">
        @yield('content')
    </main>

   {{--  @if (!request()->routeIs('index'))
        @include('partials.footer')
    @endif --}}
    @include('partials.footer')
    @stack('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</body>


</html>
