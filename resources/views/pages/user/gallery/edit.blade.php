{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="w-full lg:w-7/12">
    <div class="mb-10">
        <h3 class="main-content-header">Form Edit Gallery</h3>
    </div>
    <form action="{{ route('gallery.update',$gallery->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <label for="title" class="main-form-label">Judul Gallery</label>
            <input type="text" id="title" name="title" value="{{ old('title', $gallery->title) }}" class="main-form-input" placeholder="Judul Gallery" required>
            @error('title')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="category_id" class="main-form-label">Kategori Gallery</label>
            <select id="category_id" name="category_id" class="main-form-input">
                @foreach($categories as $category)
                    @if($category->id >= 4)
                        @if(old('category_id', $gallery->category_id) == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-6">
            <label for="deskripsi" class="main-form-label">Deskripsi</label>
            <input type="text" id="deskripsi" name="deskripsi" value="{{ old('deskripsi', $gallery->deskripsi) }}" class="main-form-input" placeholder="Deskripsi Gallery" required>
            @error('deskripsi')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label class="main-form-label" for="thumbnail">Upload Thumbnail</label>
            <input type="file" id="thumbnail" name="thumbnail" class="block w-full text-sm lg:text-base text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
            @error('thumbnail')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="main-form-label" for="thumbnail">Thumbnail</label>
            <div class="border border-gray-200 py-4">
                <img class="w-[50%] mx-auto" src="{{ asset('storage/galleries-img/'.$gallery->thumbnail) }}" alt="thumbnail">
                {{-- <img class="w-[50%] rounded-full px-8 mx-auto" src="/assets/images/gallery/{{ $$gallery->thumbnail }}" alt="thumbnail"> --}}
            </div>
        </div>
        <div class="mb-3">
            <label class="main-form-label" for="dokumentasi">Upload Dokumentasi (Opsional)</label>
            <input type="file" id="dokumentasi" name="documentations[]" multiple class="block w-full text-sm lg:text-base text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
            @error('dokumentasi')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-10">
            <label class="main-form-label" for="dokumentasi">Dokumentasi (Opsional)</label>
            @if($gallery->dokumentasi)
            <div class="border border-gray-200 py-4">
                <img class="w-[50%] rounded-full px-8 mx-auto" src="{{ asset('storage/galleries-img/'.$gallery->dokumentasi) }}" alt="dokumentasi">
                {{-- <img class="w-[50%] rounded-full px-8 mx-auto" src="/assets/images/gallery/{{ $$gallery->dokumentasi }}" alt="dokumentasi"> --}}
            </div>
            @else
            <div class="border border-gray-200 py-4 text-center">
                <span class="font-semibold">Tidak Ada Dokumentasi</span>
            </div>
            @endif
        </div>
        <div class="flex justify-between mb-4">
            <button type="submit" class="main-blue-btn">Simpan Pembaruan</button>
            <a href="{{ route('dashboard.gallery') }}" class="main-gray-btn">Kembali</a>
        </div>
    </form>
</div>

@endsection