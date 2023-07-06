{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="w-full lg:w-7/12">
    <div class="mb-10">
        <h3 class="main-content-header">Form Gallery</h3>
    </div>
    <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="title" class="main-form-label">Judul Gallery</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" class="main-form-input" placeholder="Judul Gallery" required>
            @error('title')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="category_id" class="main-form-label">Kategori Gallery</label>
            <select id="category_id" name="category_id" class="main-form-input">
                @foreach($categories as $category)
                    @if($category->id >= 4)
                        @if(old('category_id') == $category->id)
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
            <input type="text" id="deskripsi" name="deskripsi" value="{{ old('deskripsi') }}" class="main-form-input" placeholder="Deskripsi Gallery" required>
            @error('deskripsi')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="main-form-label" for="thumbnail">Upload Thumbnail</label>
            <input type="file" id="thumbnail" name="thumbnail" onchange="thumbnailPreview()" class="block w-full text-sm lg:text-base text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
            @error('thumbnail')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
            <img class="thumbnail-preview w-[60%] mt-4">
        </div>
        <div class="mb-10">
            <label class="main-form-label" for="dokumentasi">Upload Dokumentasi (Opsional)</label>
            <input type="file" id="dokumentasi" name="albums[]" multiple onchange="dokumentasiPreview()" class="block w-full text-sm lg:text-base text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
            @error('albums[]')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
            <img class="dokumentasi-preview w-[60%] mt-4">
        </div>
        <div class="flex justify-between mb-4">
            <button type="submit" class="main-blue-btn">Simpan Data</button>
            <a href="{{ route('dashboard.gallery') }}" class="main-gray-btn">Kembali</a>
        </div>
    </form>
</div>

@endsection

@push('scripts')
<script>
    function thumbnailPreview(){
        const thumbnail = document.querySelector("#thumbnail"),
            thumbPreview = document.querySelector(".thumbnail-preview");

        // Ubah Display Avatar
        thumbPreview.style.display = 'block';
    
        const oFReader = new FileReader();
        oFReader.readAsDataURL(thumbnail.files[0]);
    
        oFReader.onload = function(oFREvent){
            thumbPreview.src = oFREvent.target.result;
        }
    }

    function dokumentasiPreview(){
        const dokumentasi = document.querySelector("#dokumentasi"),
            dokPreview = document.querySelector(".dokumentasi-preview");

        // Ubah Display Avatar
        dokPreview.style.display = 'block';
    
        const oFReader = new FileReader();
        oFReader.readAsDataURL(dokumentasi.files[0]);
    
        oFReader.onload = function(oFREvent){
            dokPreview.src = oFREvent.target.result;
        }
    }
</script>
@endpush