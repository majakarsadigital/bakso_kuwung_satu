@extends('layouts.app')

@section('title', 'Menu')

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($menus as $menu)
            <div class="max-w-sm rounded-2xl overflow-hidden bg-[#0A0A0A] border border-white/10 shadow-lg">
                <div class="relative">
                    <img src="/images/bakso.jpg" alt="Bakso Original" class="h-56 w-full object-cover" />

                    <span class="absolute top-3 left-3 bg-white/80 text-black text-sm px-3 py-1 rounded-full backdrop-blur">
                        Populer
                    </span>

                    <span
                        class="absolute top-3 right-3 bg-black/70 text-white text-sm px-3 py-1 rounded-full flex items-center gap-1 backdrop-blur">
                        ⭐ 4.5
                    </span>
                </div>

                <div class="p-4 bg-gradient-to-b from-[#141414] to-[#0A0A0A]">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-white">
                            {{ $menu->name }}
                        </h3>
                        <span class="text-lg font-bold text-white">
                            Rp. 10K
                        </span>
                    </div>

                    <p class="text-sm text-gray-400 mt-2 leading-relaxed">
                        Satu porsi bakso original dengan taburan bawang goreng dan perasan jeruk nipis
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
