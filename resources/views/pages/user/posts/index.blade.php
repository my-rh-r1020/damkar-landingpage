{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="mb-5">
    <h3 class="main-content-header mb-10">Data Artikel</h3>
    <a href="{{ route('articles.create') }}" class="main-blue-btn">Add Artikel</a>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-base text-left text-gray-500">
        <thead class="text-lg text-gray-700 uppercase bg-gray-100">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Judul Artikel
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
            @foreach($posts as $post)
            <tr class="bg-white border-b hover:bg-gray-50 text-gray-800">
                <td class="px-6 py-4">
                    {{ ++$i }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $post->title }}
                </td>
                <td class="px-6 py-4">
                    {{ $post->category->name }}
                </td>
                <td class="flex items-center px-6 py-4 space-x-3">
                    <a href="{{ route('articles.show',$post->slug) }}" class="font-medium text-slate-500 hover:text-slate-700"><i class='bx bx-show text-xl lg:text-2xl'></i></a>
                    <a href="{{ route('articles.edit',$post->slug) }}" class="font-medium text-blue-500 hover:text-blue-700"><i class='bx bxs-edit text-xl lg:text-2xl'></i></a>
                    <a href="#" class="font-medium text-red-500 hover:text-red-700"><i class='bx bxs-x-circle text-xl lg:text-2xl'></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mx-4 my-6">
        {!! $posts->links() !!}
    </div>
</div>

@endsection