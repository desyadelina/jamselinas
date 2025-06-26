@extends('layouts.app')

@section('title', 'Ringkasan Pemesanan - JAMSELINAS XIV 2025')

@section('body-class', 'bg-neutral-100 min-h-screen')

@section('no-navbar', true)
@section('no-footer', true)

@section('content')
    <div class="fixed top-6 left-6 z-50">
        <nav aria-label="Navigation">
            <a href="{{ url()->previous() }}"
                class="group inline-flex items-center justify-center w-12 h-12 bg-jamselinas-primary rounded-xl shadow-md hover:shadow-lg hover:bg-jamselinas-secondary transition-all duration-300 transform hover:scale-105"
                aria-label="Kembali ke halaman sebelumnya">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 text-white transition-transform duration-300 group-hover:-translate-x-0.5">
                    <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </a>
        </nav>
    </div>

    <main class="flex min-h-screen items-center justify-center p-4 pt-20" role="main" aria-label="Ringkasan Pemesanan">
        <div class="w-full max-w-2xl">
            <!-- header + logo -->
            <header class="flex items-center justify-center mb-8">
                <div class="flex items-center gap-4">
                    <img src="{{ asset('images/new_logo.png') }}" alt="JAMSELINAS Header"
                        class="w-[300px] object-contain" />
                </div>
            </header>

            <!-- invoice container -->
            <section class="bg-white rounded-2xl border-2 border-dashed border-gray-300 shadow-lg p-6 md:p-8"
                aria-labelledby="order-summary-title">
                <h1 id="order-summary-title" class="text-2xl md:text-3xl font-bold text-black mb-8 text-center">
                    Ringkasan Pemesanan
                </h1>

                <!-- peserta info -->
                <div class="flex justify-between items-center py-3" role="group" aria-label="Informasi peserta">
                    <span class="text-gray-700 font-medium">Peserta</span>
                    <span class="text-black font-semibold">1x</span>
                </div>

                <hr class="border-gray-300 my-4" role="separator" />

                <!-- biaya breakdown -->
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="flex-1">
                            <span class="text-gray-700 font-medium">Biaya Pendaftaran</span>
                        </div>
                        <div class="text-right">
                            <span class="text-black font-semibold">Rp 400.000</span>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-4">
                        <h2 class="text-lg font-bold text-black mb-2">Tambahan</h2>
                        <div class="flex justify-between items-center">
                            <p class="text-gray-700">Kaos Katun Special Jamselinas 2 - jumlah 1 pc</p>
                            <span class="text-black font-semibold">Rp 85.000</span>
                        </div>
                    </div>
                </div>

                <hr class="border-gray-300 my-4" role="separator" />

                <div class="flex justify-between items-center py-2">
                    <span class="text-gray-700 font-medium">Biaya Admin</span>
                    <span class="text-black font-semibold">Rp 0</span>
                </div>

                <hr class="border-gray-300 my-4" role="separator" />

                <!-- totalan -->
                <div class="flex justify-between items-center py-4 bg-gray-50 rounded-lg px-4" role="group"
                    aria-label="Total pembayaran">
                    <span class="text-xl font-bold text-black">Total</span>
                    <span class="text-xl font-bold text-jamselinas-primary">Rp 485.000</span>
                </div>

                <!-- payment button -->
                <button type="button" onclick="openPaymentModal()"
                    class="w-full mt-8 px-6 py-4 text-xl font-semibold text-white bg-jamselinas-secondary border-2 border-jamselinas-secondary rounded-lg transition-all duration-200 shadow-lg hover:bg-white hover:text-jamselinas-secondary hover:border-jamselinas-secondary focus:bg-white focus:text-jamselinas-secondary focus:border-jamselinas-secondary focus:outline-none focus:ring-4 focus:ring-jamselinas-secondary focus:ring-offset-2 cursor-pointer"
                    aria-label="Lanjutkan ke pembayaran dengan total bayaran tersebut">
                    Bayar Sekarang
                </button>

                @include('components.modals.payment-method')
                @include('components.modals.payment-qr')

                <script>
                    function openPaymentModal() {
                        const modal = document.getElementById('paymentMethodModal');
                        const content = document.getElementById('paymentModalContent');

                        modal.classList.remove('hidden');
                        modal.classList.add('flex');

                        setTimeout(() => {
                            content.classList.remove('scale-95', 'opacity-0');
                            content.classList.add('scale-100', 'opacity-100');
                        }, 10);
                    }

                    function closePaymentModal() {
                        const modal = document.getElementById('paymentMethodModal');
                        const content = document.getElementById('paymentModalContent');

                        content.classList.remove('scale-100', 'opacity-100');
                        content.classList.add('scale-95', 'opacity-0');

                        setTimeout(() => {
                            modal.classList.add('hidden');
                            modal.classList.remove('flex');
                        }, 200);
                    }

                    function selectBankKalsel() {
                        closePaymentModal();

                        setTimeout(() => {
                            openPaymentQRModal();
                        }, 800);
                    }

                    function openPaymentQRModal() {
                        const modal = document.getElementById('paymentQRModal');
                        const content = document.getElementById('qrModalContent');

                        modal.classList.remove('hidden');
                        modal.classList.add('flex');

                        setTimeout(() => {
                            content.classList.remove('scale-95', 'opacity-0');
                            content.classList.add('scale-100', 'opacity-100');
                        }, 10);
                    }

                    function closePaymentQRModal() {
                        const modal = document.getElementById('paymentQRModal');
                        const content = document.getElementById('qrModalContent');

                        content.classList.remove('scale-100', 'opacity-100');
                        content.classList.add('scale-95', 'opacity-0');

                        setTimeout(() => {
                            modal.classList.add('hidden');
                            modal.classList.remove('flex');
                            window.location.href = "{{ route('landing') }}";
                        }, 200);
                    }

                    // close modal kalo user clicking outside
                    document.addEventListener('click', function(event) {
                        const paymentModal = document.getElementById('paymentMethodModal');
                        const qrModal = document.getElementById('paymentQRModal');

                        if (event.target === paymentModal) {
                            closePaymentModal();
                        }

                        if (event.target === qrModal) {
                            closePaymentQRModal();
                        }
                    });

                    // close modal pake esc key
                    document.addEventListener('keydown', function(event) {
                        if (event.key === 'Escape') {
                            closePaymentModal();
                            closePaymentQRModal();
                        }
                    });
                </script>
            </section>
        </div>
    </main>
@endsection
