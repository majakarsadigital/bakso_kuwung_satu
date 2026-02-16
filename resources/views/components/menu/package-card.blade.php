<div
    class="group relative overflow-hidden bg-dark-primary ring-1 ring-vibrant-primary/30 rounded-sm shadow-lg hover:shadow-xl transition-shadow min-h-[320px] md:min-h-[400px]">

    <img src="{{ asset('storage/' . $package->photo) }}" alt="{{ $package->name }}"
        class="absolute inset-0 w-full h-full object-cover object-bottom z-0 group-hover:scale-105 transition-transform duration-700">

    {{-- <div class="absolute inset-0 bg-black/30"></div> --}}



    <div class="absolute font-potta top-0 left-0 z-20 p-4">
        <span class="font-semibold text-white leading-tight text-[clamp(0.95rem,1.1vw,1.125rem)]">
            {{ $package->name }}
        </span>
        <span class="font-bold text-white text-[clamp(0.85rem,1vw,1rem)]">
            ({{ $package->price >= 1000 ? $package->price / 1000 . 'k' : $package->price }})
        </span>
    </div>

    <div class="absolute font-potta bottom-0 right-0 z-20 p-4 max-w-[85%] text-right bg-linear-to-tl ">
        <ul class="space-y-1 ">
            @foreach ($package->menus as $menu)
                <li
                    class="grid grid-cols-[auto_minmax(1rem,1fr)_auto]
                   gap-1 items-center 
                   text-[clamp(0.75rem,0.9vw,0.875rem)]
                   leading-[1.4]">

                    <span class="text-white">
                        ({{ $menu->pivot->quantity }})
                    </span>

                    <span class="border-b-3 border-dotted text-white
                       h-[0.9em]">
                    </span>

                    <span class="white text-white whitespace-nowrap ">
                        {{ $menu->name }}
                    </span>
                </li>
            @endforeach
        </ul>

    </div>
</div>
