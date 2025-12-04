<x-layout>
    <x-slot:title>
        Categories
    </x-slot:title>

    <div class="container mx-auto px-4 py-12">
        <div class="mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Categories</h1>
            <p class="text-gray-600 text-lg">Jelajahi berbagai kategori konten kami</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            @forelse ($categories as $category)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition hover:-translate-y-1 transform">
                    <div class="bg-gradient-to-br from-blue-500 via-purple-500 to-pink-500 h-32"></div>
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-3">{{ $category->name }}</h2>
                        <div class="flex items-center justify-between">
                            <span class="inline-block bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full font-semibold">
                                {{ $category->posts->count() }} Posts
                            </span>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold text-sm">View →</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-600 text-lg">Belum ada kategori yang tersedia.</p>
                </div>
            @endforelse
        </div>

        <!-- Recent Posts by Category -->
        @forelse ($categories as $category)
            @if ($category->posts->count() > 0)
                <div class="mb-16">
                    <div class="mb-8">
                        <h2 class="text-3xl font-bold text-gray-800 mb-2">{{ $category->name }} Posts</h2>
                        <div class="w-20 h-1 bg-blue-600 rounded"></div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @foreach ($category->posts as $post)
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                                <div class="bg-gradient-to-br from-gray-300 to-gray-400 h-40"></div>
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-gray-800 mb-2 line-clamp-2">{{ $post->title }}</h3>
                                    <p class="text-gray-600 text-sm mb-4">By <span class="font-semibold">{{ $post->author->name }}</span></p>
                                    <p class="text-gray-700 mb-4 line-clamp-2">{{ $post->excerpt }}</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-gray-500 text-xs">{{ $post->created_at->format('M d, Y') }}</span>
                                        <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold text-sm">Read →</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        @empty
            <div class="text-center py-12">
                <p class="text-gray-600 text-lg">Belum ada kategori dengan posts.</p>
            </div>
        @endforelse
    </div>
</x-layout>
