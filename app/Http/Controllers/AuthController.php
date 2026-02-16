<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.pages.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (! Auth::guard('admin')->attempt($credentials, $request->boolean('remember'))) {

            throw ValidationException::withMessages([
                'login' => 'Email atau password salah',
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended(route('admin.menu.admin.create'));
    }

    public function editProfile()
    {
        $user = Auth::guard('admin')->user();

        return view('admin.pages.auth.profile-edit', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::guard('admin')->user();

        $validated = $request->validate([
            'username' => ['required', 'max:100', 'unique:admins,username,'.$user->id],
            'full_name' => ['required', 'max:150'],
            'email' => ['required', 'email', 'max:150', 'unique:admins,email,'.$user->id],
            'password' => [
                'nullable',
                'confirmed',
                Password::min(8)->letters()->numbers(),
            ],
        ]);

        $user->username = $validated['username'];
        $user->full_name = $validated['full_name'];
        $user->email = $validated['email'];

        if (! empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        $user->save();

        return redirect()->back()
            ->with('success', 'Profile berhasil diperbarui')
            ->with('alert', 'success');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    public function profile()
    {
        $user = Auth::user();

        return view('admin.pages.auth.profile', compact('user'));
    }

    public function create()
    {
        return view('admin.pages.auth.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => ['required', 'string', 'max:100', 'unique:admins,username'],
            'full_name' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:150', 'unique:admins,email'],
            'role' => ['required', 'in:super_admin,admin,staff'],
            'password' => [
                'required',
                'confirmed',
                Password::min(8)
                    ->letters()
                    ->numbers(),
            ],
        ]);

        $admin = Admin::create([
            'username' => $validated['username'],
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'role' => $validated['role'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()
            ->route('admin.create')
            ->with('success', 'Admin berhasil dibuat');
    }
}
