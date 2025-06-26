@extends('layouts.app')

@section('title', 'Profile - JAMSELINAS XIV 2025')

@section('no-navbar', true)

@section('no-footer', true)

@section('content')
    @php
        // sample user data
        $userData = [
            'no' => 1,
            'reg' => '0012980',
            'nama' => 'Raden Aditya Prasetya',
            'email' => 'raden.aditya@email.com',
            'nik' => '6371021234567890',
            'jenis_kelamin' => 'Laki-laki',
            'tempat_lahir' => 'Banjarmasin',
            'tanggal_lahir' => '1990-05-15',
            'alamat' => 'Jl. Veteran No. 123, Banjarmasin',
            'gol_darah' => 'A',
            'penyakit_bawaan' => 'Tidak ada',
            'no_wa' => '+6281234567890',
            'no_darurat' => '+6281234567891',
            'hubungan_darurat' => 'Istri',
            'komunitas' => 'Sepeda Seli BJM',
            'ukuran_jersey' => 'L',
            'status' => 'Lunas',
        ];
    @endphp

    <div class="min-h-screen bg-jamselinas-white py-8 px-4">
        <div class="container mx-auto max-w-6xl">
            <!-- nav tabs -->
            <nav class="mb-8" role="navigation" aria-label="Profile navigation">
                <div class="flex items-center space-x-8 border-b border-gray-200">
                    <button
                        class="relative py-4 text-xl lg:text-2xl font-semibold text-jamselinas-primary font-poppins border-b-2 border-jamselinas-secondary focus:outline-none"
                        aria-current="page">
                        Profile
                    </button>
                    <button
                        class="py-4 text-xl lg:text-2xl font-medium text-jamselinas-text/60 hover:text-jamselinas-primary transition-colors font-poppins focus:outline-none focus:text-jamselinas-primary"
                        aria-label="Switch to Activities tab">
                        Aktivitas
                    </button>
                </div>
            </nav>

            <!-- profile summary card -->
            <section class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6 lg:p-8 mb-8"
                aria-labelledby="profile-summary">
                <div class="flex flex-col md:flex-row items-center md:items-start space-y-4 md:space-y-0 md:space-x-6">
                    <!-- profile avatar -->
                    <div
                        class="w-24 h-24 lg:w-32 lg:h-32 bg-gradient-to-br from-jamselinas-primary to-jamselinas-secondary rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-12 h-12 lg:w-16 lg:h-16 text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>

                    <!-- profile info -->
                    <div class="text-center md:text-left flex-1">
                        <h1 class="text-2xl lg:text-3xl font-bold text-jamselinas-text mb-2 font-poppins">
                            {{ $userData['nama'] }}
                        </h1>
                        <p class="text-lg text-jamselinas-text/70 font-inter mb-1">
                            {{ $userData['tempat_lahir'] }}, Indonesia
                        </p>
                        <div
                            class="flex flex-col sm:flex-row items-center justify-center md:justify-start space-y-2 sm:space-y-0 sm:space-x-4 mt-4">
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $userData['status'] === 'Lunas' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                <div
                                    class="w-2 h-2 rounded-full {{ $userData['status'] === 'Lunas' ? 'bg-green-400' : 'bg-red-400' }} mr-2">
                                </div>
                                {{ $userData['status'] }}
                            </span>
                            <span class="text-sm text-jamselinas-text/60 font-inter">
                                No. Registrasi: <span
                                    class="font-semibold text-jamselinas-primary">{{ $userData['reg'] }}</span>
                            </span>
                        </div>
                    </div>
                </div>
            </section>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- personal information section -->
                <section class="lg:col-span-2 bg-white rounded-2xl border border-gray-200/60 shadow-sm p-6 lg:p-8"
                    aria-labelledby="personal-info">
                    <header
                        class="flex flex-col sm:flex-row justify-between items-start sm:items-center pb-6 border-b border-gray-100 mb-6 space-y-4 sm:space-y-0">
                        <h2 id="personal-info" class="text-2xl font-bold text-jamselinas-text font-poppins">
                            Informasi Pribadi
                        </h2>
                        <button
                            class="inline-flex items-center px-4 py-2 bg-jamselinas-primary hover:bg-jamselinas-secondary text-white font-semibold text-sm rounded-lg transition-all duration-300 hover:shadow-md transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-jamselinas-primary focus:ring-offset-2"
                            aria-label="Edit personal data">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            Ubah Data
                        </button>
                    </header>

                    <div class="space-y-6">
                        <!-- basic info -->
                        <div
                            class="bg-gradient-to-r from-jamselinas-primary/5 to-jamselinas-secondary/5 rounded-xl p-4 border border-jamselinas-primary/20">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="space-y-1">
                                    <label
                                        class="text-xs font-medium text-jamselinas-text/50 uppercase tracking-wide font-inter">Nama
                                        Lengkap</label>
                                    <p class="text-base font-medium text-jamselinas-text font-inter">
                                        {{ $userData['nama'] }}</p>
                                </div>
                                <div class="space-y-1">
                                    <label
                                        class="text-xs font-medium text-jamselinas-text/50 uppercase tracking-wide font-inter">Email</label>
                                    <p class="text-base font-medium text-jamselinas-text font-inter">
                                        {{ $userData['email'] }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- contact info -->
                        <div
                            class="bg-gradient-to-r from-jamselinas-primary/5 to-jamselinas-secondary/5 rounded-xl p-4 border border-jamselinas-primary/20">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="space-y-1">
                                    <label
                                        class="text-xs font-medium text-jamselinas-text/50 uppercase tracking-wide font-inter">WhatsApp</label>
                                    <p class="text-base font-medium text-jamselinas-text font-inter">
                                        {{ $userData['no_wa'] }}</p>
                                </div>
                                <div class="space-y-1">
                                    <label
                                        class="text-xs font-medium text-jamselinas-text/50 uppercase tracking-wide font-inter">Kontak
                                        Darurat ({{ $userData['hubungan_darurat'] ?? 'N/A' }})</label>
                                    <p class="text-base font-medium text-jamselinas-text font-inter">
                                        {{ $userData['no_darurat'] }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- personal details -->
                        <div
                            class="bg-gradient-to-r from-jamselinas-primary/5 to-jamselinas-secondary/5 rounded-xl p-4 border border-jamselinas-primary/20">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="space-y-1">
                                    <label
                                        class="text-xs font-medium text-jamselinas-text/50 uppercase tracking-wide font-inter">Tempat
                                        Lahir</label>
                                    <p class="text-base font-medium text-jamselinas-text font-inter">
                                        {{ $userData['tempat_lahir'] }}</p>
                                </div>
                                <div class="space-y-1">
                                    <label
                                        class="text-xs font-medium text-jamselinas-text/50 uppercase tracking-wide font-inter">Tanggal
                                        Lahir</label>
                                    <p class="text-base font-medium text-jamselinas-text font-inter">
                                        {{ date('d M Y', strtotime($userData['tanggal_lahir'])) }}</p>
                                </div>
                                <div class="space-y-1">
                                    <label
                                        class="text-xs font-medium text-jamselinas-text/50 uppercase tracking-wide font-inter">Jenis
                                        Kelamin</label>
                                    <p class="text-base font-medium text-jamselinas-text font-inter">
                                        {{ $userData['jenis_kelamin'] }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- keperluan event info -->
                        <div
                            class="bg-gradient-to-r from-jamselinas-primary/5 to-jamselinas-secondary/5 rounded-xl p-4 border border-jamselinas-primary/20">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="space-y-1">
                                    <label
                                        class="text-xs font-medium text-jamselinas-text/50 uppercase tracking-wide font-inter">Golongan
                                        Darah</label>
                                    <p class="text-base font-medium text-jamselinas-text font-inter">
                                        {{ $userData['gol_darah'] }}
                                    </p>
                                </div>
                                <div class="space-y-1">
                                    <label
                                        class="text-xs font-medium text-jamselinas-text/50 uppercase tracking-wide font-inter">Ukuran
                                        Jersey</label>
                                    <p class="text-base font-medium text-jamselinas-text font-inter">
                                        {{ $userData['ukuran_jersey'] }}</p>
                                </div>
                                <div class="space-y-1">
                                    <label
                                        class="text-xs font-medium text-jamselinas-text/50 uppercase tracking-wide font-inter">Komunitas</label>
                                    <p class="text-base font-medium text-jamselinas-text font-inter">
                                        {{ $userData['komunitas'] }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- address & medical -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div
                                class="bg-gradient-to-r from-jamselinas-primary/5 to-jamselinas-secondary/5 rounded-xl p-4 border border-jamselinas-primary/20">
                                <h3 class="text-xs font-medium text-jamselinas-text/50 uppercase tracking-wide font-inter">
                                    Alamat</h3>
                                <address
                                    class="text-sm font-medium text-jamselinas-text font-inter not-italic leading-relaxed">
                                    {{ $userData['alamat'] }}
                                </address>
                            </div>
                            <div
                                class="bg-gradient-to-r from-jamselinas-primary/5 to-jamselinas-secondary/5 rounded-xl p-4 border border-jamselinas-primary/20">
                                <h3 class="text-xs font-medium text-jamselinas-text/50 uppercase tracking-wide font-inter">
                                    Riwayat Kesehatan</h3>
                                <p class="text-sm font-medium text-jamselinas-text font-inter">
                                    {{ $userData['penyakit_bawaan'] }}
                                </p>
                            </div>
                        </div>

                        <!-- NIK -->
                        <div
                            class="bg-gradient-to-r from-jamselinas-primary/5 to-jamselinas-secondary/5 rounded-xl p-4 border border-jamselinas-primary/20">
                            <div class="flex items-center justify-between">
                                <div class="space-y-1">
                                    <label
                                        class="text-xs font-medium text-jamselinas-text/50 uppercase tracking-wide font-inter">NIK
                                        (Nomor Induk Kependudukan)</label>
                                    <p class="text-lg font-bold text-jamselinas-primary font-mono tracking-wider">
                                        {{ $userData['nik'] }}</p>
                                </div>
                                <div class="bg-jamselinas-primary/10 p-2 rounded-lg">
                                    <svg class="w-6 h-6 text-jamselinas-primary" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- event info & actions -->
                <aside class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6 lg:p-8"
                    aria-labelledby="event-info">
                    <header class="flex justify-between items-center mb-8">
                        <h2 id="event-info" class="text-2xl font-bold text-jamselinas-text font-poppins">
                            Event Info
                        </h2>
                    </header>

                    <div class="space-y-8">
                        <!-- event details -->
                        <div class="space-y-6">
                            <div class="bg-blue-almost-white rounded-xl p-4 border border-jamselinas-primary/20">
                                <h3 class="text-lg font-semibold text-jamselinas-primary font-poppins mb-2">JAMSELINAS XIV
                                    2025</h3>
                                <p class="text-jamselinas-text/70 font-inter">Banjarmasin, Kalimantan Selatan</p>
                            </div>

                            <div class="space-y-4">
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-jamselinas-text/60 font-inter">Tanggal
                                        Event</label>
                                    <time class="text-lg font-medium text-jamselinas-text font-inter block"
                                        datetime="2025-08-17">17 Agustus 2025</time>
                                </div>

                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-jamselinas-text/60 font-inter">Nomor
                                        Registrasi</label>
                                    <p class="text-lg font-bold text-jamselinas-primary font-inter">{{ $userData['reg'] }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- action buttons -->
                        <div class="space-y-4">
                            <button
                                class="w-full inline-flex items-center justify-center px-6 py-3 bg-jamselinas-secondary hover:bg-jamselinas-primary text-white font-semibold rounded-xl transition-all duration-300 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-jamselinas-secondary focus:ring-offset-2"
                                aria-label="Download event guide">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Event Guide
                            </button>

                            <button
                                class="w-full inline-flex items-center justify-center px-6 py-3 border-2 border-jamselinas-primary text-jamselinas-primary hover:bg-jamselinas-primary hover:text-white font-semibold rounded-xl transition-all duration-300 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-jamselinas-primary focus:ring-offset-2"
                                aria-label="Contact support">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                                Hubungi Kami
                            </button>

                            <button
                                class="w-full inline-flex items-center justify-center px-6 py-3 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-xl transition-all duration-300 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2"
                                aria-label="Logout from account">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                Keluar
                            </button>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // tab navigation functionality
            const tabs = document.querySelectorAll('[role="navigation"] button');

            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // remove active state from all tabs
                    tabs.forEach(t => {
                        t.classList.remove('text-jamselinas-primary',
                            'border-jamselinas-secondary');
                        t.classList.add('text-jamselinas-text/60');
                        t.removeAttribute('aria-current');
                    });

                    // add active state to clicked tab
                    this.classList.remove('text-jamselinas-text/60');
                    this.classList.add('text-jamselinas-primary', 'border-jamselinas-secondary');
                    this.setAttribute('aria-current', 'page');

                    if (this.textContent.trim() === 'Aktivitas') {
                        console.log('Switch to Activities tab');
                    }
                });
            });

            const focusableElements = document.querySelectorAll('button, [tabindex]:not([tabindex="-1"])');

            focusableElements.forEach(element => {
                element.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        this.click();
                    }
                });
            });

            // button actions
            document.querySelector('[aria-label="Edit personal data"]')?.addEventListener('click', function() {
                // handle edit personal data
                console.log('Edit personal data clicked');
            });

            document.querySelector('[aria-label="Download event guide"]')?.addEventListener('click', function() {
                // navigate ke event guide or download
                window.location.href = "{{ route('event-guide') }}";
            });

            document.querySelector('[aria-label="Contact support"]')?.addEventListener('click', function() {
                // navigate ke contact page
                window.location.href = "{{ route('hubungi-kami') }}";
            });

            document.querySelector('[aria-label="Logout from account"]')?.addEventListener('click', function() {
                // handle logout
                if (confirm('Apakah Anda yakin ingin keluar?')) {
                    // blm, be aja
                    console.log('Logout confirmed');
                    window.location.href = "{{ route('landing') }}";
                }
            });
        });
    </script>
@endsection
