<section id="features" class="py-12 lg:py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-8 lg:mb-12">
            <h2 class="font-bold font-poppins text-2xl lg:text-4xl text-jamselinas-primary mb-4">
                Panduan Event
            </h2>
            <p class="text-jamselinas-text font-inter text-lg max-w-2xl mx-auto">
                Informasi lengkap untuk memastikan pengalaman terbaik Anda di <b>JAMSELINAS XIV 2025</b>
            </p>
        </div>

        <!-- features grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 lg:gap-6">
            @php
                $features = [
                    [
                        'icon' => 'route-map',
                        'title' => 'Route Map',
                        'description' => 'Rute wajib bagi seluruh peserta',
                        'action' => 'openRouteMapModal()',
                    ],
                    [
                        'icon' => 'phone',
                        'title' => 'Nomor Penting',
                        'description' => 'Informasi nomor penting',
                        'action' => null,
                    ],
                    [
                        'icon' => 'hotel',
                        'title' => 'Hotel',
                        'description' => 'Rekomendasi Hotel bagi peserta',
                        'action' => null,
                    ],
                    [
                        'icon' => 'homestay',
                        'title' => 'Homestay',
                        'description' => 'Rekomendasi Homestay bagi peserta',
                        'action' => null,
                    ],
                    [
                        'icon' => 'schedule',
                        'title' => 'Rangkaian Acara',
                        'description' => 'Rangkaian Acara JAMSELINAS XIV 2025',
                        'action' => null,
                    ],
                    [
                        'icon' => 'rules',
                        'title' => 'Peraturan Wajib',
                        'description' => 'Peraturan wajib bagi seluruh peserta',
                        'action' => null,
                    ],
                    [
                        'icon' => 'ridepack',
                        'title' => 'Ridepack',
                        'description' => 'Ridepack JAMSELINAS XIV 2025',
                        'action' => null,
                    ],
                    [
                        'icon' => 'cycling-rules',
                        'title' => 'Aturan Bersepeda',
                        'description' => 'Aturan bersepeda bagi seluruh peserta',
                        'action' => null,
                    ],
                    [
                        'icon' => 'equipment',
                        'title' => 'Perlengkapan Wajib',
                        'description' => 'Perlengkapan wajib bagi seluruh peserta',
                        'action' => null,
                    ],
                    [
                        'icon' => 'gala-dinner',
                        'title' => 'Gala Dinner',
                        'description' => 'Aturan gala dinner bagi seluruh peserta',
                        'action' => null,
                    ],
                ];
            @endphp

            @foreach ($features as $feature)
                <article class="group">
                    <div class="bg-white rounded-xl border-2 border-jamselinas-primary/20 hover:border-jamselinas-primary transition-all duration-300 p-4 lg:p-6 h-full flex flex-col items-center text-center hover:shadow-lg cursor-pointer transform hover:scale-105"
                        @if ($feature['action']) onclick="{{ $feature['action'] }}" @endif>
                        <!-- icon container -->
                        <div class="w-16 h-16 lg:w-20 lg:h-20 mb-4 lg:mb-6 flex items-center justify-center">
                            @if ($feature['icon'] === 'route-map')
                                <svg class="w-full h-full text-jamselinas-secondary" viewBox="0 0 126 126"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31.625 109.75C39.4375 101.417 47.25 93.9547 47.25 84.75C47.25 75.5453 40.2544 68.0833 31.625 68.0833C22.9956 68.0833 16 75.5453 16 84.75C16 93.9547 23.8125 101.417 31.625 109.75ZM31.625 109.75H91.5208C98.712 109.75 104.542 103.92 104.542 96.7292C104.542 89.538 98.712 83.7083 91.5208 83.7083H78.5M94.125 57.6667C101.938 49.3333 109.75 41.8714 109.75 32.6667C109.75 23.4619 102.755 16 94.125 16C85.4953 16 78.5 23.4619 78.5 32.6667C78.5 41.8714 86.3125 49.3333 94.125 57.6667ZM94.125 57.6667H75.8958C68.7047 57.6667 62.875 63.4964 62.875 70.6875C62.875 77.8786 68.7047 83.7083 75.8958 83.7083H81.625"
                                        stroke="currentColor" stroke-width="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            @elseif($feature['icon'] === 'phone')
                                <svg class="w-full h-full text-jamselinas-secondary" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            @elseif($feature['icon'] === 'hotel')
                                <svg class="w-full h-full text-jamselinas-secondary" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2 21h20M6 21V7M18 21V7M2 7l10-4 10 4M6 11h.01M10 11h.01M14 11h.01M18 11h.01M6 15h.01M10 15h.01M14 15h.01M18 15h.01"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            @elseif($feature['icon'] === 'homestay')
                                <svg class="w-full h-full text-jamselinas-secondary" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9 9h.01M9 12h.01M9 15h.01" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            @elseif($feature['icon'] === 'schedule')
                                <svg class="w-full h-full text-jamselinas-secondary" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"
                                        stroke="currentColor" stroke-width="2" />
                                    <line x1="16" y1="2" x2="16" y2="6"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                    <line x1="8" y1="2" x2="8" y2="6"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                    <line x1="3" y1="10" x2="21" y2="10"
                                        stroke="currentColor" stroke-width="2" />
                                </svg>
                            @elseif($feature['icon'] === 'rules')
                                <svg class="w-full h-full text-jamselinas-secondary" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"
                                        stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                    <polyline points="14,2 14,8 20,8" stroke="currentColor" stroke-width="2"
                                        stroke-linejoin="round" />
                                    <line x1="16" y1="13" x2="8" y2="13"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                    <line x1="16" y1="17" x2="8" y2="17"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            @elseif($feature['icon'] === 'ridepack')
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-full h-full text-jamselinas-secondary" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M19 6.5h-3v-1a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v1H5a3 3 0 0 0-3 3v9a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-9a3 3 0 0 0-3-3m-9-1a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1h-4Zm10 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V13a21.7 21.7 0 0 0 8 1.53A21.8 21.8 0 0 0 20 13Zm0-7.69a19.9 19.9 0 0 1-16 0V9.5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1Z" />
                                </svg>
                            @elseif($feature['icon'] === 'cycling-rules')
                                <svg class="w-full h-full text-jamselinas-secondary" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="18.5" cy="17.5" r="3.5" stroke="currentColor"
                                        stroke-width="2" />
                                    <circle cx="5.5" cy="17.5" r="3.5" stroke="currentColor"
                                        stroke-width="2" />
                                    <circle cx="15" cy="5" r="1" stroke="currentColor"
                                        stroke-width="2" />
                                    <path d="M12 17.5V14l-3-3 4-3 2 3h2" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            @elseif($feature['icon'] === 'equipment')
                                <svg class="w-full h-full text-jamselinas-secondary" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            @elseif($feature['icon'] === 'gala-dinner')
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-full h-full text-jamselinas-secondary" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M464 344.063c0-109.308-84.755-199.193-192-207.39V80h-32v56.673c-107.245 8.2-192 98.082-192 207.39v33.107h416Zm-32 1.107H80v-1.107c0-97.046 78.953-176 176-176s176 78.953 176 176ZM16 416h480v32H16z" />
                                </svg>
                            @else
                                <svg class="w-full h-full text-jamselinas-secondary" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 7h14l-1 10H6L5 7zM5 7L4 4H2M9 11v6M15 11v6M12 11v6"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-full h-full text-jamselinas-secondary" viewBox="0 0 256 256">
                                    <path fill="currentColor"
                                        d="M208 28H48a20 20 0 0 0-20 20v160a20 20 0 0 0 20 20h160a20 20 0 0 0 20-20V48a20 20 0 0 0-20-20m-4 159L69 52h135ZM52 69l135 135H52Z" />
                                </svg>
                            @endif
                        </div>

                        <!-- content -->
                        <div class="flex flex-col items-center flex-1">
                            <h3 class="text-sm lg:text-lg font-semibold text-jamselinas-text mb-2 font-poppins">
                                {{ $feature['title'] }}
                            </h3>
                            <p class="text-xs lg:text-sm text-jamselinas-text/70 font-inter leading-tight">
                                {{ $feature['description'] }}
                            </p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
