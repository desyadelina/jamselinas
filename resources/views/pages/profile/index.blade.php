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
            'status' => 'Menunggu Verifikasi', // updated status untuk demo
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
                            No. Registrasi: {{ $userData['reg'] }}
                        </p>
                        <div
                            class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium
                            @if ($userData['status'] === 'Lunas') bg-green-100 text-green-800
                            @elseif($userData['status'] === 'Menunggu Verifikasi') bg-yellow-100 text-yellow-800
                            @else bg-red-100 text-red-800 @endif">
                            {{ $userData['status'] }}
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
                            class="inline-flex items-center px-4 py-2 bg-jamselinas-primary hover:bg-jamselinas-secondary text-white font-medium rounded-lg transition-colors duration-200"
                            aria-label="Edit personal data">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            Edit
                        </button>
                    </header>

                    <div class="space-y-6">
                        <!-- basic info -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4 bg-gray-50 rounded-lg border border-gray-100">
                            <div>
                                <label class="text-sm font-medium text-gray-600">Email</label>
                                <p class="text-jamselinas-text font-medium">{{ $userData['email'] }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-medium text-gray-600">Jenis Kelamin</label>
                                <p class="text-jamselinas-text font-medium">{{ $userData['jenis_kelamin'] }}</p>
                            </div>
                        </div>

                        <!-- contact info -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4 bg-gray-50 rounded-lg border border-gray-100">
                            <div>
                                <label class="text-sm font-medium text-gray-600">No. WhatsApp</label>
                                <p class="text-jamselinas-text font-medium">{{ $userData['no_wa'] }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-medium text-gray-600">No. Darurat</label>
                                <p class="text-jamselinas-text font-medium">{{ $userData['no_darurat'] }}
                                    ({{ $userData['hubungan_darurat'] }})</p>
                            </div>
                        </div>

                        <!-- personal details -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4 bg-gray-50 rounded-lg border border-gray-100">
                            <div>
                                <label class="text-sm font-medium text-gray-600">Tempat, Tanggal Lahir</label>
                                <p class="text-jamselinas-text font-medium">{{ $userData['tempat_lahir'] }},
                                    {{ date('d M Y', strtotime($userData['tanggal_lahir'])) }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-medium text-gray-600">Golongan Darah</label>
                                <p class="text-jamselinas-text font-medium">{{ $userData['gol_darah'] }}</p>
                            </div>
                        </div>

                        <!-- keperluan event info -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4 bg-gray-50 rounded-lg border border-gray-100">
                            <div>
                                <label class="text-sm font-medium text-gray-600">Komunitas</label>
                                <p class="text-jamselinas-text font-medium">{{ $userData['komunitas'] }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-medium text-gray-600">Ukuran Jersey</label>
                                <p class="text-jamselinas-text font-medium">{{ $userData['ukuran_jersey'] }}</p>
                            </div>
                        </div>

                        <!-- address & medical -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="p-4 bg-gray-50 rounded-lg border border-gray-100">
                                <label class="text-sm font-medium text-gray-600">Alamat</label>
                                <p class="text-jamselinas-text font-medium">{{ $userData['alamat'] }}</p>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-lg border border-gray-100">
                                <label class="text-sm font-medium text-gray-600">Riwayat Penyakit</label>
                                <p class="text-jamselinas-text font-medium">{{ $userData['penyakit_bawaan'] }}</p>
                            </div>
                        </div>

                        <!-- NIK -->
                        <div class="p-4 bg-gray-50 rounded-lg border border-gray-100">
                            <label class="text-sm font-medium text-gray-600">NIK</label>
                            <p class="text-jamselinas-text font-medium font-mono">{{ $userData['nik'] }}</p>
                        </div>
                    </div>
                </section>

                <!-- event info & actions -->
                <aside class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6 lg:p-8"
                    aria-labelledby="event-info">
                    <header class="flex justify-between items-center mb-8">
                        <h2 id="event-info" class="text-2xl font-bold text-jamselinas-text font-poppins">
                            Event & Aksi
                        </h2>
                    </header>

                    <div class="space-y-8">
                        <!-- event details -->
                        <div class="space-y-6">
                            <div class="p-4 bg-jamselinas-cream rounded-lg border border-jamselinas-primary/20">
                                <h3 class="text-lg font-semibold text-jamselinas-text mb-2">JAMSELINAS XIV 2025</h3>
                                <p class="text-jamselinas-text/70 text-sm mb-2">📍 Banjarmasin, Kalimantan Selatan</p>
                                <p class="text-jamselinas-text/70 text-sm">📅 15-16 Februari 2025</p>
                            </div>

                            <div class="p-4 bg-gray-50 rounded-lg border border-gray-200">
                                <h4 class="font-semibold text-jamselinas-text mb-2">Status Pembayaran</h4>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600">Total: Rp 485.000</span>
                                    <span
                                        class="px-3 py-1 rounded-full text-xs font-medium
                                        @if ($userData['status'] === 'Lunas') bg-green-100 text-green-800
                                        @elseif($userData['status'] === 'Menunggu Verifikasi') bg-yellow-100 text-yellow-800
                                        @else bg-red-100 text-red-800 @endif">
                                        {{ $userData['status'] }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- action buttons -->
                        <div class="space-y-4">
                            <!-- upload bukti pembayaran button - conditional berdasarkan status -->
                            @if ($userData['status'] === 'Menunggu Verifikasi' || $userData['status'] === 'Belum Bayar')
                                <a href="{{ route('upload.bukti.pembayaran') }}"
                                    class="w-full inline-flex items-center justify-center px-4 py-3 bg-jamselinas-secondary hover:bg-jamselinas-primary text-white font-medium rounded-lg transition-colors duration-200"
                                    aria-label="Upload bukti pembayaran">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                    </svg>
                                    Upload Bukti Pembayaran
                                </a>
                            @endif

                            <button
                                class="w-full inline-flex items-center justify-center px-4 py-3 border border-jamselinas-primary text-jamselinas-primary hover:bg-jamselinas-primary hover:text-white font-medium rounded-lg transition-colors duration-200"
                                aria-label="Download event guide">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Event Guide
                            </button>

                            <button
                                class="w-full inline-flex items-center justify-center px-4 py-3 border border-gray-300 text-gray-700 hover:bg-gray-50 font-medium rounded-lg transition-colors duration-200"
                                aria-label="Contact support">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                                Hubungi Support
                            </button>

                            <button
                                class="w-full inline-flex items-center justify-center px-4 py-3 border border-red-300 text-red-700 hover:bg-red-50 font-medium rounded-lg transition-colors duration-200"
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
                        t.removeAttribute('aria-current');
                    });

                    // add active state to clicked tab
                    this.classList.remove('text-jamselinas-text/60');
                    this.classList.add('text-jamselinas-primary', 'border-jamselinas-secondary');
                    this.setAttribute('aria-current', 'page');

                    if (this.textContent.trim() === 'Aktivitas') {
                        console.log('Aktivitas tab clicked - implement aktivitas content');
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
                    // redirect to login or landing
                    console.log('Logout confirmed');
                    window.location.href = "{{ route('landing') }}";
                }
            });
        });
    </script>
@endsection
