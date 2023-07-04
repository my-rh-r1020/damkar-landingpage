{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="w-full lg:w-7/12">
    <div class="mb-10">
        <h3 class="main-content-header">Form Edit Artikel</h3>
    </div>
    <form action="{{ route('articles.update',$article->slug) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <label for="title" class="main-form-label">Judul Artikel</label>
            <input type="text" id="title" name="title" value="{{ old('title', $article->title) }}" class="@error('title') @enderror main-form-input" placeholder="Judul Artikel Baru">
            @error('title')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="category_id" class="main-form-label">Kategori Artikel</label>
            <select id="category_id" name="category_id" class="main-form-input">
                @foreach($categories as $category)
                    @if(old('category_id', $article->category_id) == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <input type="hidden" name="oldCover" value="{{ $article->cover }}">
            <label class="main-form-label" for="cover">Upload Gambar</label>
            <input type="file" id="cover" name="cover" class="block w-full text-sm lg:text-base text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
            @error('cover')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="main-form-label" for="cover">Thumbnail Artikel</label>
            <div class="border border-gray-200 py-4">
                <img class="w-[60%] mx-auto" src="/assets/images/articles/{{ $article->cover }}" alt="Thumbnail Artikel">
            </div>
        </div>
        <div class="mb-6">
            <label for="content_text" class="main-form-label">Isi Artikel</label>
            <input id="content_text" type="hidden" name="content_text" value="{{ old('content_text', $article->content_text) }}">
            <trix-editor input="content_text"></trix-editor>
            @error('content_text')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex justify-between mb-4">
            <button type="submit" class="main-blue-btn">Simpan Pembaruan</button>
            <a href="{{ route('dashboard.articles') }}" class="main-gray-btn">Kembali</a>
        </div>
    </form>
</div>

@endsection