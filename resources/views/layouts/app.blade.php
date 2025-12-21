<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Bakso Kuwung Satu')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=M+PLUS+Rounded+1c&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=M+PLUS+Rounded+1c&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Potta+One&display=swap"
        rel="stylesheet">
    <style>
        @media (max-width: 767px) {
            .reel-item {
                transition: transform 0.35s ease, opacity 0.35s ease;
                transform: translateY(-12px) scale(0.94);
                opacity: 0.7;
            }

            .reel-item.active {
                transform: translateY(20px) scale(1);
                opacity: 1;
                box-shadow: 0 0 10px 5px rgba(255, 255, 255, 0.248);

            }
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen flex flex-col bg-dark-primary">

    @include('partials.nav')

    <main
        class="flex-1 flex items-center justify-center {{ request()->routeIs('index') ? '' : 'mt-16 px-4 md:px-10 lg:px-10 p-4' }}">
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
