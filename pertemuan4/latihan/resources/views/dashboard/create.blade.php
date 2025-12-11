<x-dashboard-layout>
    <x-slot:title>Buat Post</x-slot:title>

    <div class="mb-4">
        <a href="{{ route('dashboard.posts.index') }}" class="text-blue-600 hover:underline text-sm">← Kembali</a>
    </div>

    <x-posts.form :action="route('dashboard.posts.store')" :categories="$categories" />
</x-dashboard-layout>

