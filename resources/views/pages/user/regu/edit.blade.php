{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="mb-10">
    <h3 class="font-semibold text-xl md:text-2xl xl:text-3xl">Form Edit Regu</h3>
</div>
<div class="w-full lg:w-7/12">
    <form action="{{ route('regu.update',$regu->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="nama_regu" class="block mb-2 text-sm lg:text-base font-medium text-gray-900">Nama Regu</label>
            <input type="text" id="nama_regu" name="nama_regu" value="{{ $regu->nama_regu }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm lg:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Nama Regu Baru" required>
        </div>
        <div class="mb-10">
            <label for="lokasi" class="block mb-2 text-sm lg:text-base font-medium text-gray-900">Lokasi Regu</label>
            <input type="text" id="lokasi" name="lokasi" value="{{ $regu->lokasi }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm lg:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Lokasi Regu Baru" required>
        </div>
        <div class="flex justify-between">
            <a href="{{ route('dashboard.regu') }}" class="bg-slate-400 hover:bg-slate-500 text-white text-sm lg:text-base px-4 py-2 rounded-md">Kembali</a>
            <button type="submit" class="bg-[#2557D6] hover:bg-[#2557D6]/90 text-white text-sm lg:text-base px-4 py-2 rounded-md">Update</button>
        </div>
    </form>
</div>

@endsection