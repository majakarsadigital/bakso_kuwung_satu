  <div>
      <div
          class="shrink-0 w-52 sm:w-64 md:w-52 lg:w-56 2xl:w-full aspect-3/4 rounded-lg border-b-0 rounded-b-0 overflow-hidden relative group bg-black border border-white/10 shadow-lg">

          <img src="{{ asset('storage/' . $drinkMenu->photo) }}" alt="{{ $drinkMenu->name }}"
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">

          <div class="absolute inset-0 bg-linear-to-t from-black/90 via-black/40 to-transparent">
          </div>

          <div
              class="absolute bottom-0 w-full p-5 sm:p-5 lg:p-4 2xl:p-4 z-10 flex flex-col gap-1 bg-linear-to-t from-black/90 via-black/60 to-transparent backdrop-blur-sm backdrop-saturate-125">
              <h3 class="text-lg sm:text-lg lg:text-base 2xl:text-base font-semibold text-white leading-tight truncate">
                  {{ $drinkMenu->name }}
              </h3>

              <span class="text-base sm:text-base lg:text-sm 2xl:text-sm font-bold text-amber-400">
                  {{ $drinkMenu->price >= 1000 ? $drinkMenu->price / 1000 . 'k' : $drinkMenu->price }}
              </span>

          </div>
      </div>

      <button onclick="openRatingModal('{{ $drinkMenu->id }}', '{{ $drinkMenu->name }}')"
          class="w-full bg-white/10 backdrop-blur-md rounded-b border border-white/20 border-t-0 text-white text-sm py-2 hover:bg-white/20 hover:border-white/40 hover:backdrop-blur-lg transition-all duration-300">
          Beri Rating
      </button>
  </div>
