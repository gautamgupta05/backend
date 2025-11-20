<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $meta_title ?? 'My CMS' }}</title>
    <meta name="description" content="{{ $meta_description ?? '' }}">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">

    {{-- HEADER --}}
    <header class="bg-white shadow">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-blue-600">MyCMS</a>

            <nav class="flex gap-6">
                <a href="/" class="hover:text-blue-600">Home</a>
                <a href="/blog" class="hover:text-blue-600">Blog</a>
                <a href="/about" class="hover:text-blue-600">About</a>
                <a href="/contact" class="hover:text-blue-600">Contact</a>
            </nav>
        </div>
    </header>

    {{-- CONTENT --}}
    <main class="max-w-6xl mx-auto px-4 py-6 flex-grow">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-gray-900 text-white py-6 mt-12">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p>&copy; {{ date('Y') }} MyCMS — All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>
