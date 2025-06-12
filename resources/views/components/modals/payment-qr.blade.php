<!-- Payment QR Code Modal -->
<div id="paymentQRModal" class="fixed inset-0 bg-black/10 z-50 hidden items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full mx-4 transform transition-all duration-300 scale-95 opacity-0"
        id="qrModalContent">
        <div class="text-center p-6 border-b border-gray-100">
            <h1 class="text-xl font-bold text-jamselinas-text mb-2">Pembayaran Bank Kalsel</h1>
            <p class="text-sm text-gray-600">Scan QR Code untuk pembayaran</p>
        </div>

        <div class="p-6">
            <div class="text-center mb-4">
                <h2 class="text-base font-semibold text-jamselinas-text mb-3">KOMUNITAS SEPEDA SELI BJM</h2>

                <div
                    class="bg-gradient-to-r from-jamselinas-gradient-start to-jamselinas-gradient-end rounded-lg p-3 mb-4">
                    <div class="text-jamselinas-text font-bold text-sm">
                        <div>NMID: ID1025404838753</div>
                        <div>A01</div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mb-4">
                <div class="bg-white p-3 rounded-lg border border-gray-200">
                    <img src="{{ asset('images/payment/qr_code_komunitas_sepeda_seli_bjm.png') }}"
                        alt="QR Code Pembayaran Bank Kalsel" class="w-56 h-56 object-contain">
                </div>
            </div>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-3 mb-4">
                <div class="text-center">
                    <p class="text-sm text-blue-800 font-medium">Total Pembayaran</p>
                    <p class="text-xl font-bold text-blue-900">Rp 485.000</p>
                </div>
            </div>
        </div>

        <div class="p-6 bg-gray-50 rounded-b-2xl">
            <button type="button" onclick="closePaymentQRModal()"
                class="w-full py-3 px-4 bg-jamselinas-secondary text-white font-semibold rounded-xl hover:bg-jamselinas-primary focus:outline-none focus:ring-2 focus:ring-jamselinas-primary focus:ring-offset-2 transition-colors duration-200">
                Selesai
            </button>

            <div class="text-center mt-3">
                <p class="text-xs text-gray-500">Pembayaran akan diverifikasi dalam 1x24 jam</p>
            </div>
        </div>
    </div>
</div>
