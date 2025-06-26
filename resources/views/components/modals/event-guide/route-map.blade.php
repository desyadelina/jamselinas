<div id="routeMapModal" class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-2xl max-w-5xl w-full mx-4 transform transition-all duration-300 scale-95 opacity-0 flex flex-col"
        id="routeMapModalContent" style="max-height: 90vh;">

        <div class="flex items-center justify-between p-6 border-b border-gray-100 bg-jamselinas-primary flex-shrink-0">
            <div>
                <h1 class="text-2xl font-bold text-white font-poppins">ROUTE JAMSELINAS XIV 2025</h1>
                <p class="text-sm text-white/70 mt-1">Banjarmasin - Kalimantan Selatan</p>
            </div>
            <button type="button" onclick="closeRouteMapModal()"
                class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-white/20 text-white hover:text-white transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        <div class="flex-1 overflow-y-auto">
            <div class="relative bg-white p-4">
                <div id="routeMapContainer" class="rounded-lg overflow-hidden" style="height: 500px;">
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1g0sFGrJcSU7zPQOYTQE2W6GxWuFBD3Q&ehbc=2E312F&noprof=1" width="100%"
                        height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <!-- route information -->
            <div class="p-6 bg-gray-50">
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-3 mb-6">
                    <div class="bg-white rounded-lg p-3 border-l-4 border-green-500 min-h-[120px]">
                        <h3 class="font-semibold text-jamselinas-text text-sm mb-2 line-clamp-1">
                            Menara Pandang Siring
                        </h3>
                        <ul class="text-xs text-gray-600 space-y-0.5">
                            <li class="truncate">Jl. Jenderal Sudirman</li>
                            <li class="truncate">Jl. Pangeran Samudera</li>
                            <li class="truncate">Jl. Lambung Mangkurat</li>
                        </ul>
                    </div>

                    <div class="bg-white rounded-lg p-3 border-l-4 border-blue-500 min-h-[120px]">
                        <h3 class="font-semibold text-jamselinas-text text-sm mb-2 line-clamp-1">
                            Masjid Raya Sabilal Muhtadin
                        </h3>
                        <ul class="text-xs text-gray-600 space-y-0.5">
                            <li class="truncate">Jl. Jenderal Ahmad Yani KM 1</li>
                            <li class="truncate">Jl. RE Martadinata</li>
                            <li class="truncate">Jl. Brigjen H. Hasan Basry</li>
                        </ul>
                    </div>

                    <div class="bg-white rounded-lg p-3 border-l-4 border-yellow-500 min-h-[120px]">
                        <h3 class="font-semibold text-jamselinas-text text-sm mb-2 line-clamp-1">
                            Kampung Sasirangan
                        </h3>
                        <ul class="text-xs text-gray-600 space-y-0.5">
                            <li class="truncate">Jl. Sungai Jingah</li>
                            <li class="truncate">Jl. Haryono MT</li>
                            <li class="truncate">Jl. Zafri Zam-Zam</li>
                            <li class="truncate">Jl. Pramuka</li>
                        </ul>
                    </div>

                    <div class="bg-white rounded-lg p-3 border-l-4 border-red-500 min-h-[120px]">
                        <h3 class="font-semibold text-jamselinas-text text-sm mb-2 line-clamp-1">
                            Taman Kamboja Banjarmasin
                        </h3>
                        <ul class="text-xs text-gray-600 space-y-0.5">
                            <li class="truncate">Jl. H. Anang Adenansi</li>
                        </ul>
                    </div>
                </div>

                <!-- important notes -->
                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                    <h4 class="font-semibold text-yellow-800 mb-2 flex items-center gap-2">
                        <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Catatan Penting
                    </h4>
                    <p class="text-sm text-yellow-700">
                        Rute sewaktu-waktu dapat berubah melihat situasi dan kondisi jalan
                    </p>
                </div>
            </div>
        </div>

        <!-- modal footer -->
        <div class="p-6 bg-gray-50 border-t border-gray-200 flex-shrink-0">
            <div class="flex flex-col sm:flex-row gap-3 justify-end">
                <button type="button" onclick="openFullMap()"
                    class="px-6 py-2 bg-jamselinas-primary text-white rounded-lg hover:bg-jamselinas-secondary transition-colors font-medium">
                    <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                        </path>
                    </svg>
                    Buka Peta Penuh
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function openRouteMapModal() {
        const modal = document.getElementById('routeMapModal');
        const content = document.getElementById('routeMapModalContent');

        modal.classList.remove('hidden');
        modal.classList.add('flex');

        setTimeout(() => {
            content.classList.remove('scale-95', 'opacity-0');
            content.classList.add('scale-100', 'opacity-100');
        }, 10);

        // disable body scroll
        document.body.style.overflow = 'hidden';
    }

    function closeRouteMapModal() {
        const modal = document.getElementById('routeMapModal');
        const content = document.getElementById('routeMapModalContent');

        content.classList.remove('scale-100', 'opacity-100');
        content.classList.add('scale-95', 'opacity-0');

        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }, 200);

        // re-enable body scroll
        document.body.style.overflow = 'auto';
    }

    function openFullMap() {
        // open My Maps in new window
        window.open('https://www.google.com/maps/d/u/0/viewer?mid=1g0sFGrJcSU7zPQOYTQE2W6GxWuFBD3Q&ll=-3.317939708783408%2C114.59769159999998&z=16', '_blank');
    }

    // close modal when clicking outside
    document.addEventListener('click', function(event) {
        const modal = document.getElementById('routeMapModal');
        if (event.target === modal) {
            closeRouteMapModal();
        }
    });

    // close modal with Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeRouteMapModal();
        }
    });
</script>
