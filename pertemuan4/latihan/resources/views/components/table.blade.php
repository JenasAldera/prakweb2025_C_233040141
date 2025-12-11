@props(['posts'])

<div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">No</th>
                <th scope="col" class="px-6 py-3">Image</th>
                <th scope="col" class="px-6 py-3">Title</th>
                <th scope="col" class="px-6 py-3">Author</th>
                <th scope="col" class="px-6 py-3">Category</th>
                <th scope="col" class="px-6 py-3">Published At</th>
                <th scope="col" class="px-6 py-3 text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4">
                        {{ $loop->iteration + ($posts->firstItem() ? $posts->firstItem() - 1 : 0) }}
                    </td>
                    <td class="px-6 py-4">
                        @php $thumb = $post->image ? asset('storage/' . $post->image) : asset('images/preview.jpeg'); @endphp
                        <img src="{{ $thumb }}" alt="thumb {{ $post->title }}" class="w-12 h-12 object-cover rounded border border-gray-200">
                    </td>
                    <td class="px-6 py-4 font-medium text-gray-900">
                        {{ $post->title }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $post->author->name ?? '-' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $post->category->name ?? '-' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $post->created_at?->format('d M Y') }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center gap-3">
                            <a href="{{ route('dashboard.posts.show', $post) }}"
                               class="font-medium text-blue-600 hover:underline">Detail</a>
                            <a href="{{ route('dashboard.posts.edit', $post) }}"
                               class="font-medium text-amber-600 hover:underline">Edit</a>
                            <form action="{{ route('dashboard.posts.destroy', $post) }}" method="POST"
                                  onsubmit="return confirm('Yakin hapus post ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium text-red-600 hover:underline">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr class="bg-white">
                    <td colspan="7" class="px-6 py-6 text-center text-gray-500">
                        Belum ada data.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

