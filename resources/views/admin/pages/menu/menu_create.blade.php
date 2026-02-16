@extends('admin.layouts.app')

@section('admin_content')
    <div class="flex flex-col lg:flex-row gap-4 w-full ">
        <div class="w-full lg:w-[600px] mx-auto lg:sticky lg:top-20 self-start">
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-white">Tambah Menu</h1>
                <p class="text-neutral-400 mt-1">Tambahkan menu baru ke dalam daftar</p>
            </div>

            <form method="POST" action="{{ route('admin.menu.store') }}" enctype="multipart/form-data"
                class="bg-neutral-900 border border-neutral-800 p-6 space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-neutral-300 mb-2">Nama Menu</label>
                    <input type="text" name="name"
                        class="w-full px-4 py-2.5 bg-neutral-800 border border-neutral-700 rounded-lg text-white placeholder-neutral-500 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all"
                        placeholder="Masukkan nama menu" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-neutral-300 mb-2">Harga</label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-neutral-500">Rp</span>
                        <input type="number" name="price"
                            class="w-full pl-12 pr-4 py-2.5 bg-neutral-800 border border-neutral-700 rounded-lg text-white placeholder-neutral-500 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all"
                            placeholder="0" required>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-neutral-300 mb-2">Deskripsi Singkat</label>
                    <textarea name="short_description" rows="2"
                        class="w-full px-4 py-2.5 bg-neutral-800 border border-neutral-700 rounded-lg text-white placeholder-neutral-500 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all resize-none"
                        placeholder="Deskripsi singkat tentang menu"></textarea>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-neutral-300 mb-2">Kategori</label>
                        <select name="category"
                            class="w-full px-4 py-2.5 bg-neutral-800 border border-neutral-700 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all cursor-pointer appearance-none"
                            required>
                            <option value="" disabled selected>Pilih kategori</option>
                            <option value="main">Food</option>
                            <option value="drink">Drink</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-neutral-300 mb-2">Status</label>
                        <select name="is_available"
                            class="w-full px-4 py-2.5 bg-neutral-800 border border-neutral-700 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all appearance-none cursor-pointer"
                            style="background-image: url('data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 fill=%27none%27 viewBox=%270 0 24 24%27 stroke=%27%236b7280%27%3E%3Cpath stroke-linecap=%27round%27 stroke-linejoin=%27round%27 stroke-width=%272%27 d=%27M19 9l-7 7-7-7%27/%3E%3C/svg%3E'); background-position: right 12px center; background-repeat: no-repeat; background-size: 20px;">
                            <option value="1">Tersedia</option>
                            <option value="0">Tidak Tersedia</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-neutral-300 mb-2">Foto</label>
                    <div class="relative">
                        <input type="file" name="photo" id="photo" class="hidden" accept="image/*">
                        <label for="photo"
                            class="flex items-center justify-center w-full px-4 py-6 bg-neutral-800 border-2 border-dashed border-neutral-700 rounded-lg cursor-pointer hover:border-emerald-500 hover:bg-neutral-800/50 transition-all">
                            <div class="text-center">
                                <svg class="w-6 h-6 mx-auto text-neutral-500 mb-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span class="text-sm text-neutral-400">Upload foto</span>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="flex items-center gap-3 pt-4 border-t border-neutral-800">
                    <button type="submit"
                        class="flex-1 px-6 py-2.5 bg-emerald-600 hover:bg-emerald-500 text-white font-medium rounded-lg transition-colors">
                        Simpan Menu
                    </button>
                    <a href=""
                        class="px-6 py-2.5 bg-neutral-800 hover:bg-neutral-700 text-neutral-300 font-medium rounded-lg border border-neutral-700 transition-colors">
                        Batal
                    </a>
                </div>
            </form>
        </div>
        <div>
            <div class="mb-6">
                <div>
                    <h1 class="text-2xl font-bold text-white">Data Menu</h1>
                    <div class="flex items-center justify-between">
                        <p class="text-neutral-400 mt-1">Daftar data menu makanan </p>
                        <span class="text-sm text-neutral-400">{{ $foodMenus->count() }} menu</span>
                    </div>
                </div>
            </div>
            <div
                class="lg:max-h-[370px] xl:max-h-[370px] 2xl:max-h-[500px] overflow-y-auto bg-neutral-900 shadow-lg border border-neutral-800">
                <table class="w-full bg-neutral-900 text-sm text-left text-neutral-300 min-w-[700px]">
                    <thead
                        class="sticky top-0 z-10 text-xs uppercase tracking-wider text-neutral-400  backdrop-blur-2xl border-b border-neutral-700">
                        <tr>
                            <th class="px-6 py-4 font-semibold">Foto</th>
                            <th class="px-6 py-4 font-semibold">Nama</th>
                            <th class="px-6 py-4 font-semibold">Harga</th>
                            <th class="px-6 py-4 font-semibold">Deskripsi</th>
                            <th class="px-6 py-4 font-semibold">Status</th>
                            <th class="px-6 py-4 font-semibold">Rating</th>
                            <th class="px-6 py-4 font-semibold text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-neutral-800">
                        @foreach ($foodMenus as $foodMenu)
                            <x-admin.menu.food-table :food-menu="$foodMenu" />
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="my-6">
                <div>
                    <h1 class="text-2xl font-bold text-white">Data Menu</h1>
                    <div class="flex items-center justify-between">
                        <p class="text-neutral-400 mt-1">Daftar data menu minuman </p>
                        <span class="text-sm text-neutral-400">{{ $drinkMenus->count() }} menu</span>
                    </div>
                </div>
            </div>
            <div
                class="lg:max-h-[370px] mt-4 xl:max-h-[370px] 2xl:max-h-[500px] overflow-y-auto bg-neutral-900 shadow-lg border border-neutral-800">
                <table class="w-full bg-neutral-900 text-sm text-left text-neutral-300 min-w-[700px]">
                    <thead
                        class="sticky top-0 z-10 text-xs uppercase tracking-wider text-neutral-400  backdrop-blur-2xl border-b border-neutral-700">
                        <tr>
                            <th class="px-6 py-4 font-semibold">Foto</th>
                            <th class="px-6 py-4 font-semibold">Nama</th>
                            <th class="px-6 py-4 font-semibold">Harga</th>
                            <th class="px-6 py-4 font-semibold">Deskripsi</th>
                            <th class="px-6 py-4 font-semibold">Status</th>
                            <th class="px-6 py-4 font-semibold">Rating</th>
                            <th class="px-6 py-4 font-semibold text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-neutral-800">
                        @foreach ($drinkMenus as $drinkMenu)
                            <x-admin.menu.drink-table :drink-menu="$drinkMenu" />
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
