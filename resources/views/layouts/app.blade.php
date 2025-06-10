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

<body class="bg-jamselinas-cream font-inter text-jamselinas-text">
    @include('layouts._navbar')
    <main>
        @yield('content')
    </main>
    @include('layouts._footer')
</body>

</html>
