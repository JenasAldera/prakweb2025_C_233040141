<x-layout>
    <x-slot:title>
        {{ $post->title }}
    </x-slot:title>

    <div class="container mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow p-6">
            <div class="mb-4 flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">
                        {{ $post->author->name ?? 'Unknown' }} · {{ $post->created_at?->format('d M Y') }}
                    </p>
                    <span class="inline-flex mt-2 px-3 py-1 text-xs font-semibold bg-blue-100 text-blue-800 rounded-full">
                        {{ $post->category->name ?? '-' }}
                    </span>
                </div>
                <a href="{{ route('posts.index') }}" class="text-sm text-blue-600 hover:underline">← Kembali</a>
            </div>

            <h1 class="text-3xl font-bold text-gray-900 mb-6">{{ $post->title }}</h1>

            @php $cover = $post->image ? asset('storage/' . $post->image) : asset('images/preview.jpeg'); @endphp
            <div class="mb-6">
                <img src="{{ $cover }}" alt="{{ $post->title }}" class="w-full max-h-112 object-cover rounded-lg">
            </div>

            <div class="prose max-w-none text-gray-800 leading-relaxed">
                {!! nl2br(e($post->body)) !!}
            </div>
        </div>
    </div>
</x-layout>

