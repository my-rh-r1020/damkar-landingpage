{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="mb-10">
    <h3 class="font-semibold text-xl md:text-2xl xl:text-3xl">Form Artikel</h3>
</div>
<div class="w-full lg:w-7/12">
    <form action="{{ route('articles.store') }}" method="post">
        @csrf
        <div class="mb-6">
            <label for="title" class="block mb-2 text-sm lg:text-base font-medium text-gray-900">Judul Artikel</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" class="@error('title') @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm lg:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Judul Artikel Baru">
            @error('title')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="category_id" class="block mb-2 text-sm lg:text-base font-medium text-gray-900">Kategori Artikel</label>
            <select id="category_id" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm lg:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @foreach($categories as $category)
                    @if(old('category_id') == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        {{-- <div class="mb-6">
            <label class="block mb-2 text-sm lg:text-base font-medium text-gray-900" for="cover">Upload Gambar</label>
            <input class="block w-full text-sm lg:text-base text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" id="cover" type="file">
        </div> --}}
        <div class="mb-6">
            <label for="content_text" class="block mb-2 text-sm lg:text-base font-medium text-gray-900">Isi Artikel</label>
            <input id="content_text" type="hidden" name="content_text" value="{{ old('content_text') }}">
            <trix-editor input="content_text"></trix-editor>
            {{-- <textarea id="content_text" rows="4" class="block p-2.5 w-full text-sm lg:text-base text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Tentang Artikel..."></textarea> --}}
        </div>
        {{-- <div class="mb-6">
            <label for="excerpt" class="block mb-2 text-sm lg:text-base font-medium text-gray-900">Excerpt Artikel</label>
            <input type="text" id="excerpt" name="excerpt" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm lg:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Excerpt Artikel Baru" required>
        </div> --}}
        <div class="flex justify-between mb-4">
            <a href="{{ route('dashboard.articles') }}" class="bg-slate-400 hover:bg-slate-500 text-white text-sm lg:text-base px-4 py-2 rounded-md">Kembali</a>
            <button type="submit" class="bg-[#2557D6] hover:bg-[#2557D6]/90 text-white text-sm lg:text-base px-4 py-2 rounded-md">Submit</button>
        </div>
    </form>
</div>

@endsection

{{-- @push('scripts')
<script>
    const title = document.querySelector("#title"),
        slug = document.querySelector("#slug");

    title.addEventListener("change", () => {
        fetch('/dashboard/articles/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug);
    });
</script>
@endpush --}}