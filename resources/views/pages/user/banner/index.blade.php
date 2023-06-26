{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="mb-10">
    <h3 class="font-semibold text-xl md:text-2xl xl:text-3xl">Data Banner</h3>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-3 gap-8">
    @foreach($banners as $banner)
    <div class="grid grid-cols-2 bg-stone-50 shadow-lg">
        <div>
            <img src="/images/{{ $banner->banner }}" alt="banners">
        </div>
        <div class="p-4 flex justify-between items-center">
            <div>
                <h5 class="text-sm lg:text-base mb-3">{{ $banner->instansi }}</h5>
                <p class="text-sm lg:text-base font-semibold mb-4">"{{ $banner->tagline }}"</p>
            </div>
            <a href="#" class="text-sm lg:text-base px-3 py-1 bg-orange-400 hover:bg-orange-500 hover:text-white rounded-md">Edit</a>
        </div>
    </div>
    @endforeach
</div>

{{-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-base text-left text-gray-500">
        <thead class="text-lg text-gray-700 uppercase bg-gray-100">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Regu
                </th>
                <th scope="col" class="px-6 py-3">
                    Lokasi
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($banners as $banner)
            <tr class="bg-white border-b hover:bg-gray-50 text-gray-800">
                <td class="px-6 py-4">
                    {{ $loop->iteration }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $banner->banner }}
                </td>
                <td class="px-6 py-4">
                    {{ $banner->instansi }}
                </td>
                <td class="flex items-center px-6 py-4 space-x-3">
                    <a href="/dashboard/regu/{{ $banner->id }}" class="font-medium text-slate-500 hover:text-slate-700"><i class='bx bx-show text-xl'></i></a>
                    <a href="#" class="font-medium text-blue-500 hover:text-blue-700"><i class='bx bxs-edit text-xl'></i></a>
                    <a href="#" class="font-medium text-red-500 hover:text-red-700"><i class='bx bxs-x-circle text-xl'></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}

@endsection