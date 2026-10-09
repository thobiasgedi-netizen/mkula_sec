<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mkula Secondary School')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans flex flex-col min-h-screen">

    <!-- Top Navigation Header -->
    <header class="bg-blue-900 text-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-4 flex flex-col md:flex-row justify-between items-center gap-4">
            <div>
                <a href="{{ route('home') }}" class="text-2xl font-bold tracking-wide">MKULA SECONDARY SCHOOL</a>
                <p class="text-yellow-400 text-xs italic font-semibold">"Strive for better future"</p>
            </div>
            
            <!-- Navigation Links -->
            <nav class="flex flex-wrap items-center gap-5 text-sm font-semibold">
                <a href="{{ route('home') }}" class="hover:text-yellow-400 transition text-yellow-400">Home</a>
                <a href="{{ route('about') }}" class="hover:text-yellow-400 transition">About Us</a>
                <a href="{{ route('news.index') }}" class="hover:text-yellow-400 transition">News & Updates</a>
                <a href="{{ route('joining.index') }}" class="hover:text-yellow-400 transition">Joining Instructions</a>
                <a href="{{ route('results.index') }}" class="hover:text-yellow-400 transition">Exam Results</a>
                <a href="{{ route('contact') }}" class="hover:text-yellow-400 transition">Contact Us</a>
                <a href="/admin" class="bg-yellow-500 hover:bg-yellow-600 text-blue-950 font-bold px-3 py-1.5 rounded shadow transition">
                    Admin Panel
                </a>
            </nav>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-6 text-center text-sm mt-12">
        <p>&copy; {{ date('Y') }} Mkula Secondary School. All rights reserved.</p>
    </footer>

</body>
</html>