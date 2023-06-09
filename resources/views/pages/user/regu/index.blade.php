{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="mb-5">
    <h3 class="main-content-header mb-10">Data Regu Danru</h3>
    <a href="{{ route('regu.create') }}" class="main-blue-btn">Add Regu</a>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
            @foreach($regus as $regu)
            <tr class="bg-white border-b hover:bg-gray-50 text-gray-800">
                <td class="px-6 py-4">
                    {{ ++$i }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $regu->nama_regu }}
                </td>
                <td class="px-6 py-4">
                    {{ $regu->lokasi }}
                </td>
                <td class="flex items-center px-6 py-4 space-x-3">
                    <a href="{{ route('regu.edit',$regu->id) }}" class="font-medium text-blue-500 hover:text-blue-700"><i class='bx bxs-edit text-xl lg:text-2xl'></i></a>
                    <form action="{{ route('regu.destroy',$regu->id) }}" method="POST">
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
        {!! $regus->links() !!}
    </div>
</div>

@endsection