<section class="bg-gradient-to-b from-jamselinas-gradient-mid to-jamselinas-white py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="font-bold font-poppins text-3xl lg:text-5xl text-jamselinas-primary mb-8">ABOUT US</h2>
        </div>

        <!-- mobile/tablet layout -->
        <div class="lg:hidden">
            <!-- text section first -->
            <div class="flex flex-col gap-6 font-inter mb-8">
                <p class="text-lg text-justify leading-relaxed">
                    <span class="font-bold">JAMSELINAS</span> (Jambore Sepeda Lipat Nasional) adalah event silaturrahmi
                    bagi para pecinta sepeda lipat di Indonesia, digagas dan diadakan oleh Indonesia Folding Bike (IDFB)
                    yang telah tumbuh menjadi wadah komunitas sepeda lipat terbesar di Indonesia dan sudah berusia 17
                    tahun untuk keberadaannya.
                </p>
                <p class="text-lg text-justify leading-relaxed">
                    Jamselinas dalam penamaan event tahunan ini dilindungi oleh produk hukum sebagaimana yang terdaftar
                    pada Surat Referensi Label Merek Direktorat Kekayaan Intelektual Kementerian Hukum dan HAM Republik
                    Indonesia Nomor: JID2024102926 tentang JAMSELINAS (Jambore Sepeda Lipat Nasional) - IDFB. Jamselinas
                    telah terselenggara sebanyak 12 kali dan tahun ini akan diadakan di Kota Malang dengan komunitas
                    Ngalam Folding Bike (NFB) sebagai penyelenggaranya.
                </p>
                <p class="text-lg text-justify leading-relaxed">
                    Tujuan event ini adalah untuk mensosialisasikan penggunaan sepeda sebagai alat transportasi yang
                    sehat dan ramah lingkungan serta mendukung pariwisata dan ekonomi kreatif di Indonesia. Kota Malang
                    telah bersiap sebagai tuan rumah dengan infrastruktur yang memadai dan akses transportasi yang
                    mudah.
                </p>
            </div>

            <!-- images slider -->
            <div class="relative overflow-hidden">
                <div class="flex transition-transform duration-300 ease-in-out" id="aboutSlider">
                    <div class="w-full flex-shrink-0 flex justify-center">
                        <img src="{{ asset('images/about/image-1.png') }}" alt="About Jamselinas 1"
                            class="w-[280px] h-[400px] object-cover rounded-2xl shadow">
                    </div>
                    <div class="w-full flex-shrink-0 flex justify-center">
                        <img src="{{ asset('images/about/image-2.png') }}" alt="About Jamselinas 2"
                            class="w-[280px] h-[400px] object-cover rounded-2xl shadow">
                    </div>
                    <div class="w-full flex-shrink-0 flex justify-center">
                        <img src="{{ asset('images/about/image-3.png') }}" alt="About Jamselinas 3"
                            class="w-[280px] h-[400px] object-cover rounded-2xl shadow">
                    </div>
                </div>

                <!-- nav buttons -->
                <button
                    class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-jamselinas-primary rounded-full w-10 h-10 flex items-center justify-center shadow transition"
                    onclick="slideAbout(-1)">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </button>
                <button
                    class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-jamselinas-primary rounded-full w-10 h-10 flex items-center justify-center shadow transition"
                    onclick="slideAbout(1)">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>

                <!-- dots indicator -->
                <div class="flex justify-center mt-4 gap-2">
                    <button class="w-3 h-3 rounded-full bg-jamselinas-primary transition" onclick="goToSlide(0)"
                        id="dot-0"></button>
                    <button class="w-3 h-3 rounded-full bg-gray-300 transition" onclick="goToSlide(1)"
                        id="dot-1"></button>
                    <button class="w-3 h-3 rounded-full bg-gray-300 transition" onclick="goToSlide(2)"
                        id="dot-2"></button>
                </div>
            </div>
        </div>

        <!-- desktop layout -->
        <div class="hidden lg:grid grid-cols-[auto_1fr] gap-8">
            <!-- imgs section -->
            <div class="flex flex-row items-center justify-center gap-6">
                <div class="flex flex-col gap-6">
                    <img src="{{ asset('images/about/image-1.png') }}" alt="About Jamselinas 1"
                        class="w-[225px] h-[356px] object-cover rounded-2xl shadow">
                    <img src="{{ asset('images/about/image-3.png') }}" alt="About Jamselinas 3"
                        class="w-[225px] h-[356px] object-cover rounded-2xl shadow">
                </div>
                <div class="mt-12">
                    <img src="{{ asset('images/about/image-2.png') }}" alt="About Jamselinas 2"
                        class="w-[225px] h-[356px] object-cover rounded-2xl shadow">
                </div>
            </div>

            <!-- text section -->
            <div class="flex flex-col gap-6 font-inter">
                <p class="text-[30px] text-justify leading-relaxed">
                    <span class="font-bold">JAMSELINAS</span> (Jambore Sepeda Lipat Nasional) adalah event silaturrahmi
                    bagi para pecinta sepeda lipat di Indonesia, digagas dan diadakan oleh Indonesia Folding Bike (IDFB)
                    yang telah tumbuh menjadi wadah komunitas sepeda lipat terbesar di Indonesia dan sudah berusia 17
                    tahun untuk keberadaannya.
                </p>
                <p class="text-[30px] text-justify leading-relaxed ml-16">
                    Jamselinas dalam penamaan event tahunan ini dilindungi oleh produk hukum sebagaimana yang terdaftar
                    pada Surat Referensi Label Merek Direktorat Kekayaan Intelektual Kementerian Hukum dan HAM Republik
                    Indonesia Nomor: JID2024102926 tentang JAMSELINAS (Jambore Sepeda Lipat Nasional) - IDFB. Jamselinas
                    telah terselenggara sebanyak 12 kali dan tahun ini akan diadakan di Kota Malang dengan komunitas
                    Ngalam Folding Bike (NFB) sebagai penyelenggaranya.
                </p>
                <p class="text-[30px] text-justify leading-relaxed ml-16">
                    Tujuan event ini adalah untuk mensosialisasikan penggunaan sepeda sebagai alat transportasi yang
                    sehat dan ramah lingkungan serta mendukung pariwisata dan ekonomi kreatif di Indonesia. Kota Malang
                    telah bersiap sebagai tuan rumah dengan infrastruktur yang memadai dan akses transportasi yang
                    mudah.
                </p>
            </div>
        </div>
    </div>

    <script>
        let currentSlide = 0;
        const totalSlides = 3;

        function slideAbout(direction) {
            currentSlide += direction;
            if (currentSlide < 0) currentSlide = totalSlides - 1;
            if (currentSlide >= totalSlides) currentSlide = 0;
            updateSlider();
        }

        function goToSlide(index) {
            currentSlide = index;
            updateSlider();
        }

        function updateSlider() {
            const slider = document.getElementById('aboutSlider');
            slider.style.transform = `translateX(-${currentSlide * 100}%)`;

            // update dots
            for (let i = 0; i < totalSlides; i++) {
                const dot = document.getElementById(`dot-${i}`);
                if (i === currentSlide) {
                    dot.classList.remove('bg-gray-300');
                    dot.classList.add('bg-jamselinas-primary');
                } else {
                    dot.classList.remove('bg-jamselinas-primary');
                    dot.classList.add('bg-gray-300');
                }
            }
        }

        // autoslide every 5 seconds
        setInterval(() => {
            slideAbout(1);
        }, 5000);
    </script>
</section>
