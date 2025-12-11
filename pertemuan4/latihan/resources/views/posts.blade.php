<x-layout>
    <x-slot:title>
        Posts
    </x-slot:title>

    <div class="container mx-auto px-4 py-12">
        <div class="mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">All Posts</h1>
            <p class="text-gray-600 text-lg">Baca semua artikel dan konten dari penulis kami</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($post as $item)
                <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="h-48 bg-gray-100">
                        @php $thumb = $item->image ? asset('storage/' . $item->image) : asset('images/preview.jpeg'); @endphp
                        <img src="{{ $thumb }}" alt="{{ $item->title }}" class="w-full h-48 object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="inline-block bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full font-semibold">
                                {{ $item->category->name }}
                            </span>
                            <span class="text-gray-500 text-sm">
                                {{ $item->created_at->format('M d, Y') }}
                            </span>
                        </div>
                        <h2 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2">{{ $item->title }}</h2>
                        <p class="text-gray-700 mb-4 line-clamp-3">{{ $item->excerpt }}</p>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 text-sm">By {{ $item->author->name }}</span>
                            <a href="{{ route('posts.show', $item) }}" class="text-blue-600 hover:text-blue-800 font-semibold text-sm">Read More →</a>
                        </div>
                    </div>
                </article>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-600 text-lg">Belum ada posts yang tersedia.</p>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>
