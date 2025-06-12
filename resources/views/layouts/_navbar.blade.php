<header class="w-full bg-white shadow-md fixed top-0 left-0 z-50">
    <div class="container mx-auto flex items-center justify-between h-24 px-4">
        <div class="flex items-center">
            <a href="{{ route('landing') }}">
                <img src="{{ asset('images/small_logo.png') }}" alt="Jamselinas Logo" class="w-26 object-contain" />
            </a>
        </div>
        <nav class="hidden lg:flex gap-18">
            <a href="{{ route('landing') }}#hero"
                class="text-jamselinas-primary font-roboto text-[30px] hover:text-jamselinas-secondary transition">Home</a>
            <a href="{{ route('landing') }}#about"
                class="text-jamselinas-primary font-roboto text-[30px] hover:text-jamselinas-secondary transition">About
                Us</a>
            <a href="{{ route('landing') }}#riders"
                class="text-jamselinas-primary font-roboto text-[30px] hover:text-jamselinas-secondary transition">Riders
                Story</a>
            <a href="{{ route('landing') }}#gallery"
                class="text-jamselinas-primary font-roboto text-[30px] hover:text-jamselinas-secondary transition">Gallery</a>
        </nav>
        <a href="{{ route('form.login') }}"
            class="hidden lg:flex items-center px-6 py-2 rounded-xl border border-jamselinas-secondary text-jamselinas-secondary hover:bg-jamselinas-secondary hover:text-white font-roboto text-[25px] cursor-pointer shadow transition-colors duration-200">
            Masuk
        </a>
        <button class="lg:hidden p-2" id="mobileMenuToggle">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div class="lg:hidden hidden bg-white border-t shadow-lg" id="mobileMenu">
        <nav class="container mx-auto px-4 py-4 flex flex-col gap-4">
            <a href="{{ route('landing') }}#hero"
                class="text-jamselinas-primary font-roboto text-xl hover:text-jamselinas-secondary transition">Home</a>
            <a href="{{ route('landing') }}#about"
                class="text-jamselinas-primary font-roboto text-xl hover:text-jamselinas-secondary transition">About
                Us</a>
            <a href="{{ route('landing') }}#riders"
                class="text-jamselinas-primary font-roboto text-xl hover:text-jamselinas-secondary transition">Riders
                Story</a>
            <a href="{{ route('landing') }}#gallery"
                class="text-jamselinas-primary font-roboto text-xl hover:text-jamselinas-secondary transition">Gallery</a>
            <a href="{{ route('form.login') }}"
                class="inline-flex items-center justify-center px-6 py-2 rounded-xl border border-jamselinas-secondary text-jamselinas-secondary hover:bg-jamselinas-secondary hover:text-white font-roboto text-lg transition-colors duration-200 mt-2">
                Masuk
            </a>
        </nav>
    </div>

    <script>
        // Mobile menu toggle
        document.getElementById('mobileMenuToggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scroll for anchor links
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('a[href*="#"]');

            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    const currentPage = window.location.pathname;

                    // If link contains # and we're on the same page
                    if (href.includes('#')) {
                        const [page, section] = href.split('#');

                        // If we're already on the target page or it's same page
                        if (!page || currentPage === page || (page === '{{ route('landing') }}' &&
                                currentPage === '/')) {
                            e.preventDefault();
                            const targetElement = document.getElementById(section);
                            if (targetElement) {
                                const headerHeight = 96; // h-24 = 96px
                                const targetPosition = targetElement.offsetTop - headerHeight;

                                window.scrollTo({
                                    top: targetPosition,
                                    behavior: 'smooth'
                                });

                                // Close mobile menu if open
                                document.getElementById('mobileMenu').classList.add('hidden');
                            }
                        }
                    }
                });
            });
        });
    </script>
</header>
