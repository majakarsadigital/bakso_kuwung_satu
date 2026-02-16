@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
    <section class="bg-neutral-950 border-t border-neutral-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">

            <div class="mb-12">
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white tracking-tight">
                    Hubungi Kami
                </h1>
                <p class="mt-4 text-neutral-400 max-w-2xl leading-relaxed text-sm sm:text-base">
                    Punya pertanyaan, kritik, atau ingin melakukan pemesanan dalam jumlah besar?
                    Tim Bakso Kuwung siap membantu Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">

                <div class="space-y-4 sm:space-y-6">

                    <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-5 sm:p-6">
                        <h3 class="text-white font-semibold text-base sm:text-lg mb-2">
                            Telepon / WhatsApp
                        </h3>
                        <p class="text-neutral-400 text-sm sm:text-base">
                            +62 858-9575-4473
                        </p>

                        <a href="https://wa.me/6285895754473"
                            class="mt-4 inline-flex items-center justify-center w-full sm:w-auto px-4 py-2 bg-green-600 hover:bg-green-700 transition rounded-lg text-sm text-white font-medium">
                            Chat via WhatsApp
                        </a>
                    </div>

                    <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-5 sm:p-6">
                        <h3 class="text-white font-semibold text-base sm:text-lg mb-2">
                            Email
                        </h3>
                        <p class="text-neutral-400 text-sm sm:text-base break-all">
                            baksokuwungsatu@gmail.com
                        </p>
                    </div>

                    <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-5 sm:p-6">
                        <h3 class="text-white font-semibold text-base sm:text-lg mb-2">
                            Jam Operasional
                        </h3>
                        <p class="text-neutral-400 text-sm sm:text-base">
                            Senin – Minggu
                        </p>
                        <p class="text-neutral-400 text-sm sm:text-base">
                            10.00 – 22.00 WIB
                        </p>
                    </div>

                </div>

                <div class="space-y-4 sm:space-y-6">

                    <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-5 sm:p-6">
                        <h3 class="text-white font-semibold text-base sm:text-lg mb-2">
                            Alamat Outlet
                        </h3>
                        <p class="text-neutral-400 leading-relaxed text-sm sm:text-base">
                            JL. Kuwung, Mergelo, Meri,<br>
                            Kecamatan Magersari,<br>
                            Kota Mojokerto, Jawa Timur 61315, Indonesia
                        </p>
                    </div>

                    <div class="rounded-2xl overflow-hidden border border-neutral-800">
                        <iframe class="w-full h-64 sm:h-[265px]" frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1972.720403731177!2d112.44337659509707!3d-7.489673444161703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780d6ce304c77b%3A0xa51c8d67dc0935e9!2sBakso%20Kuwung%20Satu!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid"
                            allowfullscreen loading="lazy">
                        </iframe>
                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection
