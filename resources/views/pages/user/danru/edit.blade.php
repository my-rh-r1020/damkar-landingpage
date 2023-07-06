{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="w-full lg:w-7/12">
    <div class="mb-10">
        <h3 class="main-content-header">Form Edit Danru</h3>
    </div>
    <form action="{{ route('danru.update',$danru->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-6">
            <label for="nama_lengkap" class="main-form-label">Nama Lengkap</label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap', $danru->nama_lengkap) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm lg:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Nama Lengkap Anda" required>
            @error('nama_lengkap')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="regu_id" class="main-form-label">Pilih Regu</label>
            <select id="regu_id" name="regu_id" class="main-form-input">
                @foreach($regus as $regu)
                    @if(old('regu_id', $danru->regu_id) == $regu->id)
                    <option value="{{ $regu->id }}" selected>{{ $regu->nama_regu }} - {{ $regu->lokasi }}</option>
                    @else
                    <option value="{{ $regu->id }}">{{ $regu->nama_regu }} - {{ $regu->lokasi }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-6">
            <input type="hidden" name="oldAvatar" value="{{ $danru->avatar }}">
            <label class="main-form-label" for="avatar">Upload Avatar</label>
            <input type="file" id="avatar" name="avatar" class="block w-full text-sm lg:text-base text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
            @error('avatar')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-12">
            <label class="main-form-label" for="avatar">Avatar</label>
            <div class="border border-gray-200 py-4">
                <img class="w-[50%] rounded-full px-8 mx-auto" src="{{ asset('storage/profil-img/'.$danru->avatar) }}" alt="Rounded avatar">
                {{-- <img class="w-[50%] rounded-full px-8 mx-auto" src="/assets/images/profile/{{ $danru->avatar }}" alt="Rounded avatar"> --}}
            </div>
        </div>
        <div class="flex justify-between mb-4">
            <button type="submit" class="main-blue-btn">Simpan Pembaruan</button>
            <a href="{{ route('dashboard.danru') }}" class="main-gray-btn">Kembali</a>
        </div>
    </form>
</div>

@endsection