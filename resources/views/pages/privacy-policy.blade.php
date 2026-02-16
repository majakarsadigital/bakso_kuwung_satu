@extends('layouts.app')

@section('title', 'Kebijakan Privasi')

@section('content')
    <section class="bg-neutral-950 border-t border-neutral-800">
        <div class="max-w-4xl mx-auto px-6 py-16">

            <div class="mb-12">
                <h1 class="text-3xl md:text-4xl font-bold text-white tracking-tight">
                    Kebijakan Privasi
                </h1>
                <p class="mt-3 text-neutral-400">
                    Terakhir diperbarui: {{ date('d F Y') }}
                </p>
            </div>

            <div class="space-y-10 text-neutral-300 leading-relaxed">

                <div>
                    <h2 class="text-xl font-semibold text-white mb-3">
                        1. Informasi yang Kami Kumpulkan
                    </h2>
                    <p>
                        Kami dapat mengumpulkan informasi seperti nama, nomor telepon, alamat email,
                        serta data transaksi saat Anda melakukan pemesanan atau menghubungi kami.
                    </p>
                </div>

                <div>
                    <h2 class="text-xl font-semibold text-white mb-3">
                        2. Penggunaan Informasi
                    </h2>
                    <p>
                        Informasi yang dikumpulkan digunakan untuk memproses pesanan, meningkatkan
                        kualitas layanan, memberikan informasi promosi, dan menjaga keamanan sistem kami.
                    </p>
                </div>

                <div>
                    <h2 class="text-xl font-semibold text-white mb-3">
                        3. Perlindungan Data
                    </h2>
                    <p>
                        Kami berkomitmen melindungi data pribadi pelanggan dengan sistem keamanan
                        yang sesuai dan tidak membagikan informasi kepada pihak ketiga tanpa izin,
                        kecuali diwajibkan oleh hukum.
                    </p>
                </div>

                <div>
                    <h2 class="text-xl font-semibold text-white mb-3">
                        4. Cookies
                    </h2>
                    <p>
                        Website ini dapat menggunakan cookies untuk meningkatkan pengalaman pengguna.
                        Anda dapat mengatur preferensi cookies melalui pengaturan browser Anda.
                    </p>
                </div>

                <div>
                    <h2 class="text-xl font-semibold text-white mb-3">
                        5. Perubahan Kebijakan
                    </h2>
                    <p>
                        Kebijakan ini dapat diperbarui sewaktu-waktu. Perubahan akan diumumkan melalui
                        halaman ini.
                    </p>
                </div>

                <div>
                    <h2 class="text-xl font-semibold text-white mb-3">
                        6. Hubungi Kami
                    </h2>
                    <p>
                        Jika Anda memiliki pertanyaan mengenai kebijakan privasi ini, silakan hubungi kami
                        melalui halaman kontak resmi.
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection
