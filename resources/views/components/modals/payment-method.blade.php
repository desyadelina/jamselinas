<div id="paymentMethodModal"
    class="fixed inset-0 bg-black/10 z-50 hidden items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full mx-4 transform transition-all duration-300 scale-95 opacity-0"
        id="paymentModalContent">
        <div class="flex items-center justify-between p-6 border-b border-gray-100">
            <div>
                <h1 class="text-xl font-semibold text-jamselinas-text">Pilih Metode Pembayaran</h1>
                <p class="text-sm text-gray-500 mt-1">Selesaikan pembayaran Anda</p>
            </div>
            <button type="button" onclick="closePaymentModal()"
                class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100 text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        <div class="p-6">
            <div class="mb-6">
                <h2 class="text-sm font-medium text-gray-700 mb-3 uppercase tracking-wide">Transfer Bank</h2>

                <button type="button" onclick="selectBankKalsel()"
                    class="w-full p-4 border-2 border-gray-200 rounded-xl hover:border-jamselinas-primary hover:bg-jamselinas-cream/50 focus:outline-none focus:ring-2 focus:ring-jamselinas-primary focus:border-jamselinas-primary transition-all duration-200 group">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div
                                class="w-12 h-12 bg-white rounded-lg border border-gray-200 flex items-center justify-center overflow-hidden">
                                <img src="{{ asset('images/payment/bank_kalsel_logo.png') }}" alt="Bank Kalsel Logo"
                                    class="w-10 h-10 object-contain">
                            </div>
                            <div class="text-left">
                                <div class="font-semibold text-jamselinas-text">Bank Kalsel</div>
                                <div class="text-sm text-gray-500">Transfer Bank</div>
                            </div>
                        </div>
                        <div
                            class="w-5 h-5 border-2 border-gray-300 rounded-full group-hover:border-jamselinas-primary transition-colors flex items-center justify-center">
                            <div
                                class="w-2 h-2 bg-jamselinas-primary rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                        </div>
                    </div>
                </button>
            </div>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-3">
                <div class="flex items-start space-x-2">
                    <svg class="w-5 h-5 text-blue-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <p class="text-sm text-blue-700">
                        Setelah memilih metode pembayaran, Anda akan diarahkan ke halaman konfirmasi untuk menyelesaikan
                        transaksi.
                    </p>
                </div>
            </div>
        </div>

        <div class="px-6 py-4 bg-gray-50 rounded-b-2xl">
            <div class="flex items-center justify-center space-x-2 text-xs text-gray-500">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <span>Pembayaran aman dan terlindungi</span>
            </div>
        </div>
    </div>
</div>
