<x-dashboard-layout>
    <x-slot:title>Detail Post</x-slot:title>

    <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex items-center justify-between mb-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">{{ $post->title }}</h1>
                <p class="text-sm text-gray-500 mt-1">
                    {{ $post->author->name ?? 'Unknown' }} · {{ $post->created_at?->format('d M Y') }} ·
                    <span class="font-medium text-blue-600">{{ $post->category->name ?? '-' }}</span>
                </p>
            </div>
            <a href="{{ route('dashboard.posts.index') }}"
               class="text-sm text-blue-600 hover:underline">← Kembali</a>
        </div>

        @php $cover = $post->image ? asset('storage/' . $post->image) : asset('images/preview.jpeg'); @endphp
        <div class="mb-6">
            <img src="{{ $cover }}" alt="{{ $post->title }}" class="w-full max-h-96 object-cover rounded-lg">
        </div>

        <div class="prose max-w-none">
            {!! nl2br(e($post->body)) !!}
        </div>
    </div>
</x-dashboard-layout>

