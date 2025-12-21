<tr class="bg-neutral-900 hover:bg-neutral-800/70 transition-colors duration-200">
    <td class="px-6 py-4">
        <div class="w-14 h-14 rounded-lg overflow-hidden ring-2 ring-neutral-700 shadow-md">
            <img src="{{ asset('storage/' . $package->photo) }}" alt="{{ $package->name }}"
                class="w-full h-full object-cover">
        </div>
    </td>

    <td class="px-6 py-4">
        <span class="font-semibold text-white whitespace-nowrap">
            {{ $package->name }}
        </span>
    </td>
    <td class="px-6 py-4  text-sm max-w-2xs">
        <div class="overflow-auto py-2">
            <span class="font-semibold text-white whitespace-nowrap">
                {{ $package->menus->pluck('name')->join(', ') }}
            </span>
        </div>
    </td>

    <td class="px-6 py-4">
        <span class="text-emerald-400 font-medium">
            Rp{{ number_format($package->price, 0, ',', '.') }}
        </span>
    </td>

    <td class="px-6 py-4 max-w-xs">
        <p class="text-neutral-400 line-clamp-2 text-sm">
            {{ $package->description }}
        </p>
    </td>

    <td class="px-6 py-4">
        @php
            $hasUnavailableMenu = $package->menus->contains('is_available', false);
        @endphp

        @if ($hasUnavailableMenu)
            <span
                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-900 text-red-200">
                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
                Tidak Aktif
            </span>
        @else
            <span
                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-900 text-emerald-200">
                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd" />
                </svg>
                Aktif
            </span>
        @endif
    </td>

    <td class="px-6 py-4">
        <div class="flex items-center justify-center gap-2">
            <button data-modal-target="edit-modal-{{ $package->id }}"
                data-modal-toggle="edit-modal-{{ $package->id }}" type="button"
                class="inline-flex items-center gap-1.5 bg-emerald-600/20 hover:bg-emerald-600/30 text-emerald-400 hover:text-emerald-300 text-xs font-medium px-3 py-1.5 rounded-lg border border-emerald-600/30 hover:border-emerald-500/50 transition-all duration-200">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                Edit
            </button>

            <form action="{{ route('admin.package.destroy', $package->id) }}" method="POST" class="inline"
                onsubmit="return confirm('Yakin ingin menghapus package ini?')">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="inline-flex items-center gap-1.5 bg-red-600/20 hover:bg-red-600/30 text-red-400 hover:text-red-300 text-xs font-medium px-3 py-1.5 rounded-lg border border-red-600/30 hover:border-red-500/50 transition-all duration-200">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                    Hapus
                </button>
            </form>
        </div>
    </td>
</tr>

<div id="edit-modal-{{ $package->id }}" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <div class="relative bg-neutral-900 border border-neutral-800 rounded-lg shadow-lg p-4 md:p-6">
            <div class="flex items-center justify-between border-b border-neutral-800 pb-4 md:pb-5">
                <h3 class="text-lg font-medium text-white">
                    Edit Package
                </h3>
                <button type="button" data-modal-hide="edit-modal-{{ $package->id }}"
                    class="text-neutral-400 bg-transparent hover:bg-neutral-800 hover:text-white rounded-lg text-sm w-9 h-9 ms-auto inline-flex justify-center items-center">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18 17.94 6M18 18 6.06 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <form action="{{ route('admin.package.update', $package->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="grid gap-4 py-4 md:py-6">
                    <div>
                        <label for="name-{{ $package->id }}"
                            class="block mb-2.5 text-sm font-medium text-neutral-300">Nama Package</label>
                        <input type="text" name="name" id="name-{{ $package->id }}"
                            value="{{ old('name', $package->name) }}"
                            class="bg-neutral-800 border border-neutral-700 text-white text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full px-3 py-2.5 shadow-xs placeholder:text-neutral-500"
                            placeholder="Masukkan nama package" required>
                    </div>

                    <div>
                        <label for="description-{{ $package->id }}"
                            class="block mb-2.5 text-sm font-medium text-neutral-300">Deskripsi</label>
                        <textarea name="description" id="description-{{ $package->id }}" rows="3"
                            class="block bg-neutral-800 border border-neutral-700 text-white text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-3.5 shadow-xs placeholder:text-neutral-500 resize-none"
                            placeholder="Deskripsi package">{{ old('description', $package->description) }}</textarea>
                    </div>

                    <div>
                        <label for="price-{{ $package->id }}"
                            class="block mb-2.5 text-sm font-medium text-neutral-300">Harga</label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-neutral-500 text-sm">Rp</span>
                            <input type="number" name="price" id="price-{{ $package->id }}"
                                value="{{ old('price', $package->price) }}"
                                class="bg-neutral-800 border border-neutral-700 text-white text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full pl-10 pr-3 py-2.5 shadow-xs placeholder:text-neutral-500"
                                placeholder="0" required>
                        </div>
                    </div>

                    <div>
                        <label for="menus-{{ $package->id }}"
                            class="block mb-2.5 text-sm font-medium text-neutral-300">Menu yang Tersedia</label>
                        <select name="menu_ids[]" id="menus-{{ $package->id }}" multiple
                            class="bg-neutral-800 border border-neutral-700 text-white text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 shadow-xs">
                            @foreach ($menus as $menu)
                                <option value="{{ $menu->id }}"
                                    {{ $package->menus->contains($menu->id) ? 'selected' : '' }}>
                                    {{ $menu->name }}
                                    @if (!$menu->is_available)
                                        (Tidak Tersedia)
                                    @endif
                                </option>
                            @endforeach
                        </select>
                        <p class="text-xs text-neutral-500 mt-2">Tekan Ctrl/Cmd untuk memilih multiple menu</p>
                    </div>

                    <div>
                        <label class="block mb-2.5 text-sm font-medium text-neutral-300">Foto</label>

                        @if ($package->photo)
                            <div class="mb-3">
                                <img src="{{ asset('storage/' . $package->photo) }}" alt="{{ $package->name }}"
                                    class="w-24 h-24 object-cover rounded-lg border-2 border-neutral-700">
                                <p class="text-xs text-neutral-500 mt-2">Foto saat ini</p>
                            </div>
                        @endif

                        <input type="file" name="photo" id="photo-{{ $package->id }}" accept="image/*"
                            class="block w-full text-sm text-neutral-400 border border-neutral-700 rounded-lg cursor-pointer bg-neutral-800 focus:outline-none file:mr-4 file:py-2.5 file:px-4 file:border-0 file:text-sm file:font-medium file:bg-neutral-700 file:text-white hover:file:bg-neutral-600">
                        <p class="text-xs text-neutral-500 mt-2">Biarkan kosong jika tidak ingin mengubah foto</p>
                    </div>
                </div>

                <div class="flex items-center space-x-4 border-t border-neutral-800 pt-4 md:pt-6">
                    <button type="submit"
                        class="inline-flex items-center text-white bg-emerald-600 hover:bg-emerald-500 box-border border border-transparent focus:ring-4 focus:ring-emerald-500/50 shadow-xs font-medium leading-5 rounded-lg text-sm px-4 py-2.5 focus:outline-none">
                        <svg class="w-4 h-4 me-1.5 -ms-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                        </svg>
                        Update Package
                    </button>
                    <button data-modal-hide="edit-modal-{{ $package->id }}" type="button"
                        class="text-neutral-400 bg-neutral-800 box-border border border-neutral-700 hover:bg-neutral-700 hover:text-white focus:ring-4 focus:ring-neutral-700 shadow-xs font-medium leading-5 rounded-lg text-sm px-4 py-2.5 focus:outline-none">
                        Batal
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
