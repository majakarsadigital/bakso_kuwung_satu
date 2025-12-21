   <div>
       <div
           class="group relative aspect-square rounded-xl border-b-0 rounded-b-0 overflow-hidden bg-dark-primary border border-white/10 shadow-lg hover:shadow-xl transition-shadow">

           <img src="{{ asset('storage/' . $foodMenu->photo) }}" alt="{{ $foodMenu->name }}"
               class="absolute inset-0 w-full h-full object-cover object-bottom z-0 group-hover:scale-105 transition-transform duration-700">

           <div class="absolute inset-0 bg-black/30 z-10"></div>

           <span class="absolute top-3 left-3 z-20 bg-white/80 text-black text-sm px-3 py-1 rounded-full backdrop-blur">
               Populer
           </span>

           <span
               class="absolute top-3 right-3 z-20 bg-black/70 text-white text-sm px-3 py-1 rounded-full flex items-center gap-1 backdrop-blur">
               ⭐ 4.5
           </span>

           <div
               class="absolute bottom-0 w-full z-20 p-4 bg-linear-to-t from-black/90 via-black/60 to-transparent backdrop-blur-sm backdrop-saturate-125">
               <div class="flex justify-between items-center">
                   <h3 class="font-semibold text-white leading-tight text-[clamp(0.95rem,1.1vw,1.125rem)]">
                       {{ $foodMenu->name }}
                   </h3>

                   <span class="font-bold text-white text-[clamp(0.85rem,1vw,1rem)] shrink-0">
                       {{ $foodMenu->price >= 1000 ? $foodMenu->price / 1000 . 'k' : $foodMenu->price }}
                   </span>
               </div>
               <p class="mt-2 text-gray-300 text-[clamp(0.75rem,0.9vw,0.875rem)] leading-[1.4] line-clamp-2">
                   {{ $foodMenu->short_description }}
               </p>


           </div>
       </div>
       {{-- Tombol Rating --}}
       <button onclick="openRatingModal('{{ $foodMenu->id }}', '{{ $foodMenu->name }}')"
           class="w-full bg-white/10 backdrop-blur-md rounded-b border border-white/20 border-t-0 text-white text-sm py-2 hover:bg-white/20 hover:border-white/40 hover:backdrop-blur-lg transition-all duration-300">
           Beri Rating
       </button>

   </div>
