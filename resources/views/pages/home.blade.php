@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="w-full h-full overflow-hidden">
        <section>
            <div class="absolute hidden md:top-[5%] left-5 text-left text-white z-40 w-fit">
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex group items-center gap-2 text-lg font-light">
                        <svg xmlns="http://www.w3.org/2000/svg" class="group-hover:text-red-500" width="32" height="32"
                            viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                d="M17.27 22.464L1.5 1.536h5.23L22.5 22.464zm4.488-20.928l-8.313 8.915M2.242 22.464l8.307-8.908" />
                        </svg>
                        <span class="hover:underline underline-offset-1 group-hover:text-red-500">
                            <a href="http://" target="_blank" rel="noopener noreferrer">baksokuwungsatu_</a>
                        </span>
                    </div>
                    <div class="group flex items-center gap-2 text-lg font-light">
                        <svg xmlns="http://www.w3.org/2000/svg" class="group-hover:text-red-500" width="32"
                            height="32" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor">
                                <path stroke-linejoin="round"
                                    d="M18 6.5a.5.5 0 0 1 0-1m0 1a.5.5 0 0 0 0-1M7 12a5 5 0 1 0 10 0a5 5 0 1 0-10 0" />
                                <path d="M16.5 1.5h-9a6 6 0 0 0-6 6v9a6 6 0 0 0 6 6h9a6 6 0 0 0 6-6v-9a6 6 0 0 0-6-6Z" />
                            </g>
                        </svg>
                        <span class="hover:underline underline-offset-1 group-hover:text-red-500">
                            <a href="http://" target="_blank" rel="noopener noreferrer">bakso_bks</a>
                        </span>
                    </div>
                    <div class="flex group items-center gap-2 text-lg font-light">
                        <svg xmlns="http://www.w3.org/2000/svg" class="group-hover:text-red-500" width="32"
                            height="32" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linejoin="round">
                                <path
                                    d="M17 16.5c-1.74 1.74-5.749.257-7.753-1.747S5.76 8.74 7.5 7c.504-.504 1.198-.564 1.622-.544c.245.011.457.155.6.355l.952 1.334a1 1 0 0 1-.107 1.288l-.901.901c.166.5.7 1.7 1.5 2.5s2 1.334 2.5 1.5l.901-.9a1 1 0 0 1 1.288-.108l1.334.952c.2.143.344.355.355.6c.02.424-.04 1.118-.544 1.622Z" />
                                <path
                                    d="M12 22.5c5.799 0 10.5-4.701 10.5-10.5S17.799 1.5 12 1.5S1.5 6.201 1.5 12c0 1.912.511 3.706 1.405 5.25l-.88 4.725l4.725-.88A10.45 10.45 0 0 0 12 22.5Z" />
                            </g>
                        </svg>
                        <span class="hover:underline underline-offset-1 hover:text-red-500">
                            <a href="https://wa.me/6285895754473" target="_blank"
                                rel="noopener noreferrer">wa.me/6285895754473</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="absolute lg:hidden top-[10%] z-40 left-1/2 -translate-x-1/2">
                <img src="{{ asset('picture/logo_line.svg') }}" alt="">
            </div>
            <div class="absolute top-[40%] hidden sm:hidden md:hidden lg:block left-20 text-left text-white z-40 w-fit">
                <div class="items-start font-potta gap-4">
                    <p class="text-5xl">
                        <span>BAKSO KUWUNG</span> <span class="text-red-600">SATU</span>
                    </p>
                    <p class="text-3xl font-semibold leading-tight text-left drop-shadow-lg">
                        Lezatnya
                        nyata
                        bukan<br>
                        sekedar
                        wacana
                    </p>
                    <button type="button"
                        class="text-white mt-2 bg-red-600 box-border border border-transparent hover:bg-red-700 focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-full text-lg px-6 py-3.5 focus:outline-none">Makan
                        Bakso</button>
                </div>
            </div>
            <div class="absolute bottom-[30%] sm:block md:block lg:hidden left-5 text-left text-white z-40 w-fit">
                <div class="items-start font-potta">
                    <p class="text-3xl font-semibold leading-tight text-left drop-shadow-lg">
                        Lezatnya <br>
                        nyata <br>
                        bukan<br>
                        sekedar <br>
                        wacana
                    </p>
                </div>
            </div>
            <div class="absolute bottom-[16%] justify-center left-5 right-5 sm:hidden z-40 text-white">

                <div class="flex justify-between items-center gap-4 max-w-md">
                    <div class="flex-1">
                        <p class="text-base leading-snug drop-shadow-lg">
                            JL. Kuwung, Mergelo, Meri, Kec. Magersari, Kota Mojokerto, Jawa Timur 61315
                        </p>
                    </div>

                    <div
                        class="w-28 sm:w-32 aspect-square rounded-xl overflow-hidden border border-neutral-800 flex-shrink-0">
                        <iframe class="w-full h-full" frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1972.720403731177!2d112.44337659509707!3d-7.489673444161703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780d6ce304c77b%3A0xa51c8d67dc0935e9!2sBakso%20Kuwung%20Satu!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid"
                            allowfullscreen loading="lazy">
                        </iframe>
                    </div>
                </div>

            </div>
            <div class="absolute bottom-[5%] block lg:hidden left-1/2 -translate-x-1/2 z-40">
                <x-swipe-cta />
            </div>
            <div class="relative w-full h-screen block sm:block md:block lg:hidden">
                <img src="{{ asset('picture/bg_mobile.jpg') }}" class="absolute inset-0 w-full h-full object-cover z-0"
                    alt="">
            </div>
            <div id="controls-carousel" class="relative w-full h-screen hidden sm:hidden md:hidden lg:block"
                data-carousel="slide">
                <div class="relative h-full overflow-hidden">

                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <div class="relative w-full h-screen overflow-hidden">
                            <div class="absolute top-[10%] z-40 left-1/2 -translate-x-1/2">
                                <img src="{{ asset('picture/logo_line.svg') }}" alt="">
                            </div>
                            <div class="absolute top-[20%] right-60 z-40">
                                <img src="{{ asset('picture/bakso4.png') }}" class="size-[40rem]" alt="">
                            </div>

                            <div class="absolute bottom-20 right-20 z-40">
                                <img src="{{ asset('picture/drink.png') }}" alt="">
                            </div>

                            <div class="absolute bottom-0 right-0 z-10 opacity-50 -rotate-90">
                                <img src="{{ asset('picture/Ellipse 5.svg') }}" class="size-[60rem]" alt="">
                            </div>

                            <img src="{{ asset('picture/texture-dark.png') }}"
                                class="absolute inset-0 w-full h-full object-cover z-0" alt="">
                        </div>
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="relative w-full h-screen overflow-hidden">
                            <img src="{{ asset('picture/DSC_0400.png') }}"
                                class="absolute inset-0 w-full h-full object-cover z-0" alt="">
                        </div>
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="relative w-full h-screen overflow-hidden">

                            <img src="{{ asset('picture/DSC_0401.png') }}"
                                class="absolute inset-0 w-full h-full object-cover z-0" alt="">
                        </div>
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="relative w-full h-screen overflow-hidden">

                            <img src="{{ asset('picture/DSC_0402.png') }}"
                                class="absolute inset-0 w-full h-full object-cover z-0" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative border-t border-neutral-800 bg-neutral-950/60 backdrop-blur-sm">
            <div class="max-w-7xl mx-auto px-6 sm:px-6 lg:px-8 py-12 sm:py-16">
                <div class="mb-12">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white tracking-tight">
                        Menu Spesial Bakso Kuwung
                    </h2>
                    <p class="mt-4 text-neutral-400 max-w-2xl leading-relaxed text-sm sm:text-base">
                        Nikmati pilihan menu terbaik kami yang diracik dengan bahan berkualitas dan cita rasa khas yang
                        tidak terlupakan.
                    </p>
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <div
                        class="group relative  overflow-hidden rounded-base shadow-xs bg-linear-to-tl from-red-950/60 via-red-950/30 to-transparent flex flex-col md:flex-row transition-all duration-500 hover:shadow-lg hover:-translate-y-1">

                        <div class="absolute -right-24 -top-24 w-72 h-72 bg-red-600/10 rounded-full blur-3xl"></div>

                        <div class="relative md:w-1/2 w-full h-auto md:h-auto overflow-visible md:overflow-hidden">
                            <img class="w-full h-full object-contain md:object-cover transition-transform duration-700 group-hover:scale-105"
                                src="{{ asset('picture/bakso1.png') }}" alt="Bakso Kuwung Satu" />
                        </div>


                        <div class="relative flex flex-col justify-center p-6 md:w-1/2 md:pb-20">

                            <span class="mb-3 text-xs uppercase tracking-wider text-red-300/80 font-semibold">
                                Paket Spesial
                            </span>

                            <h5 class="mb-3 text-xl md:text-2xl font-bold tracking-tight text-vibrant-tertiary">
                                Temukan paket hemat Bakso Kuwung Satu
                            </h5>

                            <p class="text-sm md:text-base text-vibrant-primary leading-relaxed max-w-md">
                                Nikmati berbagai pilihan paket hemat Bakso Kuwung Satu yang dirancang khusus untuk Anda dan
                                keluarga.
                                Porsi lebih puas, harga lebih bersahabat, dengan cita rasa khas yang selalu konsisten di
                                setiap mangkuknya.
                            </p>

                            <div class="mt-6 flex flex-col gap-3 md:hidden">
                                <a href="{{ route('menu.index') }}"
                                    class="w-full text-center px-5 py-3 rounded-lg bg-red-600 text-white text-sm font-semibold hover:bg-red-700 transition">
                                    Lihat Paket
                                </a>

                                <a href="https://wa.me/6285895754473"
                                    class="w-full text-center px-5 py-3 rounded-lg border border-red-600 text-red-600 text-sm font-semibold hover:bg-red-600 hover:text-white transition">
                                    Pesan Sekarang
                                </a>
                            </div>

                            <div class="hidden md:flex absolute bottom-6 right-6 gap-3">
                                <a href="{{ route('menu.index') }}"
                                    class="px-5 py-2 rounded-lg bg-red-600 text-white text-sm font-semibold hover:bg-red-700 transition">
                                    Lihat Paket
                                </a>

                                <a href="#"
                                    class="px-5 py-2 rounded-lg border border-red-600 text-red-600 text-sm font-semibold hover:bg-red-600 hover:text-white transition">
                                    Pesan Sekarang
                                </a>
                            </div>
                        </div>
                    </div>


                    <div
                        class=" rounded-base bg-vibrant-primary md:bg-none md:bg-linear-to-r md:from-vibrant-primary md:via-vibrant-primary/90 md:to-transparent">

                        <div class="flex flex-col md:flex-row md:items-start">

                            <div class="p-4 md:w-[280px]  md:shrink-0 my-auto">
                                <div class="flex flex-col gap-2">
                                    <span
                                        class="text-xl md:text-2xl font-bold tracking-tight text-neutral-900 leading-tight">
                                        Bakso Populer
                                    </span>

                                    <span class="text-sm md:text-base text-neutral-700 leading-relaxed">
                                        Menu favorit pelanggan yang paling sering dipesan dan mendapatkan ulasan terbaik.
                                        Pilihan tepat bagi Anda yang ingin merasakan cita rasa andalan kami.
                                    </span>
                                </div>
                            </div>

                            <div
                                class="grid grid-cols-2 gap-4 p-4
                   md:flex md:gap-4 md:overflow-x-auto md:scrollbar-hide md:snap-x md:snap-mandatory md:flex-1">

                                @foreach ($topMainMenus as $foodMenu)
                                    <div
                                        class="w-full
                           md:min-w-[370px] md:max-w-[370px] md:shrink-0 md:snap-start">

                                        <div class="ring-1 ring-vibrant-primary/30 rounded-base">
                                            <div
                                                class="group relative h-[240px] sm:h-[300px] md:h-72 rounded-base overflow-hidden bg-dark-primary shadow-lg hover:shadow-xl transition-shadow">

                                                <img src="{{ asset('storage/' . $foodMenu->photo) }}"
                                                    alt="{{ $foodMenu->name }}"
                                                    class="absolute inset-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-transform duration-700">

                                                @if ($foodMenu->is_popular)
                                                    <span
                                                        class="absolute top-3 left-3 z-20 bg-white/80 text-black text-sm px-3 py-1 rounded-full backdrop-blur">
                                                        Populer
                                                    </span>
                                                @endif

                                                <span
                                                    class="absolute top-3 right-3 z-20 bg-black/70 text-white text-sm px-3 py-1 rounded-full flex items-center gap-1 backdrop-blur">
                                                    ⭐ {{ $foodMenu->average_rating }}
                                                </span>

                                                <div
                                                    class="absolute bottom-0 w-full z-20 p-4 bg-linear-to-t from-black/90 via-black/60 to-transparent backdrop-blur-sm backdrop-saturate-125 group-hover:backdrop-opacity-0 transition-opacity duration-1000">

                                                    <div class="flex justify-between items-center">
                                                        <h3
                                                            class="font-semibold text-white leading-tight text-[clamp(0.9rem,1.1vw,1.125rem)]">
                                                            {{ $foodMenu->name }}
                                                        </h3>

                                                        <span
                                                            class="font-bold text-white shrink-0 text-[clamp(0.8rem,1vw,1rem)]">
                                                            {{ $foodMenu->price >= 1000 ? $foodMenu->price / 1000 . 'k' : $foodMenu->price }}
                                                        </span>
                                                    </div>

                                                    <p
                                                        class="mt-2 text-gray-300 text-[clamp(0.7rem,0.9vw,0.875rem)] leading-[1.4] line-clamp-2 group-hover:line-clamp-none transition-all duration-1000">
                                                        {{ $foodMenu->short_description }}
                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                @endforeach

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="bg-neutral-950  border-t border-neutral-800">
            <div class="max-w-7xl mx-auto px-6 sm:px-6 lg:px-8 py-12 sm:py-16">

                <div class="mb-10">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white tracking-tight">
                        Galeri Bakso Kuwung
                    </h2>
                    <p class="mt-4 text-neutral-400 max-w-2xl leading-relaxed text-sm sm:text-base">
                        Suasana, kehangatan, dan kelezatan dalam setiap momen.
                    </p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 auto-rows-[160px] md:auto-rows-[220px] gap-4">

                    <div
                        class="col-span-2 row-span-2 overflow-hidden rounded-2xl relative group border border-neutral-800">
                        <img src="{{ asset('picture/DSC_0401.png') }}"
                            class="w-full h-full object-cover transition duration-500 group-hover:scale-110 group-hover:brightness-110"
                            alt="Bakso Kuwung Highlight">
                        <div
                            class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition duration-300">
                        </div>
                    </div>

                    <div class="overflow-hidden rounded-2xl relative group border border-neutral-800">
                        <img src="{{ asset('picture/DSC_0400.png') }}"
                            class="w-full h-full object-cover transition duration-500 group-hover:scale-110 group-hover:brightness-110"
                            alt="Bakso Kuwung">
                        <div
                            class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition duration-300">
                        </div>
                    </div>

                    <div class="overflow-hidden rounded-2xl relative group border border-neutral-800">
                        <img src="{{ asset('picture/DSC_0402.png') }}"
                            class="w-full h-full object-cover transition duration-500 group-hover:scale-110 group-hover:brightness-110"
                            alt="Bakso Kuwung">
                        <div
                            class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition duration-300">
                        </div>
                    </div>

                    <div class="col-span-2 overflow-hidden rounded-2xl relative group border border-neutral-800">
                        <img src="{{ asset('picture/DSC_0395.png') }}"
                            class="w-full h-full object-cover transition duration-500 group-hover:scale-110 group-hover:brightness-110"
                            alt="Bakso Kuwung">
                        <div
                            class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition duration-300">
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="bg-neutral-950 border-t border-neutral-800">
            <div class="max-w-7xl mx-auto px-6 sm:px-6 lg:px-8 py-12 sm:py-16">

                <div class="mb-12">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white tracking-tight">
                        Hubungi Kami
                    </h1>
                    <p class="mt-4 text-neutral-400 max-w-2xl leading-relaxed text-sm sm:text-base">
                        Punya pertanyaan, kritik, atau ingin melakukan pemesanan dalam jumlah besar?
                        Tim Bakso Kuwung siap membantu Anda.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">

                    <div class="space-y-4 sm:space-y-6">

                        <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-5 sm:p-6">
                            <h3 class="text-white font-semibold text-base sm:text-lg mb-2">
                                Telepon / WhatsApp
                            </h3>
                            <p class="text-neutral-400 text-sm sm:text-base">
                                +62 812-3456-7890
                            </p>

                            <a href="https://wa.me/6285895754473"
                                class="mt-4 inline-flex items-center justify-center w-full sm:w-auto px-4 py-2 bg-green-600 hover:bg-green-700 transition rounded-lg text-sm text-white font-medium">
                                Chat via WhatsApp
                            </a>
                        </div>

                        <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-5 sm:p-6">
                            <h3 class="text-white font-semibold text-base sm:text-lg mb-2">
                                Email
                            </h3>
                            <p class="text-neutral-400 text-sm sm:text-base break-all">
                                baksokuwungsatu@gmail.com
                            </p>
                        </div>

                        <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-5 sm:p-6">
                            <h3 class="text-white font-semibold text-base sm:text-lg mb-2">
                                Jam Operasional
                            </h3>
                            <p class="text-neutral-400 text-sm sm:text-base">
                                Senin – Minggu
                            </p>
                            <p class="text-neutral-400 text-sm sm:text-base">
                                10.00 – 22.00 WIB
                            </p>
                        </div>

                    </div>

                    <div class="space-y-4 sm:space-y-6">

                        <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-5 sm:p-6">
                            <h3 class="text-white font-semibold text-base sm:text-lg mb-2">
                                Alamat Outlet
                            </h3>
                            <p class="text-neutral-400 leading-relaxed text-sm sm:text-base">
                                JL. Kuwung, Mergelo, Meri,<br>
                                Kecamatan Magersari,<br>
                                Kota Mojokerto, Jawa Timur 61315, Indonesia
                            </p>
                        </div>

                        <div class="rounded-2xl overflow-hidden border border-neutral-800">
                            <iframe class="w-full h-64 sm:h-[265px]" frameborder="0" style="border:0"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1972.720403731177!2d112.44337659509707!3d-7.489673444161703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780d6ce304c77b%3A0xa51c8d67dc0935e9!2sBakso%20Kuwung%20Satu!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid"
                                allowfullscreen loading="lazy">
                            </iframe>
                        </div>

                    </div>

                </div>

            </div>
        </section>
    </div>

    @if (request()->routeIs('index'))
        <script>
            const navbar = document.getElementById('navbar');

            function handleNavbar() {
                const isMobile = window.innerWidth < 768;

                if (isMobile) {
                    navbar.classList.remove('bottom-0');
                    navbar.classList.add('top-0');
                    return;
                }

                if (window.scrollY > 50) {
                    navbar.classList.remove('bottom-0');
                    navbar.classList.add('top-0', 'shadow-lg');
                } else {
                    navbar.classList.remove('top-0', 'shadow-lg');
                    navbar.classList.add('bottom-0');
                }
            }

            window.addEventListener('scroll', handleNavbar);
            window.addEventListener('resize', handleNavbar);

            handleNavbar();
        </script>
    @endif
@endsection
