<nav id="navbar"
    class="
    fixed start-0 w-full z-50
    bg-black/20
    backdrop-blur-2xl backdrop-saturate-200
    border border-white/10
    shadow-[0_8px_32px_0_rgba(31,38,135,0.37)]
    transition-all duration-500 ease-out
    overflow-hidden
    before:absolute
    before:inset-0
    before:bg-linear-to-br
    before:from-white/20
    before:via-white/5
    before:to-transparent
    before:opacity-50
    after:absolute
    after:inset-x-0
    after:top-0
    after:h-px
    after:bg-linear-to-r
    after:from-transparent
    after:via-white/60
    after:to-transparent
    after:animate-shimmer

    {{ request()->routeIs('index') ? 'bottom-0' : 'top-0' }}
    "
    style="
        background: linear-gradient(
            135deg,
            rgba(255, 255, 255, 0.1),
            rgba(255, 255, 255, 0.05)
        );
        box-shadow: 
            0 8px 32px 0 rgba(31, 38, 135, 0.37),
            inset 0 1px 0 0 rgba(255, 255, 255, 0.3),
            inset 0 -1px 0 0 rgba(255, 255, 255, 0.1);
    ">
    <div class="max-w-full flex flex-wrap items-center justify-between mx-auto p-4 px-8 relative z-10">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse group">
            <div class="relative">
                <div class="absolute inset-0 bg-white/20 rounded-lg blur-md group-hover:bg-white/30 transition-all">
                </div>
                <img src="{{ asset('picture/logo2.png') }}" class="h-6 md:h-8 relative z-10" alt="Flowbite Logo" />
            </div>
            {{-- <span class="self-center text-xl text-white font-semibold whitespace-nowrap drop-shadow-lg">Flowbite</span> --}}
        </a>
        <button data-collapse-toggle="navbar-dropdown" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white/90 rounded-lg md:hidden 
            hover:bg-white/20 hover:text-white 
            focus:outline-none focus:ring-2 focus:ring-white/50
            backdrop-blur-sm
            transition-all duration-300"
            aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul
                class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg bg-white/10 backdrop-blur-md md:bg-transparent md:backdrop-blur-none md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                <li>
                    <a href="{{ route('index') }}"
                        class="block py-2 px-4 rounded-lg md:p-0 transition-all duration-300
                        {{ request()->routeIs('index') ? 'text-white bg-white/30 md:bg-transparent md:text-white font-semibold shadow-lg' : 'text-white/80 hover:bg-white/20 md:hover:bg-transparent md:hover:text-white hover:scale-105' }}"
                        aria-current="{{ request()->routeIs('index') ? 'page' : '' }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('menu.index') }}"
                        class="block py-2 px-4 rounded-lg md:p-0 transition-all duration-300
                        {{ request()->routeIs('menu.index') ? 'text-white bg-white/30 md:bg-transparent md:text-white font-semibold shadow-lg' : 'text-white/80 hover:bg-white/20 md:hover:bg-transparent md:hover:text-white hover:scale-105' }}"
                        aria-current="{{ request()->routeIs('menu.index') ? 'page' : '' }}">Menu</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-4 rounded-lg md:p-0 transition-all duration-300
                        text-white/80 hover:bg-white/20 md:hover:bg-transparent md:hover:text-white hover:scale-105">About</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-4 rounded-lg md:p-0 transition-all duration-300
                        text-white/80 hover:bg-white/20 md:hover:bg-transparent md:hover:text-white hover:scale-105">Contact</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-4 rounded-lg md:p-0 transition-all duration-300
                        text-white/80 hover:bg-white/20 md:hover:bg-transparent md:hover:text-white hover:scale-105">Address</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    @keyframes shimmer {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(100%);
        }
    }

    .animate-shimmer {
        animation: shimmer 3s infinite;
    }

    #navbar::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg,
                transparent,
                rgba(255, 255, 255, 0.1),
                transparent);
        animation: shine 8s infinite;
    }

    @keyframes shine {

        0%,
        100% {
            left: -100%;
        }

        50% {
            left: 100%;
        }
    }

    #navbar {
        background: linear-gradient(135deg,
                rgba(0, 0, 0, 0.3),
                rgba(0, 0, 0, 0.2)) !important;
        box-shadow:
            0 8px 32px 0 rgba(0, 0, 0, 0.6),
            inset 0 1px 0 0 rgba(255, 255, 255, 0.15),
            inset 0 -1px 0 0 rgba(255, 255, 255, 0.05) !important;
    }
</style>
