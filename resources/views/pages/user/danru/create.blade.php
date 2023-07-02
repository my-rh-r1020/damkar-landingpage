{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="mb-10">
    <h3 class="font-semibold text-xl md:text-2xl xl:text-3xl">Form Danru</h3>
</div>
<div class="w-full lg:w-7/12">
    <form action="{{ route('danru.store') }}" method="post">
        @csrf
        <div class="mb-6">
            <label for="nama_lengkap" class="block mb-2 text-sm lg:text-base font-medium text-gray-900">Nama Lengkap</label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm lg:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Nama Lengkap Anda" required>
        </div>
        <div class="mb-6">
            <label for="regu_id" class="block mb-2 text-sm lg:text-base font-medium text-gray-900">Pilih Regu</label>
            <select id="regu_id" name="regu_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm lg:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
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
            <label class="block mb-2 text-sm lg:text-base font-medium text-gray-900" for="avatar">Upload Avatar</label>
            <input class="block w-full text-sm lg:text-base text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" id="avatar" type="file">
        </div>
        <div class="flex justify-between mb-4">
            <a href="{{ route('dashboard.danru') }}" class="bg-slate-400 hover:bg-slate-500 text-white text-sm lg:text-base px-4 py-2 rounded-md">Kembali</a>
            <button type="submit" class="bg-[#2557D6] hover:bg-[#2557D6]/90 text-white text-sm lg:text-base px-4 py-2 rounded-md">Submit</button>
        </div>
        {{-- <div>
            <label for="nama_lengkap" class="block mb-2 text-sm lg:text-base font-medium text-red-700">Nama Lengkap</label>
            <input type="text" id="nama_lengkap" class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm lg:text-base rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" placeholder="Nama Lengkap Anda">
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> Username already taken!</p>
        </div> --}}
    </form>
</div>

@endsection