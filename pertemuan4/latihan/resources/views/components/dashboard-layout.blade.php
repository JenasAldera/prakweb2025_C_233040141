<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Dashboard' }}</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body class="bg-gray-50">
    <nav class="bg-white border-b border-gray-200 px-4 py-3 flex items-center justify-between">
        <div class="flex items-center gap-6">
            <a href="/" class="text-lg font-semibold text-blue-600">Home</a>
            <a href="/dashboard" class="text-gray-700 hover:text-blue-600">Dashboard</a>
            <a href="/dashboard/posts" class="text-gray-700 hover:text-blue-600">Posts</a>
            <a href="/dashboard/categories" class="text-gray-700 hover:text-blue-600">Categories</a>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition">
                Logout
            </button>
        </form>
    </nav>

    <main class="min-h-screen p-6">
        {{ $slot }}
    </main>

    <footer class="bg-white border-t border-gray-200 py-4 text-center text-gray-500 text-sm">
        &copy; {{ date('Y') }} Dashboard.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>

