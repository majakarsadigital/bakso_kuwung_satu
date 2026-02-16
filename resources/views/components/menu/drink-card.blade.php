<div class="ring-1 ring-vibrant-primary/30 rounded-sm">
    <div
        class="shrink-0 w-60 sm:w-64 md:w-60 lg:w-56 2xl:w-full aspect-3/4 rounded-sm rounded-b-0 overflow-hidden relative group bg-black  shadow-lg">

        <img src="{{ asset('storage/' . $drinkMenu->photo) }}" alt="{{ $drinkMenu->name }}"
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">

        {{-- <div class="absolute inset-0 bg-linear-to-t from-black/90 via-black/40 to-transparent">
          </div> --}}

        @if ($drinkMenu->is_popular)
            <span class="absolute top-3 left-3 z-20 bg-white/80 text-black text-sm px-3 py-1 rounded-full backdrop-blur">
                Populer
            </span>
        @endif

        <span
            class="absolute top-3 right-3 z-20 bg-black/70 text-white text-sm px-3 py-1 rounded-full flex items-center gap-1 backdrop-blur">
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>{{ $drinkMenu->average_rating }}
        </span>


        <div
            class="absolute bottom-0 w-full z-20 p-4
                   bg-linear-to-t from-black/90 via-black/60 to-transparent
                   backdrop-blur-sm backdrop-saturate-125 group-hover:backdrop-opacity-0 transition-opacity duration-1000">

            <div class="flex justify-between items-center">
                <h3
                    class="font-semibold text-white leading-tight
                           text-[clamp(0.95rem,1.1vw,1.125rem)]">
                    {{ $drinkMenu->name }}
                </h3>

                <span class="font-bold text-white shrink-0
                           text-[clamp(0.85rem,1vw,1rem)]">
                    {{ $drinkMenu->price >= 1000 ? $drinkMenu->price / 1000 . 'k' : $drinkMenu->price }}
                </span>
            </div>

            <p
                class="mt-2 text-gray-300
                       text-[clamp(0.75rem,0.9vw,0.875rem)]
                       leading-[1.4] hidden group-hover:block transition-all duration-1000">
                {{ $drinkMenu->short_description }}
            </p>
        </div>
    </div>

    <button onclick="openRatingModal('{{ $drinkMenu->id }}', '{{ $drinkMenu->name }}')"
        class="w-full bg-white/10 backdrop-blur-md rounded-b-sm  text-white text-sm py-2 hover:bg-white/20  hover:backdrop-blur-lg transition-all duration-300">
        Beri Rating
    </button>
</div>
