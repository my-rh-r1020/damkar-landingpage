{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="mb-10">
    <h3 class="font-semibold text-xl md:text-2xl xl:text-3xl">Detail Danru</h3>
</div>
<div class="flex flex-wrap">
    <div class="w-full md:w-6/12 xl:w-8/12">
        <form>
            <div class="flex items-center mb-6">
                <div class="w-3/12">
                    <label for="nama" class="block mb-2 text-sm lg:text-base font-medium text-gray-900">Nama Lengkap</label>
                </div>
                <input type="text" id="nama" value="{{ $danru->nama_lengkap }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm lg:text-base rounded-lg block w-full p-2.5" readonly>
            </div> 
            <div class="flex items-center mb-6">
                <div class="w-3/12">
                    <label for="nama" class="block mb-2 text-sm lg:text-base font-medium text-gray-900">Regu</label>
                </div>
                <input type="text" id="nama" value="{{ $danru->regu->nama_regu }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm lg:text-base rounded-lg block w-full p-2.5" readonly>
            </div> 
        </form>
    </div>
    <div class="w-full md:w-6/12 xl:w-4/12">
        <img class="w-[75%] rounded-full px-8 mx-auto" src="/images/{{ $danru->avatar }}" alt="Rounded avatar">
    </div>
</div>

@endsection