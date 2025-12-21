@extends('admin.layouts.app')

@section('admin_content')
    <div class="flex flex-col lg:flex-row gap-4 w-full ">
        <div class="w-full lg:w-[600px] mx-auto lg:sticky lg:top-20 self-start">
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-white">Tambah Menu</h1>
                <p class="text-neutral-400 mt-1">Tambahkan menu baru ke dalam daftar</p>
            </div>

            <form method="POST" action="{{ route('admin.package.store') }}" enctype="multipart/form-data"
                class="bg-neutral-900 border border-neutral-800 p-6 space-y-6">

                @csrf

                <div>
                    <label class="block text-sm font-medium text-neutral-300 mb-2">
                        Nama Package
                    </label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                        class="w-full px-4 py-2.5 bg-neutral-800 border border-neutral-700 rounded-lg text-white
                      focus:outline-none focus:ring-2 focus:ring-emerald-500">

                    @error('name')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-neutral-300 mb-2">
                        Deskripsi
                    </label>
                    <textarea name="description" rows="3"
                        class="w-full px-4 py-2.5 bg-neutral-800 border border-neutral-700 rounded-lg text-white resize-none
                         focus:outline-none focus:ring-2 focus:ring-emerald-500">{{ old('description') }}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-neutral-300 mb-2">
                        Harga Package
                    </label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-neutral-500">Rp</span>
                        <input type="number" name="price" min="0" value="{{ old('price') }}" required
                            class="w-full pl-12 pr-4 py-2.5 bg-neutral-800 border border-neutral-700 rounded-lg text-white
                          focus:outline-none focus:ring-2 focus:ring-emerald-500">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-neutral-300 mb-2">
                        Status Package
                    </label>
                    <select name="is_active"
                        class="w-full px-4 py-2.5 bg-neutral-800 border border-neutral-700 rounded-lg text-white
                       focus:outline-none focus:ring-2 focus:ring-emerald-500">
                        <option value="1" {{ old('is_active', 1) == 1 ? 'selected' : '' }}>
                            Aktif
                        </option>
                        <option value="0" {{ old('is_active') == 0 ? 'selected' : '' }}>
                            Tidak Aktif
                        </option>
                    </select>
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
                <div class="">
                    <label class="block text-sm font-medium text-neutral-300 mb-3">
                        Isi Menu Package
                    </label>

                    <div class="space-y-3 h-36 overflow-y-auto">
                        @foreach ($menus as $menu)
                            <div class="flex items-center gap-4">
                                <input type="checkbox" name="menus[]" value="{{ $menu->id }}"
                                    class="accent-emerald-500">

                                <span class="flex-1 text-neutral-300">
                                    {{ $menu->name }}
                                </span>

                                <input type="number" name="quantities[{{ $menu->id }}]" value="1" min="1"
                                    class="w-24 px-3 py-2 bg-neutral-800 border border-neutral-700 rounded-lg text-white
                                  focus:outline-none focus:ring-2 focus:ring-emerald-500">
                            </div>
                        @endforeach
                    </div>

                    @error('menus')
                        <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Action --}}
                <div class="flex items-center gap-3 pt-4 border-t border-neutral-800">
                    <button type="submit"
                        class="flex-1 px-6 py-2.5 bg-emerald-600 hover:bg-emerald-500
                       text-white font-medium rounded-lg">
                        Simpan Package
                    </button>

                    <a href="{{ url()->previous() }}"
                        class="px-6 py-2.5 bg-neutral-800 hover:bg-neutral-700
                  text-neutral-300 font-medium rounded-lg border border-neutral-700">
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
                        <p class="text-neutral-400 mt-1">Daftar data menu </p>
                        <span class="text-sm text-neutral-400">{{ $packages->count() }} menu</span>
                    </div>
                </div>
            </div>
            <div
                class="lg:max-h-[calc(100vh-210px)] xl:max-h-[calc(100vh-210px)] 2xl:max-h-[calc(100vh-210px)] overflow-y-auto bg-neutral-900 shadow-lg border border-neutral-800">
                <table class="w-full bg-neutral-900 text-sm text-left text-neutral-300 min-w-[700px]">
                    <thead
                        class="sticky top-0 z-10 text-xs uppercase tracking-wider text-neutral-400  backdrop-blur-2xl border-b border-neutral-700">
                        <tr>
                            <th class="px-6 py-4 font-semibold">Foto</th>
                            <th class="px-6 py-4 font-semibold">Nama</th>
                            <th class="px-6 py-4 font-semibold">Menu</th>
                            <th class="px-6 py-4 font-semibold">Harga</th>
                            <th class="px-6 py-4 font-semibold">Deskripsi</th>
                            <th class="px-6 py-4 font-semibold">Status</th>
                            <th class="px-6 py-4 font-semibold text-center">Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($packages as $package)
                        <x-admin.package.package-table :package="$package" :menus="$menus" />
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    {{-- Modal Edit Menu --}}
@endsection
