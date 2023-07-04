{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="w-full lg:w-7/12">
    <div class="mb-10">
        <h3 class="main-content-header">Form Danru</h3>
    </div>
    <form action="{{ route('danru.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="nama_lengkap" class="main-form-label">Nama Lengkap</label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}" class="main-form-input" placeholder="Nama Lengkap Danru" required>
            @error('nama_lengkap')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="regu_id" class="main-form-label">Pilih Regu</label>
            <select id="regu_id" name="regu_id" class="main-form-input">
                @foreach($regus as $regu)
                    @if(old('regu_id') == $regu->id)
                    <option value="{{ $regu->id }}" selected>{{ $regu->nama_regu }} - {{ $regu->lokasi }}</option>
                    @else
                    <option value="{{ $regu->id }}">{{ $regu->nama_regu }} - {{ $regu->lokasi }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-10">
            <label class="main-form-label" for="avatar">Upload Avatar</label>
            <input type="file" id="avatar" name="avatar" onchange="avatarPreview()" class="block w-full text-sm lg:text-base text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
            @error('avatar')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
            <img class="avatar-preview w-[40%] rounded-full mt-4">
        </div>
        <div class="flex justify-between mb-4">
            <button type="submit" class="main-blue-btn">Simpan Data</button>
            <a href="{{ route('dashboard.danru') }}" class="main-gray-btn">Kembali</a>
        </div>
        {{-- <div>
            <label for="nama_lengkap" class="block mb-2 text-sm lg:text-base font-medium text-red-700">Nama Lengkap</label>
            <input type="text" id="nama_lengkap" class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm lg:text-base rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" placeholder="Nama Lengkap Anda">
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> Username already taken!</p>
        </div> --}}
    </form>
</div>

@endsection

@push('scripts')
<script>
    function avatarPreview(){
        const avatar = document.querySelector("#avatar"),
            avtrPreview = document.querySelector(".avatar-preview");

        // Ubah Display Avatar
        avtrPreview.style.display = 'block';
    
        const oFReader = new FileReader();
        oFReader.readAsDataURL(avatar.files[0]);
    
        oFReader.onload = function(oFREvent){
            avtrPreview.src = oFREvent.target.result;
        }
    }
</script>
@endpush