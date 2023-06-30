{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="mb-10">
    <h3 class="font-semibold text-xl md:text-2xl xl:text-3xl">Detail Danru</h3>
</div>
<div class="w-full lg:w-7/12">
    <form>
        <div class="mb-6">
            <label for="nama_lengkap" class="block mb-2 text-sm lg:text-base font-medium text-gray-900">Nama Lengkap</label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ $danru->nama_lengkap }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm lg:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" disabled readonly>
        </div>
        <div class="mb-6">
            <label for="regu_id" class="block mb-2 text-sm lg:text-base font-medium text-gray-900">Kategori Regu</label>
            <input type="text" id="regu_id" name="regu_id" value="{{ $danru->regu->nama_regu }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm lg:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" disabled readonly>
        </div>
        <div class="mb-12">
            <label class="block mb-6 text-sm lg:text-base font-medium text-gray-900" for="avatar">Avatar</label>
            <img class="w-[50%] rounded-full px-8 mx-auto" src="/images/{{ $danru->avatar }}" alt="Rounded avatar">
        </div>
        <div class="flex justify-between mb-4">
            <a href="{{ route('dashboard.danru') }}" class="bg-slate-400 hover:bg-slate-500 text-white text-sm lg:text-base px-4 py-2 rounded-md">Kembali</a>
            <button type="submit" class="bg-[#2557D6] hover:bg-[#2557D6]/90 text-white text-sm lg:text-base px-4 py-2 rounded-md">Submit</button>
        </div>
    </form>
</div>

@endsection