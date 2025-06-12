<header class="w-full bg-white/95 backdrop-blur-md shadow-lg border-b border-gray-100 fixed top-0 left-0 z-50">
    <div class="container mx-auto flex items-center justify-between h-24 px-4">
        <div class="flex items-center">
            <a href="{{ route('landing') }}" class="transform hover:scale-105 transition-transform duration-200">
                <img src="{{ asset('images/small_logo.png') }}" alt="Jamselinas Logo" class="w-26 object-contain" />
            </a>
        </div>

        <!-- desktop nav -->
        <nav class="hidden lg:flex gap-16 items-center">
            <a href="{{ route('landing') }}"
                class="nav-link relative text-jamselinas-primary font-roboto text-[28px] hover:text-jamselinas-secondary transition-all duration-300 group"
                data-route="landing">
                Home
                <div
                    class="absolute -bottom-3 left-1/2 transform -translate-x-1/2 w-2 h-2 bg-jamselinas-secondary rounded-full opacity-0 scale-0 transition-all duration-300 group-hover:opacity-100 group-hover:scale-100">
                </div>
            </a>

            <a href="{{ route('event-guide') }}"
                class="nav-link relative text-jamselinas-primary font-roboto text-[28px] hover:text-jamselinas-secondary transition-all duration-300 group"
                data-route="event-guide">
                Event Guide
                <div
                    class="absolute -bottom-3 left-1/2 transform -translate-x-1/2 w-2 h-2 bg-jamselinas-secondary rounded-full opacity-0 scale-0 transition-all duration-300 group-hover:opacity-100 group-hover:scale-100">
                </div>
            </a>

            <a href="{{ route('layanan-kami') }}"
                class="nav-link relative text-jamselinas-primary font-roboto text-[28px] hover:text-jamselinas-secondary transition-all duration-300 group"
                data-route="layanan-kami">
                Layanan Kami
                <div
                    class="absolute -bottom-3 left-1/2 transform -translate-x-1/2 w-2 h-2 bg-jamselinas-secondary rounded-full opacity-0 scale-0 transition-all duration-300 group-hover:opacity-100 group-hover:scale-100">
                </div>
            </a>

            <a href="{{ route('hubungi-kami') }}"
                class="nav-link relative text-jamselinas-primary font-roboto text-[28px] hover:text-jamselinas-secondary transition-all duration-300 group"
                data-route="hubungi-kami">
                Hubungi Kami
                <div
                    class="absolute -bottom-3 left-1/2 transform -translate-x-1/2 w-2 h-2 bg-jamselinas-secondary rounded-full opacity-0 scale-0 transition-all duration-300 group-hover:opacity-100 group-hover:scale-100">
                </div>
            </a>
        </nav>

        <!-- login button -->
        <a href="{{ route('form.login') }}"
            class="hidden lg:flex items-center px-6 py-2 rounded-xl border-2 border-jamselinas-secondary text-jamselinas-secondary hover:bg-jamselinas-secondary hover:text-white font-roboto text-[24px] transition-all duration-300 hover:shadow-lg transform hover:scale-105">
            Masuk
        </a>

        <!-- mobile menu toggle -->
        <button class="lg:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors duration-200" id="mobileMenuToggle">
            <svg class="w-6 h-6 text-jamselinas-primary transition-transform duration-200" id="menuIcon" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </div>

    <!-- mobile menu -->
    <div class="lg:hidden bg-white/95 backdrop-blur-md border-t border-gray-100 shadow-lg overflow-hidden transition-all duration-300 max-h-0"
        id="mobileMenu">
        <nav class="container mx-auto px-4 py-6 flex flex-col gap-2">
            <a href="{{ route('landing') }}"
                class="mobile-nav-link flex items-center gap-3 px-4 py-3 text-jamselinas-primary font-roboto text-xl hover:text-jamselinas-secondary hover:bg-gray-50 rounded-lg transition-all duration-300 transform hover:translate-x-2"
                data-route="landing">
                <div class="w-2 h-2 bg-jamselinas-secondary rounded-full opacity-0 scale-0 transition-all duration-300">
                </div>
                Home
            </a>

            <a href="{{ route('event-guide') }}"
                class="mobile-nav-link flex items-center gap-3 px-4 py-3 text-jamselinas-primary font-roboto text-xl hover:text-jamselinas-secondary hover:bg-gray-50 rounded-lg transition-all duration-300 transform hover:translate-x-2"
                data-route="event-guide">
                <div class="w-2 h-2 bg-jamselinas-secondary rounded-full opacity-0 scale-0 transition-all duration-300">
                </div>
                Event Guide
            </a>

            <a href="{{ route('layanan-kami') }}"
                class="mobile-nav-link flex items-center gap-3 px-4 py-3 text-jamselinas-primary font-roboto text-xl hover:text-jamselinas-secondary hover:bg-gray-50 rounded-lg transition-all duration-300 transform hover:translate-x-2"
                data-route="layanan-kami">
                <div class="w-2 h-2 bg-jamselinas-secondary rounded-full opacity-0 scale-0 transition-all duration-300">
                </div>
                Layanan Kami
            </a>

            <a href="{{ route('hubungi-kami') }}"
                class="mobile-nav-link flex items-center gap-3 px-4 py-3 text-jamselinas-primary font-roboto text-xl hover:text-jamselinas-secondary hover:bg-gray-50 rounded-lg transition-all duration-300 transform hover:translate-x-2"
                data-route="hubungi-kami">
                <div class="w-2 h-2 bg-jamselinas-secondary rounded-full opacity-0 scale-0 transition-all duration-300">
                </div>
                Hubungi Kami
            </a>

            <a href="{{ route('form.login') }}"
                class="inline-flex items-center justify-center px-6 py-2 mt-4 rounded-xl border-2 border-jamselinas-secondary text-jamselinas-secondary hover:bg-jamselinas-secondary hover:text-white font-roboto text-lg transition-all duration-300 hover:shadow-lg transform hover:scale-105">
                Masuk
            </a>
        </nav>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentRoute = '{{ Route::currentRouteName() }}';
            const navLinks = document.querySelectorAll('.nav-link');
            const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

            // set active state for desktop menu
            navLinks.forEach(link => {
                if (link.dataset.route === currentRoute) {
                    link.classList.add('text-jamselinas-secondary', 'font-semibold');
                    const dot = link.querySelector('div');
                    dot.classList.add('opacity-100', 'scale-100');
                    dot.classList.remove('opacity-0', 'scale-0');
                }
            });

            // set active state for mobile menu
            mobileNavLinks.forEach(link => {
                if (link.dataset.route === currentRoute) {
                    link.classList.add('text-jamselinas-secondary', 'bg-gray-50', 'font-semibold',
                        'translate-x-2');
                    const dot = link.querySelector('div');
                    dot.classList.add('opacity-100', 'scale-100');
                    dot.classList.remove('opacity-0', 'scale-0');
                }
            });

            // toggle menu mobile + smooth animation
            const mobileMenuToggle = document.getElementById('mobileMenuToggle');
            const mobileMenu = document.getElementById('mobileMenu');
            const menuIcon = document.getElementById('menuIcon');

            mobileMenuToggle.addEventListener('click', function() {
                const isHidden = mobileMenu.style.maxHeight === '0px' || !mobileMenu.style.maxHeight;

                if (isHidden) {
                    mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
                    menuIcon.style.transform = 'rotate(90deg)';
                } else {
                    mobileMenu.style.maxHeight = '0px';
                    menuIcon.style.transform = 'rotate(0deg)';
                }
            });

            // close mobile menu ketika clicking area luar
            document.addEventListener('click', function(event) {
                if (!mobileMenu.contains(event.target) && !mobileMenuToggle.contains(event.target)) {
                    mobileMenu.style.maxHeight = '0px';
                    menuIcon.style.transform = 'rotate(0deg)';
                }
            });

            // close mobile menu ketika clicking nav links
            mobileNavLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileMenu.style.maxHeight = '0px';
                    menuIcon.style.transform = 'rotate(0deg)';
                });
            });
        });
    </script>
</header>
