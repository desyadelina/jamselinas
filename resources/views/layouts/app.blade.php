<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'JAMSELINAS - Jambore Sepeda Lipat Nasional')</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Inter:wght@400;700&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @theme {
            --color-jamselinas-primary: #0B74B9;
            --color-jamselinas-secondary: #346E97;
            --color-jamselinas-cream: #FFF8EE;
            --color-jamselinas-white: #FCFEFF;
            --color-jamselinas-footer: #B9D9F2;
            --color-jamselinas-text: #0C5F96;
            --color-jamselinas-gradient-start: #FFEDD4;
            --color-jamselinas-gradient-mid: #B2D5F2;
            --color-jamselinas-gradient-end: #B6D7F1;

            --font-sans: Inter, system-ui, sans-serif;
            --font-inter: Inter, system-ui, sans-serif;
            --font-poppins: Poppins, system-ui, sans-serif;
            --font-roboto: Roboto, system-ui, sans-serif;
        }
    </style>
</head>

<body class="@yield('body-class', 'bg-jamselinas-white') font-inter text-jamselinas-text">
    @if (View::hasSection('navbar'))
        @yield('navbar')
    @else
        @include('layouts._navbar')
    @endif

    <main class="@yield('main-class', 'mt-16 mb-16')">
        @yield('content')
    </main>

    @if (!View::hasSection('no-footer'))
        @include('layouts._footer')
    @endif

    <!-- scroll to top vutton -->
    <button id="scrollToTop"
        class="fixed bottom-6 right-6 w-12 h-12 bg-jamselinas-secondary hover:bg-jamselinas-primary text-white rounded-full shadow-lg transition-all duration-300 opacity-0 invisible z-50 flex items-center justify-center"
        aria-label="Scroll to top">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
        </svg>
    </button>

    <script>
        // Scroll to Top functionality
        const scrollToTopBtn = document.getElementById('scrollToTop');

        // Show/hide button based on scroll position
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.remove('opacity-0', 'invisible');
                scrollToTopBtn.classList.add('opacity-100', 'visible');
            } else {
                scrollToTopBtn.classList.add('opacity-0', 'invisible');
                scrollToTopBtn.classList.remove('opacity-100', 'visible');
            }
        });

        // Smooth scroll to top when button is clicked
        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>

</html>
