@extends('layouts.app')

@section('title', '404 - Halaman Tidak Ditemukan | JAMSELINAS XIV 2025')

@section('body-class', 'bg-jamselinas-white')

@section('content')
<div class="min-h-screen flex items-center justify-center px-4 py-16">
    <div class="max-w-2xl mx-auto text-center">
        <div class="mb-8">
            <h1 class="text-8xl md:text-9xl font-bold text-jamselinas-primary opacity-20">404</h1>
        </div>

        <div class="mb-8">
            <div class="w-32 h-32 mx-auto bg-jamselinas-gradient-start rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" d="M388 288a76 76 0 1 0 76 76a76.24 76.24 0 0 0-76-76Zm-264 0a76 76 0 1 0 76 76a76.24 76.24 0 0 0-76-76Z"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 360v-86l-64-42l80-88l40 72h56"/><path fill="currentColor" d="M320 136a31.89 31.89 0 0 0 32-32.1A31.55 31.55 0 0 0 320.2 72a32 32 0 1 0-.2 64"/></svg>
            </div>
        </div>

        <div class="mb-8">
            <h2 class="text-3xl md:text-4xl font-bold text-jamselinas-text mb-4 font-poppins">
                Oops! Halaman Tidak Ditemukan
            </h2>
            <p class="text-lg text-jamselinas-text/70 font-inter leading-relaxed">
                Sepertinya halaman yang Anda cari telah hilang atau tidak pernah ada. 
                Mungkin Anda salah mengetik URL atau halaman ini sedang dalam perbaikan.
            </p>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="{{ route('landing') }}" 
               class="inline-flex items-center px-8 py-3 bg-jamselinas-primary hover:bg-jamselinas-secondary text-white font-inter text-lg rounded-xl transition-all duration-300 hover:shadow-lg transform hover:scale-105">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Kembali ke Beranda
            </a>
            
            <button onclick="history.back()" 
                    class="inline-flex items-center px-8 py-3 border-2 border-jamselinas-secondary text-jamselinas-secondary hover:bg-jamselinas-secondary hover:text-white font-inter text-lg rounded-xl transition-all duration-300 hover:shadow-lg transform hover:scale-105">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Halaman Sebelumnya
            </button>
        </div>

        <div class="mt-12 pt-8 border-t border-jamselinas-gradient-mid">
            <p class="text-jamselinas-text/60 font-inter mb-4">Atau kunjungi halaman lainnya:</p>
            <div class="flex flex-wrap justify-center gap-4 text-sm">
                <a href="{{ route('event-guide') }}" class="text-jamselinas-primary hover:text-jamselinas-secondary transition-colors">Event Guide</a>
                <span class="text-jamselinas-text/30">•</span>
                <a href="{{ route('layanan-kami') }}" class="text-jamselinas-primary hover:text-jamselinas-secondary transition-colors">Layanan Kami</a>
                <span class="text-jamselinas-text/30">•</span>
                <a href="{{ route('hubungi-kami') }}" class="text-jamselinas-primary hover:text-jamselinas-secondary transition-colors">Hubungi Kami</a>
            </div>
        </div>
    </div>
</div>
@endsection