<header class="w-full bg-white/95 backdrop-blur-md shadow-lg border-b border-gray-100 sticky top-0 z-50">
    <div class="container mx-auto flex items-center justify-between h-20 px-4">
        <!-- back button -->
        <nav aria-label="Navigation">
            <a href="{{ App\Helpers\NavigationHelper::getBackButtonUrl() }}"
                class="group inline-flex items-center justify-center w-12 h-12 bg-jamselinas-primary rounded-xl shadow-md hover:shadow-lg hover:bg-jamselinas-secondary transition-all duration-300 transform hover:scale-105"
                aria-label="Kembali ke halaman sebelumnya">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 text-white transition-transform duration-300 group-hover:-translate-x-0.5">
                    <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </a>
        </nav>

        <!-- logo -->
        <div class="flex items-center absolute left-1/2 transform -translate-x-1/2">
            <img src="{{ asset('images/small_logo.png') }}" alt="Jamselinas Logo"
                class="w-23 object-contain" />
        </div>

        <!-- space biar balance -->
        <div class="w-12"></div>
    </div>
</header>
