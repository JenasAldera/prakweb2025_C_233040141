<x-dashboard-layout>
    <x-slot:title>Dashboard Posts</x-slot:title>

    <div class="mb-6 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
        <div class="w-full md:w-1/2">
            <form method="GET" action="{{ route('dashboard.posts.index') }}" class="flex items-center">
                <label for="search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="text" id="search" name="search" value="{{ $search }}"
                           class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="Search posts...">
                </div>
                <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Cari
                </button>
            </form>
        </div>
        <a href="{{ route('dashboard.posts.create') }}"
           class="inline-flex items-center justify-center gap-2 text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18" aria-hidden="true">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
            Tambah Post
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

    @if ($errors->any())
        <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm1 13.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm0-3.5a1 1 0 0 1-2 0v-5a1 1 0 0 1 2 0Z"/>
            </svg>
            <div>Periksa kembali input Anda.</div>
        </div>
    @endif

    <x-table :posts="$posts" />

    @if ($posts->hasPages())
        <div class="flex items-center justify-between mt-4">
            <span class="text-sm text-gray-700">
                Showing <span class="font-semibold">{{ $posts->firstItem() }}</span> to <span class="font-semibold">{{ $posts->lastItem() }}</span> of <span class="font-semibold">{{ $posts->total() }}</span> Entries
            </span>
            <div class="inline-flex -space-x-px text-sm">
                <a href="{{ $posts->previousPageUrl() ?? '#' }}"
                   class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 {{ $posts->onFirstPage() ? 'pointer-events-none opacity-50' : '' }}">
                    Previous
                </a>
                <a href="{{ $posts->nextPageUrl() ?? '#' }}"
                   class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 {{ !$posts->hasMorePages() ? 'pointer-events-none opacity-50' : '' }}">
                    Next
                </a>
            </div>
        </div>
    @endif
</x-dashboard-layout>

