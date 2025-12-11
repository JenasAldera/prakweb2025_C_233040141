<x-dashboard-layout>
    <x-slot:title>Edit Category</x-slot:title>

    <div class="mb-4">
        <a href="{{ route('dashboard.categories.index') }}" class="text-blue-600 hover:underline text-sm">← Kembali</a>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <form action="{{ route('dashboard.categories.update', $category) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                <input type="text" name="name" value="{{ old('name', $category->name) }}"
                       class="bg-gray-50 text-gray-900 text-sm rounded-lg block w-full p-2.5 {{ $errors->has('name') ? 'border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }}"
                       required>
                @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900">Slug (opsional)</label>
                <input type="text" name="slug" value="{{ old('slug', $category->slug) }}"
                       class="bg-gray-50 text-gray-900 text-sm rounded-lg block w-full p-2.5 {{ $errors->has('slug') ? 'border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }}">
                @error('slug')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end gap-3">
                <a href="{{ route('dashboard.categories.index') }}"
                   class="text-gray-700 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5">
                    Batal
                </a>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-dashboard-layout>

