<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body>
    <nav class="bg-blue-600 text-white p-4 flex gap-6">
        <a href="/" class="hover:bg-blue-700 px-3 py-2 rounded transition">Home</a>
        <a href="/about" class="hover:bg-blue-700 px-3 py-2 rounded transition">About</a>
        <a href="/posts" class="hover:bg-blue-700 px-3 py-2 rounded transition">Posts</a>
        <a href="/categories" class="hover:bg-blue-700 px-3 py-2 rounded transition">Categories</a>
        <a href="/blog" class="hover:bg-blue-700 px-3 py-2 rounded transition">Blog</a>
        <a href="/contact" class="hover:bg-blue-700 px-3 py-2 rounded transition">Contact</a>
    </nav>

    <main class="min-h-screen">
        {{ $slot }}
    </main>

    <footer class="bg-gray-800 text-white mt-12 py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-3 gap-8 mb-8">
                <div>
                    <h3 class="font-bold text-lg mb-4">About Us</h3>
                    <p class="text-gray-400">Latihan membuat website sederhana dengan Laravel dan Tailwind CSS.</p>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-4">Quick Links</h3>
                    <ul class="text-gray-400 space-y-2">
                        <li><a href="/" class="hover:text-white transition">Home</a></li>
                        <li><a href="/about" class="hover:text-white transition">About</a></li>
                        <li><a href="/posts" class="hover:text-white transition">Posts</a></li>
                        <li><a href="/categories" class="hover:text-white transition">Categories</a></li>
                        <li><a href="/blog" class="hover:text-white transition">Blog</a></li>
                        <li><a href="/contact" class="hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-4">Contact Info</h3>
                    <ul class="text-gray-400 space-y-2">
                        <li>Email: jenasaldera1425@gmail.com</li>
                        <li>Phone: +62 812 345 678 90</li>
                        <li>Address: jl jalan no 420</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Latihan Website. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>