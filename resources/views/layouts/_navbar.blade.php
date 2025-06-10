<header class="w-full bg-white shadow-md fixed top-0 left-0 z-50">
    <div class="container mx-auto flex items-center justify-between h-24 px-4">
        <div class="flex items-center">
            <img src="{{ asset('images/small_logo.png') }}" alt="Jamselinas Logo" class="w-26 object-contain" />
        </div>
        <nav class="hidden lg:flex gap-18">
            <a href="#"
                class="text-jamselinas-primary font-roboto text-[30px] hover:text-jamselinas-secondary transition">Home</a>
            <a href="#"
                class="text-jamselinas-primary font-roboto text-[30px] hover:text-jamselinas-secondary transition">Event
                Guide</a>
            <a href="#"
                class="text-jamselinas-primary font-roboto text-[30px] hover:text-jamselinas-secondary transition">Layanan
                Kami</a>
            <a href="#"
                class="text-jamselinas-primary font-roboto text-[30px] hover:text-jamselinas-secondary transition">Hubungi
                Kami</a>
        </nav>
        <button
            class="hidden lg:flex items-center px-6 py-2 rounded-xl border border-jamselinas-secondary text-jamselinas-secondary hover:bg-jamselinas-secondary hover:text-white font-roboto text-[25px] cursor-pointer shadow transition-colors duration-200">
            Masuk
        </button>
        <button class="lg:hidden p-2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </div>
</header>
