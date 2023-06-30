{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="mb-10">
    <h3 class="font-semibold text-xl md:text-2xl xl:text-3xl">Form Kategori</h3>
</div>
<div class="w-full lg:w-7/12">
    <form action="{{ route('kategori.store') }}" method="post">
        @csrf
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm lg:text-base font-medium text-gray-900">Kategori</label>
            <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm lg:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Kategori Baru" required>
        </div>
        <div class="mb-10">
            <label for="slug" class="block mb-2 text-sm lg:text-base font-medium text-gray-900">Link Kategori</label>
            <input type="text" id="slug" name="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm lg:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Link Kategori Baru" required>
        </div>
        <div class="flex justify-between mb-4">
            <a href="{{ route('dashboard.categories') }}" class="bg-slate-400 hover:bg-slate-500 text-white text-sm lg:text-base px-4 py-2 rounded-md">Kembali</a>
            <button type="submit" class="bg-[#2557D6] hover:bg-[#2557D6]/90 text-white text-sm lg:text-base px-4 py-2 rounded-md">Submit</button>
        </div>
    </form>
</div>

@endsection