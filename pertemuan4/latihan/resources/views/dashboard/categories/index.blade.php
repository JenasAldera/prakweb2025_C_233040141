<x-dashboard-layout>
    <x-slot:title>Categories</x-slot:title>

    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-bold text-gray-900">Manajemen Category</h1>
        <a href="{{ route('dashboard.categories.create') }}"
           class="inline-flex items-center justify-center gap-2 text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18" aria-hidden="true">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
            Tambah Category
        </a>
    </div>

    @if (session('status'))
        <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div>{{ session('status') }}</div>
        </div>
    @endif

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th class="px-6 py-3">No</th>
                    <th class="px-6 py-3">Nama</th>
                    <th class="px-6 py-3">Slug</th>
                    <th class="px-6 py-3 text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $loop->iteration + ($categories->firstItem() ? $categories->firstItem() - 1 : 0) }}</td>
                        <td class="px-6 py-4 font-medium text-gray-900">{{ $category->name }}</td>
                        <td class="px-6 py-4 text-gray-700">{{ $category->slug }}</td>
                        <td class="px-6 py-4 text-center">
                            <a href="{{ route('dashboard.categories.edit', $category) }}" class="text-blue-600 hover:underline mr-3">Edit</a>
                            <form action="{{ route('dashboard.categories.destroy', $category) }}" method="POST" class="inline"
                                  onsubmit="return confirm('Yakin hapus kategori ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr class="bg-white">
                        <td colspan="4" class="px-6 py-6 text-center text-gray-500">
                            Belum ada kategori.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if ($categories->hasPages())
        <div class="flex items-center justify-between mt-4">
            <span class="text-sm text-gray-700">
                Showing <span class="font-semibold">{{ $categories->firstItem() }}</span> to <span class="font-semibold">{{ $categories->lastItem() }}</span> of <span class="font-semibold">{{ $categories->total() }}</span> Entries
            </span>
            <div class="inline-flex -space-x-px text-sm">
                <a href="{{ $categories->previousPageUrl() ?? '#' }}"
                   class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 {{ $categories->onFirstPage() ? 'pointer-events-none opacity-50' : '' }}">
                    Previous
                </a>
                <a href="{{ $categories->nextPageUrl() ?? '#' }}"
                   class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 {{ !$categories->hasMorePages() ? 'pointer-events-none opacity-50' : '' }}">
                    Next
                </a>
            </div>
        </div>
    @endif
</x-dashboard-layout>

