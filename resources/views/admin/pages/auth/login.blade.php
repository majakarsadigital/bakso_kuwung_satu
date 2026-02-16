<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
</head>

<body
    class="min-h-screen flex items-center justify-center 
             bg-linear-to-br from-red-950 via-slate-900 to-black">

    <div class="w-full max-w-md px-6">

        <div
            class="relative bg-slate-900/80 backdrop-blur-xl 
                    border border-white/10 
                    shadow-2xl rounded-2xl p-8">

            <div
                class="absolute -top-10 -left-10 w-32 h-32 
                        bg-red-600/30 blur-3xl rounded-full -z-10">
            </div>

            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold text-white tracking-wide">
                    Admin Panel
                </h1>
                <p class="text-sm text-slate-400 mt-1">
                    Bakso Kuwung Satu
                </p>
            </div>

            <form method="POST" action="{{ route('admin.login.post') }}" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm text-slate-300 mb-2">
                        Email
                    </label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full rounded-xl bg-slate-800/70 
                                  border border-white/10 
                                  px-4 py-2.5 text-white placeholder-slate-500
                                  focus:outline-none focus:ring-2 
                                  focus:ring-red-500 focus:border-red-500
                                  transition-all duration-300">

                    @error('email')
                        <p class="text-red-400 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm text-slate-300 mb-2">
                        Password
                    </label>
                    <input type="password" name="password" required
                        class="w-full rounded-xl bg-slate-800/70 
                                  border border-white/10 
                                  px-4 py-2.5 text-white placeholder-slate-500
                                  focus:outline-none focus:ring-2 
                                  focus:ring-red-500 focus:border-red-500
                                  transition-all duration-300">

                    @error('password')
                        <p class="text-red-400 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                @if ($errors->has('login'))
                    <p class="text-red-400 text-sm text-center">
                        {{ $errors->first('login') }}
                    </p>
                @endif

                <button type="submit"
                    class="w-full py-2.5 rounded-xl font-semibold 
                               bg-linear-to-r from-red-600 to-red-700
                               hover:from-red-500 hover:to-red-600
                               text-white shadow-lg
                               transition-all duration-300
                               hover:shadow-red-600/40 hover:shadow-xl
                               active:scale-95">
                    Login
                </button>
            </form>
        </div>

        <p class="text-center text-xs text-slate-500 mt-6">
            © {{ date('Y') }} Bakso Kuwung Satu
        </p>

    </div>

</body>

</html>
