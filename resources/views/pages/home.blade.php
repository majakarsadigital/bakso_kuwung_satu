@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="w-full h-full overflow-hidden">
 <div class="absolute inset-0 
                bg-linear-to-l 
                from-black/50 
                to-transparent 
                z-10">
    </div>

        <div class="absolute bottom-36 right-20 text-left text-white z-20 w-fit">
            <div class="flex items-start gap-4">
                <p class="font-potta text-7xl font-semibold leading-tight text-right drop-shadow-lg">
                    Lezatnya<br>
                    nyata<br>
                    bukan<br>
                    sekedar<br>
                    wacana
                </p>
            </div>
        </div>

        <div class="w-full h-full overflow-hidden">
            <img src="{{ asset('picture/bks.jpg') }}"
                class="w-screen h-screen object-cover " alt="">
        </div>

        <div class="max-w-screen-2xl mx-auto px-4 pt-15 pb-32">
            <div class="grid grid-cols-2 md:grid-cols-4 auto-rows-[160px] md:auto-rows-[220px] gap-4">

                <div class="col-span-2 row-span-2 overflow-hidden rounded-xl">
                    <img src="https://images.getbento.com/accounts/ded52d79832218f313843dbd37f0252e/media/enEsIMAUQcC31KWaWzgh_Homepage%201.jpg?w=1200&fit=max&auto=compress,format&cs=origin"
                        class="w-full h-full object-cover hover:scale-105 transition duration-300" alt="">
                </div>

                <div class="overflow-hidden rounded-xl">
                    <img src="https://images.getbento.com/accounts/ded52d79832218f313843dbd37f0252e/media/enEsIMAUQcC31KWaWzgh_Homepage%201.jpg?w=1200&fit=max&auto=compress,format&cs=origin"
                        class="w-full h-full object-cover hover:scale-105 transition duration-300" alt="">
                </div>

                <div class="overflow-hidden rounded-xl">
                    <img src="https://images.getbento.com/accounts/ded52d79832218f313843dbd37f0252e/media/enEsIMAUQcC31KWaWzgh_Homepage%201.jpg?w=1200&fit=max&auto=compress,format&cs=origin"
                        class="w-full h-full object-cover hover:scale-105 transition duration-300" alt="">
                </div>

                <div class="col-span-2 overflow-hidden rounded-xl">
                    <img src="https://images.getbento.com/accounts/ded52d79832218f313843dbd37f0252e/media/enEsIMAUQcC31KWaWzgh_Homepage%201.jpg?w=1200&fit=max&auto=compress,format&cs=origin"
                        class="w-full h-full object-cover hover:scale-105 transition duration-300" alt="">
                </div>

                <div class="overflow-hidden rounded-xl">
                    <img src="https://images.getbento.com/accounts/ded52d79832218f313843dbd37f0252e/media/enEsIMAUQcC31KWaWzgh_Homepage%201.jpg?w=1200&fit=max&auto=compress,format&cs=origin"
                        class="w-full h-full object-cover hover:scale-105 transition duration-300" alt="">
                </div>

                <div class="overflow-hidden rounded-xl">
                    <img src="https://images.getbento.com/accounts/ded52d79832218f313843dbd37f0252e/media/enEsIMAUQcC31KWaWzgh_Homepage%201.jpg?w=1200&fit=max&auto=compress,format&cs=origin"
                        class="w-full h-full object-cover hover:scale-105 transition duration-300" alt="">
                </div>

                <div id="containerBox"
                    class="col-span-2 md:col-span flex justify-end text-white transition-all duration-300 w-full animated-bg">
                    <div class="flex items-start gap-4 text-right relative z-10">
                        <p class="potta-one-regular text-4xl font-bold leading-tight">
                            Lezatnya<br>
                            nyata<br>
                            bukan<br>
                            sekedar<br>
                            wacana
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

@if(request()->routeIs('index'))
    <script>
        const navbar = document.getElementById('navbar');

        function handleNavbar() {
            // MOBILE
            const isMobile = window.innerWidth < 768;

            // MOBILE -> SELALU TOP
            if (isMobile) {
                navbar.classList.remove('bottom-0');
                navbar.classList.add('top-0');
                return;
            }

            // DESKTOP HOME -> BOTTOM → TOP ON SCROLL
            if (window.scrollY > 50) {
                navbar.classList.remove('bottom-0');
                navbar.classList.add('top-0','shadow-lg');
            } else {
                navbar.classList.remove('top-0','shadow-lg');
                navbar.classList.add('bottom-0');
            }
        }

        window.addEventListener('scroll', handleNavbar);
        window.addEventListener('resize', handleNavbar);

        handleNavbar();
    </script>
    @endif
@endsection
