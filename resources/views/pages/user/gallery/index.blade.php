{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="mb-5">
    <h3 class="main-content-header mb-10">Data Gallery</h3>
    <a href="{{ route('gallery.create') }}" class="main-blue-btn">Add Gallery</a>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-base text-left text-gray-500">
        <thead class="text-lg text-gray-700 uppercase bg-gray-100">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Thumbnail
                </th>
                <th scope="col" class="px-6 py-3">
                    Judul
                </th>
                <th scope="col" class="px-6 py-3">
                    Kategori
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($galleries as $gallery)
            <tr class="bg-white border-b hover:bg-gray-50 text-gray-800">
                <td class="px-6 py-4">
                    {{ ++$i }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <img src="{{ asset('storage/galleries-img/'.$gallery->thumbnail) }}" class="w-[150px]" alt="list gallery">
                </td>
                <td class="px-6 py-4">
                    {{ $gallery->title }}
                </td>
                <td class="px-6 py-4">
                    {{ $gallery->category->name }}
                </td>
                <td class="flex items-center px-6 py-4 space-x-3">
                    <a href="{{ route('gallery.show',$gallery->id) }}" class="font-medium text-slate-500 hover:text-slate-700"><i class='bx bx-show text-xl lg:text-2xl'></i></a>
                    <a href="{{ route('gallery.edit',$gallery->id) }}" class="font-medium text-blue-500 hover:text-blue-700"><i class='bx bxs-edit text-xl lg:text-2xl'></i></a>
                    <form action="{{ route('gallery.destroy',$gallery->id) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="font-medium text-red-500 hover:text-red-700">
                            <i class='bx bxs-x-circle text-xl lg:text-2xl'></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mx-4 my-6">
        {!! $galleries->links() !!}
    </div>
</div>

@endsection