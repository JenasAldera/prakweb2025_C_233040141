@props([
    'action',
    'method' => 'POST',
    'categories' => collect(),
    'post' => null,
])

<div class="relative bg-white rounded-lg shadow">
    <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
        <h3 class="text-lg font-semibold text-gray-900">
            {{ $post ? 'Edit Post' : 'Buat Post Baru' }}
        </h3>
    </div>

    <form class="p-6 space-y-6" method="POST" action="{{ $action }}" enctype="multipart/form-data">
        @csrf
        @if (!in_array(strtoupper($method), ['GET', 'POST']))
            @method($method)
        @endif

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
            <input type="text" name="title" value="{{ old('title', $post->title ?? '') }}"
                   class="bg-gray-50 text-gray-900 text-sm rounded-lg block w-full p-2.5 {{ $errors->has('title') ? 'border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }}"
                   required>
            @error('title')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">Slug (opsional)</label>
            <input type="text" name="slug" value="{{ old('slug', $post->slug ?? '') }}"
                   class="bg-gray-50 text-gray-900 text-sm rounded-lg block w-full p-2.5 {{ $errors->has('slug') ? 'border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }}">
            @error('slug')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">Kategori</label>
            <select name="category_id"
                    class="bg-gray-50 text-gray-900 text-sm rounded-lg block w-full p-2.5 {{ $errors->has('category_id') ? 'border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }}"
                    required>
                <option value="">-- Pilih Kategori --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ old('category_id', $post->category_id ?? '') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">Excerpt (opsional)</label>
            <textarea name="excerpt" rows="2"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg {{ $errors->has('excerpt') ? 'border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }}">{{ old('excerpt', $post->excerpt ?? '') }}</textarea>
            @error('excerpt')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">Konten</label>
            <textarea name="body" rows="6" required
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg {{ $errors->has('body') ? 'border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }}">{{ old('body', $post->body ?? '') }}</textarea>
            @error('body')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900" for="image">Upload Gambar</label>
            <input name="image" id="image" type="file" accept="image/*"
                   class="block w-full text-sm text-gray-900 rounded-lg cursor-pointer bg-gray-50 focus:outline-none {{ $errors->has('image') ? 'border-red-500' : 'border-gray-300' }}"
            >
            <p class="mt-1 text-sm text-gray-500">SVG, PNG, JPG atau GIF (max 2 MB).</p>
            @error('image')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end gap-3">
            <a href="{{ route('dashboard.posts.index') }}"
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

