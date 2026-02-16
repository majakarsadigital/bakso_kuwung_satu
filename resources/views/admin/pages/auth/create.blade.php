@extends('admin.layouts.app')

@section('title', 'Create Admin')

@section('admin_content')

<div class="w-2xl mx-auto bg-neutral-900 border border-neutral-800 rounded-base p-8 shadow-lg">

    <div class="mb-6">
        <h1 class="text-xl font-semibold text-white">Buat Admin Baru</h1>
        <p class="text-sm text-neutral-400 mt-1">
            Tambahkan akun admin baru ke dalam sistem
        </p>
    </div>

    <form method="POST" action="{{ route('admin.store') }}" class="space-y-5">
        @csrf

        <div>
            <label class="block text-sm text-neutral-300 mb-1">Username</label>
            <input type="text" name="username"
                class="w-full px-3 py-2 rounded-base border border-neutral-700 bg-neutral-800 text-white placeholder-neutral-500 focus:outline-none focus:ring-2 focus:ring-primary"
                value="{{ old('username') }}" required>
            @error('username')
                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm text-neutral-300 mb-1">Full Name</label>
            <input type="text" name="full_name"
                class="w-full px-3 py-2 rounded-base border border-neutral-700 bg-neutral-800 text-white placeholder-neutral-500 focus:outline-none focus:ring-2 focus:ring-primary"
                value="{{ old('full_name') }}" required>
            @error('full_name')
                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm text-neutral-300 mb-1">Email</label>
            <input type="email" name="email"
                class="w-full px-3 py-2 rounded-base border border-neutral-700 bg-neutral-800 text-white placeholder-neutral-500 focus:outline-none focus:ring-2 focus:ring-primary"
                value="{{ old('email') }}" required>
            @error('email')
                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm text-neutral-300 mb-1">Role</label>
            <select name="role"
                class="w-full px-3 py-2 rounded-base border border-neutral-700 bg-neutral-800 text-white focus:outline-none focus:ring-2 focus:ring-primary"
                required>
                <option value="">Pilih Role</option>
                <option value="super_admin">Super Admin</option>
                <option value="admin">Admin</option>
                <option value="staff">Staff</option>
            </select>
            @error('role')
                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm text-neutral-300 mb-1">Password</label>
            <input type="password" name="password"
                class="w-full px-3 py-2 rounded-base border border-neutral-700 bg-neutral-800 text-white focus:outline-none focus:ring-2 focus:ring-primary"
                required>
            @error('password')
                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm text-neutral-300 mb-1">Confirm Password</label>
            <input type="password" name="password_confirmation"
                class="w-full px-3 py-2 rounded-base border border-neutral-700 bg-neutral-800 text-white focus:outline-none focus:ring-2 focus:ring-primary"
                required>
        </div>

        <div class="pt-4">
            <button
                class="w-full md:w-auto px-6 py-2 bg-primary text-white rounded-base hover:opacity-90 transition font-medium">
                Create Admin
            </button>
        </div>

    </form>

</div>

@endsection
