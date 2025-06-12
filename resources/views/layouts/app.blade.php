<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'JAMSELINAS - Jambore Sepeda Lipat Nasional')</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Inter:wght@400;700&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="@yield('body-class', 'bg-jamselinas-white') font-inter text-jamselinas-text">
    @unless(View::hasSection('no-navbar'))
        @if (View::hasSection('navbar'))
            @yield('navbar')
        @else
            @include('layouts._navbar')
        @endif
    @endunless

    <main class="@yield('main-class', View::hasSection('no-navbar') ? '' : 'mt-16 mb-16')">
        @yield('content')
    </main>

    @unless(View::hasSection('no-footer'))
        @include('layouts._footer')
    @endunless

    @unless(View::hasSection('no-scroll-button'))
        <!-- scroll to top button -->
        <button id="scrollToTop"
            class="fixed bottom-6 right-6 w-12 h-12 bg-jamselinas-secondary hover:bg-jamselinas-primary text-white rounded-full shadow-lg transition-all duration-300 opacity-0 invisible z-50 flex items-center justify-center"
            aria-label="Scroll to top">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
            </svg>
        </button>

        <script>
            // scroll to top functionality
            const scrollToTopBtn = document.getElementById('scrollToTop');

            // show/hide button based on scroll position
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    scrollToTopBtn.classList.remove('opacity-0', 'invisible');
                    scrollToTopBtn.classList.add('opacity-100', 'visible');
                } else {
                    scrollToTopBtn.classList.add('opacity-0', 'invisible');
                    scrollToTopBtn.classList.remove('opacity-100', 'visible');
                }
            });

            // smooth scroll to top when button is clicked
            scrollToTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        </script>
    @endunless

    @stack('scripts')
</body>

</html>