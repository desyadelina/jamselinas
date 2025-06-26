@extends('layouts.app')

@section('title', 'Layanan Kami - JAMSELINAS XIV 2025')

@section('content')
    <!-- hero section -->
    <section
        class="relative bg-gradient-to-br from-jamselinas-gradient-start via-jamselinas-gradient-mid to-jamselinas-gradient-end py-16 lg:py-24 overflow-hidden">
        <div class="absolute inset-0 bg-white/10"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-jamselinas-primary mb-6 font-poppins">
                    Layanan Kami
                </h1>
                <p class="text-lg md:text-xl text-jamselinas-text/80 leading-relaxed font-inter">
                    Komitmen kami untuk memberikan pelayanan terbaik bagi seluruh peserta <br /><span
                        class="font-semibold">JAMSELINAS XIV 2025</span>
                </p>
            </div>
        </div>
        <!-- decorative elements -->
        <div class="absolute -top-24 -right-24 w-48 h-48 bg-jamselinas-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-48 h-48 bg-jamselinas-secondary/10 rounded-full blur-3xl"></div>
    </section>

    <!-- services grid -->
    <section class="py-16 lg:py-20 bg-jamselinas-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">

                <!-- service 1: event info & reg -->
                <div
                    class="group bg-white rounded-2xl border border-gray-100 hover:border-jamselinas-primary/30 p-6 lg:p-8 shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-2 flex flex-col">
                    <div
                        class="flex items-center justify-center w-16 h-16 bg-gradient-to-br from-jamselinas-primary to-jamselinas-secondary rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h3
                        class="text-xl lg:text-2xl font-bold text-jamselinas-text mb-4 font-poppins group-hover:text-jamselinas-primary transition-colors">
                        Event Information & Registration
                    </h3>
                    <p class="text-gray-600 leading-relaxed font-inter mb-6 flex-grow">
                        Dapatkan informasi lengkap tentang jadwal, lokasi, rute, dan agenda Jamselinas. Kami juga
                        menyediakan layanan pendaftaran online yang mudah dan cepat untuk seluruh peserta.
                    </p>
                    <a href="{{ route('form.pendaftaran') }}"
                        class="inline-flex items-center text-jamselinas-primary font-semibold hover:text-jamselinas-secondary transition-colors group/link mt-auto">
                        Daftar Sekarang
                        <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                <!-- service 2: merch -->
                <div
                    class="group bg-white rounded-2xl border border-gray-100 hover:border-jamselinas-primary/30 p-6 lg:p-8 shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-2 flex flex-col">
                    <div
                        class="flex items-center justify-center w-16 h-16 bg-gradient-to-br from-jamselinas-secondary to-jamselinas-primary rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                    </div>
                    <h3
                        class="text-xl lg:text-2xl font-bold text-jamselinas-text mb-4 font-poppins group-hover:text-jamselinas-primary transition-colors">
                        Merchandise Resmi Jamselinas
                    </h3>
                    <p class="text-gray-600 leading-relaxed font-inter mb-6 flex-grow">
                        Pesan berbagai produk resmi Jamselinas seperti jersey, topi, dan aksesori sepeda lipat eksklusif
                        dari penyelenggara resmi.
                    </p>
                    <a href="#"
                        class="inline-flex items-center text-jamselinas-primary font-semibold hover:text-jamselinas-secondary transition-colors group/link mt-auto">
                        Lihat Katalog
                        <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                <!-- service 3: accomodations & transportation -->
                <div
                    class="group bg-white rounded-2xl border border-gray-100 hover:border-jamselinas-primary/30 p-6 lg:p-8 shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-2 flex flex-col">
                    <div
                        class="flex items-center justify-center w-16 h-16 bg-gradient-to-br from-jamselinas-primary to-jamselinas-secondary rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3
                        class="text-xl lg:text-2xl font-bold text-jamselinas-text mb-4 font-poppins group-hover:text-jamselinas-primary transition-colors">
                        Rekomendasi Akomodasi & Transportasi
                    </h3>
                    <p class="text-gray-600 leading-relaxed font-inter mb-6 flex-grow">
                        Temukan pilihan penginapan dan transportasi terbaik di kota penyelenggara. Kami bantu peserta dari
                        luar kota untuk merencanakan perjalanan dengan nyaman.
                    </p>
                    <a href="#"
                        class="inline-flex items-center text-jamselinas-primary font-semibold hover:text-jamselinas-secondary transition-colors group/link mt-auto">
                        Lihat Rekomendasi
                        <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                <!-- service 4: community support -->
                <div
                    class="group bg-white rounded-2xl border border-gray-100 hover:border-jamselinas-primary/30 p-6 lg:p-8 shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-2 flex flex-col">
                    <div
                        class="flex items-center justify-center w-16 h-16 bg-gradient-to-br from-jamselinas-secondary to-jamselinas-primary rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3
                        class="text-xl lg:text-2xl font-bold text-jamselinas-text mb-4 font-poppins group-hover:text-jamselinas-primary transition-colors">
                        Community & Chapter Support
                    </h3>
                    <p class="text-gray-600 leading-relaxed font-inter mb-6 flex-grow">
                        Hubungkan dirimu dengan komunitas sepeda lipat lokal. Kami menyediakan daftar kontak chapter resmi
                        di berbagai kota yang bisa dihubungi langsung.
                    </p>
                    <a href="#"
                        class="inline-flex items-center text-jamselinas-primary font-semibold hover:text-jamselinas-secondary transition-colors group/link mt-auto">
                        Temukan Chapter
                        <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                <!-- service 5: customer support -->
                <div
                    class="group bg-white rounded-2xl border border-gray-100 hover:border-jamselinas-primary/30 p-6 lg:p-8 shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-2 flex flex-col">
                    <div
                        class="flex items-center justify-center w-16 h-16 bg-gradient-to-br from-jamselinas-primary to-jamselinas-secondary rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" viewBox="0 0 24 24">
                            <g fill="none" fill-rule="evenodd">
                                <path
                                    d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                <path fill="currentColor"
                                    d="M5 9a7 7 0 0 1 14 0v1.035c1.696.243 3 1.702 3 3.465v.25a3.25 3.25 0 0 1-3.332 3.248c-.74 2.12-2.622 3.549-4.653 3.911c-.47.172-1.026.091-1.515.091a1.5 1.5 0 0 1 0-3h1a1.5 1.5 0 0 1 1.207.609C16.003 17.992 17 16.689 17 15V9A5 5 0 0 0 7 9v6.25A1.75 1.75 0 0 1 5.25 17A3.25 3.25 0 0 1 2 13.75v-.25a3.5 3.5 0 0 1 3-3.465zm0 3.085A1.5 1.5 0 0 0 4 13.5v.25c0 .605.43 1.11 1 1.225zm14 0v2.89c.57-.116 1-.62 1-1.225v-.25a1.5 1.5 0 0 0-1-1.415" />
                            </g>
                        </svg>
                    </div>
                    <h3
                        class="text-xl lg:text-2xl font-bold text-jamselinas-text mb-4 font-poppins group-hover:text-jamselinas-primary transition-colors">
                        Customer Support
                    </h3>
                    <p class="text-gray-600 leading-relaxed font-inter mb-6 flex-grow">
                        Ada pertanyaan? Tim kami siap membantu melalui email, WhatsApp, atau formulir kontak yang tersedia.
                    </p>
                    <a href="{{ route('hubungi-kami') }}"
                        class="inline-flex items-center text-jamselinas-primary font-semibold hover:text-jamselinas-secondary transition-colors group/link mt-auto">
                        Hubungi Kami
                        <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                <!-- service 6: sponsor & collab -->
                <div
                    class="group bg-white rounded-2xl border border-gray-100 hover:border-jamselinas-primary/30 p-6 lg:p-8 shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-2 flex flex-col">
                    <div
                        class="flex items-center justify-center w-16 h-16 bg-gradient-to-br from-jamselinas-secondary to-jamselinas-primary rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" viewBox="0 0 48 48">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="4">
                                <path d="m24 40l12-12l-4 4l-4 4zm0 0L4 20L16 8l8 8" />
                                <path d="M17 23L32 8l12 12l-8 8l-8-8l-6 6zm0 0l7-7m4 20l-3-3m7-1l-3-3" />
                            </g>
                        </svg>
                    </div>
                    <h3
                        class="text-xl lg:text-2xl font-bold text-jamselinas-text mb-4 font-poppins group-hover:text-jamselinas-primary transition-colors">
                        Informasi Sponsor & Kolaborasi
                    </h3>
                    <p class="text-gray-600 leading-relaxed font-inter mb-6 flex-grow">
                        Tertarik menjadi sponsor atau kolaborator? Kami terbuka untuk kerja sama yang mendukung semangat
                        bersepeda dan gaya hidup sehat.
                    </p>
                    <a href="#"
                        class="inline-flex items-center text-jamselinas-primary font-semibold hover:text-jamselinas-secondary transition-colors group/link mt-auto">
                        Jadi Partner
                        <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA section -->
    <section
        class="py-16 lg:py-20 bg-gradient-to-r from-jamselinas-primary to-jamselinas-secondary relative overflow-hidden">
        <img src="{{ asset('images/background/assets_1.png') }}" alt=""
            class="absolute inset-0 w-full h-full object-cover pointer-events-none select-none" />
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6 font-poppins">
                    Siap Bergabung dengan JAMSELINAS XIV 2025?
                </h2>
                <p class="text-lg md:text-xl text-white/90 mb-8 font-inter leading-relaxed">
                    Jangan lewatkan kesempatan untuk menjadi bagian dari festival sepeda lipat terbesar di Indonesia.
                    Daftarkan diri Anda sekarang!
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="{{ route('form.pendaftaran') }}"
                        class="inline-flex items-center px-8 py-4 bg-white text-jamselinas-primary font-bold text-lg rounded-xl hover:bg-jamselinas-cream hover:text-jamselinas-secondary transition-all duration-300 hover:shadow-lg transform hover:scale-105">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        Daftar Sekarang
                    </a>
                    <a href="{{ route('hubungi-kami') }}"
                        class="inline-flex items-center px-8 py-4 border-2 border-white text-white hover:bg-white hover:text-jamselinas-primary font-bold text-lg rounded-xl transition-all duration-300 hover:shadow-lg transform hover:scale-105">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                        Ada Pertanyaan?
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- statistic section -->
    <section class="py-16 lg:py-20 bg-jamselinas-white" id="statistics-section">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-jamselinas-primary mb-4 font-poppins">
                    Mengapa Memilih Layanan Kami?
                </h2>
                <p class="text-lg text-jamselinas-text/80 font-inter max-w-2xl mx-auto">
                    Pengalaman bertahun-tahun dalam menyelenggarakan event sepeda lipat nasional
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 lg:gap-8">
                <div class="text-center group">
                    <div
                        class="bg-gradient-to-br from-jamselinas-primary to-jamselinas-secondary w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-2xl font-bold text-white count-up" data-target="14">0</span>
                    </div>
                    <h3 class="text-xl font-bold text-jamselinas-text mb-1 font-poppins">Tahun</h3>
                    <p class="text-gray-600 font-inter">Pengalaman</p>
                </div>

                <div class="text-center group">
                    <div
                        class="bg-gradient-to-br from-jamselinas-secondary to-jamselinas-primary w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-2xl font-bold text-white count-up" data-target="3000">0</span>
                        <span class="text-2xl font-bold text-white">+</span>
                    </div>
                    <h3 class="text-xl font-bold text-jamselinas-text mb-1 font-poppins">Peserta</h3>
                    <p class="text-gray-600 font-inter">Terdaftar</p>
                </div>

                <div class="text-center group">
                    <div
                        class="bg-gradient-to-br from-jamselinas-primary to-jamselinas-secondary w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-2xl font-bold text-white count-up" data-target="637">0</span>
                    </div>
                    <h3 class="text-xl font-bold text-jamselinas-text mb-1 font-poppins">Komunitas</h3>
                    <p class="text-gray-600 font-inter">Tergabung</p>
                </div>

                <div class="text-center group">
                    <div
                        class="bg-gradient-to-br from-jamselinas-secondary to-jamselinas-primary w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-2xl font-bold text-white">24/7</span>
                    </div>
                    <h3 class="text-xl font-bold text-jamselinas-text mb-1 font-poppins">Support</h3>
                    <p class="text-gray-600 font-inter">Tersedia</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // func to animate counting
            function animateCounter(element, target, duration = 800) {
                let start = 0;
                const increment = target / (duration / 16); // 60fps

                const timer = setInterval(() => {
                    start += increment;
                    if (start >= target) {
                        // format the final number based on target value
                        if (target >= 1000) {
                            element.textContent = Math.floor(target / 1000) + 'K';
                        } else {
                            element.textContent = target;
                        }
                        clearInterval(timer);
                    } else {
                        element.textContent = Math.floor(start);
                    }
                }, 16);
            }

            // intersection observer for scroll trigger
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // start animation when section is visible
                        const counters = entry.target.querySelectorAll('.count-up');
                        counters.forEach(counter => {
                            const target = parseInt(counter.getAttribute('data-target'));
                            animateCounter(counter, target);
                        });

                        // unobserve after animation starts to prevent multiple triggers
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5 // trigger when 50% of section is visible
            });

            // observe the statistics section
            const statisticsSection = document.getElementById('statistics-section');
            if (statisticsSection) {
                observer.observe(statisticsSection);
            }
        });
    </script>
@endsection
