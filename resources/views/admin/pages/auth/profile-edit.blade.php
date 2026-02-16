@extends('admin.layouts.app')

@section('title', 'Edit Profile')

@section('admin_content')

    <div class="w-2xl mx-auto bg-neutral-900 border border-neutral-800 rounded-base p-8 shadow-lg">

        <div class="mb-6">
            <h1 class="text-xl font-semibold text-white">Edit Profile</h1>
            <p class="text-sm text-neutral-400 mt-1">
                Perbarui informasi akun Anda
            </p>
        </div>
        @if (session('success'))
            <div
                class="mb-6 px-4 py-3 rounded-base border border-green-700 bg-green-900/40 text-green-300 flex items-center justify-between">

                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-400" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>

                    <span class="text-sm">
                        {{ session('success') }}
                    </span>
                </div>

                <button onclick="this.parentElement.remove()" class="text-green-400 hover:text-white text-sm">
                    ✕
                </button>
            </div>
        @endif


        <form method="POST" action="{{ route('admin.profile.update') }}" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm text-neutral-300 mb-1">Username</label>
                <input type="text" name="username" value="{{ old('username', $user->username) }}"
                    class="w-full px-3 py-2 rounded-base border border-neutral-700 bg-neutral-800 text-white focus:ring-2 focus:ring-primary">
                @error('username')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm text-neutral-300 mb-1">Full Name</label>
                <input type="text" name="full_name" value="{{ old('full_name', $user->full_name) }}"
                    class="w-full px-3 py-2 rounded-base border border-neutral-700 bg-neutral-800 text-white focus:ring-2 focus:ring-primary">
                @error('full_name')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm text-neutral-300 mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email', $user->email) }}"
                    class="w-full px-3 py-2 rounded-base border border-neutral-700 bg-neutral-800 text-white focus:ring-2 focus:ring-primary">
                @error('email')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm text-neutral-300 mb-1">
                    Password (kosongkan jika tidak ingin ganti)
                </label>
                <input type="password" name="password"
                    class="w-full px-3 py-2 rounded-base border border-neutral-700 bg-neutral-800 text-white focus:ring-2 focus:ring-primary">
                @error('password')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm text-neutral-300 mb-1">Confirm Password</label>
                <input type="password" name="password_confirmation"
                    class="w-full px-3 py-2 rounded-base border border-neutral-700 bg-neutral-800 text-white focus:ring-2 focus:ring-primary">
            </div>

            <div class="pt-4 flex justify-between items-center">
                <a href="{{ route('admin.profile') }}" class="text-neutral-400 hover:text-white text-sm">
                    Kembali
                </a>

                <button class="px-6 py-2 bg-primary text-white rounded-base hover:opacity-90 transition font-medium">
                    Update Profile
                </button>
            </div>

        </form>

    </div>

@endsection
