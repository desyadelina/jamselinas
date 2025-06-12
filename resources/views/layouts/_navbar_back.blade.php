<header class="w-full bg-white shadow-md">
    <div class="container mx-auto flex items-center justify-between h-24 px-4">
        <nav aria-label="Navigation">
            <a href="{{ url()->previous() }}"
                class="inline-flex items-center justify-center w-16 h-16 bg-[#346E97] rounded-md shadow-md hover:shadow-lg transition-shadow"
                aria-label="Kembali ke halaman sebelumnya">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="w-8 h-8" stroke="white" stroke-width="3">
                    <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" fill="white" stroke="white" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </nav>
        <div class="flex items-center">
            <img src="{{ asset('images/small_logo.png') }}" alt="Jamselinas Logo" class="w-28 object-contain" />
        </div>
        <div class="w-12"></div>
    </div>
</header>
