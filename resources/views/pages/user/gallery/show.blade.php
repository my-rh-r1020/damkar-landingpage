{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="w-full lg:w-7/12">
    <div class="mb-10">
        <h3 class="main-content-header">Detail Gallery</h3>
    </div>
    <div class="mb-6">
        <label for="title" class="main-form-label">Judul Gallery</label>
        <input type="text" id="title" name="title" value="{{ $gallery->title }}" class="main-form-input" placeholder="Judul Gallery" disabled readonly>
    </div>
    <div class="mb-6">
        <label for="category_id" class="main-form-label">Kategori Gallery</label>
        <input type="text" id="category_id" name="category_id" value="{{ $gallery->category->name}}" class="main-form-input" placeholder="" disabled readonly>
    </div>
    <div class="mb-6">
        <label for="deskripsi" class="main-form-label">Deskripsi</label>
        <input type="text" id="deskripsi" name="deskripsi" value="{{ $gallery->deskripsi }}" class="main-form-input" placeholder="Deskrispi Gallery" disabled readonly>
    </div>
    <div class="mb-6">
        <label class="main-form-label" for="thumbnail">Thumbnail</label>
        <div class="border border-gray-200 py-4">
            <img class="w-[50%] mx-auto" src="{{ asset('storage/galleries-img/'.$gallery->thumbnail) }}" alt="thumbnail">
            {{-- <img class="w-[50%] rounded-full px-8 mx-auto" src="/assets/images/gallery/{{ $$gallery->thumbnail }}" alt="thumbnail"> --}}
        </div>
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
    <div class="mb-4">
        <a href="{{ route('dashboard.gallery') }}" class="main-gray-btn">Kembali</a>
    </div>
</div>

@endsection