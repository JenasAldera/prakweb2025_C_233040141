<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>

    <div class="container mx-auto px-4 py-12">
        <!-- Hero Section -->
        <section class="text-center py-20">
            <h1 class="text-5xl font-bold text-gray-800 mb-6">Selamat Datang!</h1>
            <p class="text-xl text-gray-600 mb-8">Website latihan Laravel dengan Tailwind CSS</p>
            <div class="flex gap-4 justify-center">
                <a href="/blog" class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition duration-200 font-semibold">
                    Baca Blog
                </a>
                <a href="/contact" class="bg-gray-600 text-white px-8 py-3 rounded-lg hover:bg-gray-700 transition duration-200 font-semibold">
                    Hubungi Kami
                </a>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-12">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Fitur Utama</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg text-center hover:shadow-xl transition">
                    <div class="text-4xl mb-4">🚀</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Cepat</h3>
                    <p class="text-gray-600">Website yang responsif dan cepat di semua perangkat</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg text-center hover:shadow-xl transition">
                    <div class="text-4xl mb-4">🎨</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Modern</h3>
                    <p class="text-gray-600">Desain modern dengan Tailwind CSS yang elegan</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg text-center hover:shadow-xl transition">
                    <div class="text-4xl mb-4">💪</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Powerful</h3>
                    <p class="text-gray-600">Dibangun dengan Laravel framework yang powerful</p>
                </div>
            </div>
        </section>
    </div>
</x-layout>