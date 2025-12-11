@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="w-full h-full overflow-hidden">

        <div id="floatingText"
            class="absolute bottom-20 right-20 left-auto text-left text-white transition-all duration-300 w-fit">
            <div class="flex items-start gap-4">

                <img src="{{ asset('picture/logo-company.svg') }}" 
                    alt="Logo"
                    class="w-60 h-50 mt-15 object-contain">

                <p class="potta-one-regular text-4xl font-bold leading-tight">
                    Lezatnya<br>
                    nyata<br>
                    bukan<br>
                    sekedar<br>
                    wacana
                </p>
            </div>
        </div>

        <div class="w-full h-full overflow-hidden">
            <img src="https://images.getbento.com/accounts/ded52d79832218f313843dbd37f0252e/media/enEsIMAUQcC31KWaWzgh_Homepage%201.jpg?w=1200&fit=max&auto=compress,format&cs=origin"
                class="w-full h-full object-cover"
                alt="">
        </div>
        
        <div class="max-w-screen-2xl mx-auto px-4 pt-15 pb-32">
            <div class="grid grid-cols-2 md:grid-cols-4 auto-rows-[160px] md:auto-rows-[220px] gap-4">

                <div class="col-span-2 row-span-2 overflow-hidden rounded-xl">
                    <img src="https://images.getbento.com/accounts/ded52d79832218f313843dbd37f0252e/media/enEsIMAUQcC31KWaWzgh_Homepage%201.jpg?w=1200&fit=max&auto=compress,format&cs=origin"
                        class="w-full h-full object-cover hover:scale-105 transition duration-300"
                        alt="">
                </div>

                <div class="overflow-hidden rounded-xl">
                    <img src="https://images.getbento.com/accounts/ded52d79832218f313843dbd37f0252e/media/enEsIMAUQcC31KWaWzgh_Homepage%201.jpg?w=1200&fit=max&auto=compress,format&cs=origin"
                        class="w-full h-full object-cover hover:scale-105 transition duration-300"
                        alt="">
                </div>

                <div class="overflow-hidden rounded-xl">
                    <img src="https://images.getbento.com/accounts/ded52d79832218f313843dbd37f0252e/media/enEsIMAUQcC31KWaWzgh_Homepage%201.jpg?w=1200&fit=max&auto=compress,format&cs=origin"
                        class="w-full h-full object-cover hover:scale-105 transition duration-300"
                        alt="">
                </div>

                <div class="col-span-2 overflow-hidden rounded-xl">
                    <img src="https://images.getbento.com/accounts/ded52d79832218f313843dbd37f0252e/media/enEsIMAUQcC31KWaWzgh_Homepage%201.jpg?w=1200&fit=max&auto=compress,format&cs=origin"
                        class="w-full h-full object-cover hover:scale-105 transition duration-300"
                        alt="">
                </div>

                <div class="overflow-hidden rounded-xl">
                    <img src="https://images.getbento.com/accounts/ded52d79832218f313843dbd37f0252e/media/enEsIMAUQcC31KWaWzgh_Homepage%201.jpg?w=1200&fit=max&auto=compress,format&cs=origin"
                        class="w-full h-full object-cover hover:scale-105 transition duration-300"
                        alt="">
                </div>

                <div class="overflow-hidden rounded-xl">
                    <img src="https://images.getbento.com/accounts/ded52d79832218f313843dbd37f0252e/media/enEsIMAUQcC31KWaWzgh_Homepage%201.jpg?w=1200&fit=max&auto=compress,format&cs=origin"
                        class="w-full h-full object-cover hover:scale-105 transition duration-300"
                        alt="">
                </div>

                <div id="containerBox" class="col-span-2 md:col-span flex justify-end text-white transition-all duration-300 w-full animated-bg">
                    <div class="flex items-start gap-4 text-right relative z-10">
                        
                        <img src="{{ asset('picture/logo.svg') }}" 
                            alt="Logo"
                            class="w-60 h-50 mt-5 object-contain">

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
    const text = document.getElementById('floatingText');
    const floatingText = document.getElementById('floatingText');
    const containerBox = document.getElementById('containerBox');
    const navbarHeight = 50;

    function handleNavbar() {
        const isMobile = window.innerWidth < 768;

        if (isMobile) {
            // Navbar selalu top
            navbar.classList.remove('bottom-0');
            navbar.classList.add('top-0');

            // Teks selalu berada absolute di hero
            text.style.position = "absolute";
            text.style.bottom = "80px";
            text.style.top = ""; 

            return;
        }

        if (window.scrollY > 50) {
            navbar.classList.remove('bottom-0');
            navbar.classList.add('top-0', 'shadow-lg');

            text.style.position = "fixed";
            text.style.top = navbarHeight + "px";
            text.style.bottom = "";

            containerBox.classList.remove('opacity-0');
            containerBox.classList.add('opacity-100');

            floatingText.classList.remove('opacity-100');
            floatingText.classList.add('opacity-0');
        } else {
            navbar.classList.remove('top-0', 'shadow-lg');
            navbar.classList.add('bottom-0');

            text.style.position = "absolute";
            text.style.bottom = "80px";
            text.style.top = ""; 

            floatingText.classList.remove('opacity-0');
            floatingText.classList.add('opacity-100');

            containerBox.classList.remove('opacity-100');
            containerBox.classList.add('opacity-0');
        }
    }

    window.addEventListener('scroll', handleNavbar);
    window.addEventListener('resize', handleNavbar);

    handleNavbar();
</script>

@endif
@endsection
