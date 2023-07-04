{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="mb-5">
    <h3 class="main-content-header mb-10">Data Danru</h3>
    <a href="{{ route('danru.create') }}" class="main-blue-btn">Add Danru</a>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-base text-left text-gray-500">
        <thead class="text-lg text-gray-700 uppercase bg-gray-100">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Lengkap
                </th>
                <th scope="col" class="px-6 py-3">
                    Regu
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($danrus as $danru)
            <tr class="bg-white border-b hover:bg-gray-50 text-gray-800">
                <td class="px-6 py-4">
                    {{ ++$i }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $danru->nama_lengkap }}
                </td>
                <td class="px-6 py-4">
                    {{ $danru->regu->nama_regu }}
                </td>
                <td class="flex items-center px-6 py-4 space-x-3">
                    <a href="{{ route('danru.show',$danru->id) }}" class="font-medium text-slate-500 hover:text-slate-700"><i class='bx bx-show text-xl lg:text-2xl'></i></a>
                    <a href="{{ route('danru.edit',$danru->id) }}" class="font-medium text-blue-500 hover:text-blue-700"><i class='bx bxs-edit text-xl lg:text-2xl'></i></a>
                    <form action="{{ route('danru.destroy',$danru->id) }}" method="post">
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
        {!! $danrus->links() !!}
    </div>
</div>

@endsection