{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="w-full lg:w-7/12">
    <div class="mb-10">
        <h3 class="main-content-header">Form Artikel</h3>
    </div>
    <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="title" class="main-form-label">Judul Artikel</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" class="@error('title') @enderror main-form-input" placeholder="Judul Artikel Baru">
            @error('title')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="category_id" class="main-form-label">Kategori Artikel</label>
            <select id="category_id" name="category_id" class="main-form-input">
                @foreach($categories as $category)
                    @if($category->id <= 3)
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
            <label class="main-form-label" for="cover">Upload Gambar</label>
            <input type="file" id="cover" name="cover" onchange="coverPreview()" class="block w-full text-sm lg:text-base text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
            @error('cover')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
            <img class="cover-preview w-[60%] mt-4">
        </div>
        <div class="mb-6">
            <label for="content_text" class="main-form-label">Isi Artikel</label>
            <input id="content_text" type="hidden" name="content_text" value="{{ old('content_text') }}">
            <trix-editor input="content_text"></trix-editor>
            @error('content_text')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex justify-between mb-4">
            <button type="submit" class="main-blue-btn">Simpan Data</button>
            <a href="{{ route('dashboard.articles') }}" class="main-gray-btn">Kembali</a>
        </div>
    </form>
</div>

@endsection

@push('scripts')
<script>
    function coverPreview(){
        const cover = document.querySelector("#cover"),
            cvrPreview = document.querySelector(".cover-preview");

        // Ubah Display Avatar
        cvrPreview.style.display = 'block';
    
        const oFReader = new FileReader();
        oFReader.readAsDataURL(cover.files[0]);
    
        oFReader.onload = function(oFREvent){
            cvrPreview.src = oFREvent.target.result;
        }
    }
</script>
@endpush