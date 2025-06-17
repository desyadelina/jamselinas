<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel - JAMSELINAS XIV 2025')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 lg:overflow-hidden">
    <div class="flex h-screen">
        @include('components.admin.sidebar')
        
        <!-- Main Content Area -->
        <main class="flex-1 flex flex-col min-w-0 lg:ml-0" role="main">
            <!-- Mobile Header -->
            <div class="lg:hidden bg-white shadow-sm border-b border-gray-200 p-4">
                <h1 class="text-xl font-semibold text-jamselinas-primary ml-16">@yield('page-title', 'Admin Panel')</h1>
            </div>
            
            <!-- Content -->
            <div class="flex-1 overflow-y-auto p-4 lg:p-6">
                @yield('content')
            </div>
        </main>
    </div>
    @stack('scripts')
</body>
</html>