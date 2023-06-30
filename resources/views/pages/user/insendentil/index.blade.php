{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="mb-10">
    <h3 class="font-semibold text-xl md:text-2xl xl:text-3xl">Insendentil Form</h3>
</div>
{{-- <div class="mb-5">
    <a href="{{ route('insendentil.create') }}" class="px-3 py-2 rounded-md bg-blue-600 hover:bg-blue-700 text-white text-base">Add Artikel</a>
</div> --}}
<div class="bg-[#FAF8F9] py-10">
    <div class="mx-5 md:mx-10 lg:mx-20 xl:mx-40 2xl:mx-60 py-12 bg-[#FAFEFD] border-2 border-greyColor rounded-3xl">
        <div class="px-[15px] sm:px-[20px] md:px-[30px] lg:px-11 xl:px-16">
            
            {{-- Page 1 --}}
            <form action="#" method="POST">
                <div class="mb-6">
                    <h3 class="text-xl lg:text-2xl font-bold">Informasi Awal</h3>
                </div>
                <div class="mb-4">
                    <label for="" class="form-label">Nama Pelapor</label>
                    <input type="text" placeholder="Nama Lengkap" name="namalengkap" id="namalengkap" class="form-input">
                </div>
                <div class="flex flex-wrap gap-4">
                    <div class="w-full md:w-6/12 mb-2">
                        <label for="" class="form-label">NIK Pelapor</label>
                        <input type="text" placeholder="NIK/KK" name="nikpemilik" id="nikpemilik" class="form-input">
                    </div>
                    <div class="md:w-5/12 lg:w-4/12 mb-4 md:mt-6">
                        <button type="button" class="bg-[#EEF5FA] px-4 py-1 border-2 border-slate-300 border-dashed">
                            <span>Upload KTP</span>
                        </button>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="form-label">Alamat Pelapor</label>
                    <input type="text" placeholder="Alamat Lengkap" name="alamat" id="alamat" class="form-input">
                </div>
                <div class="mb-4">
                    <label for="" class="form-label">Nomor HP</label>
                    <input type="text" placeholder="+62" name="nohp" id="nohp" class="form-input">
                </div>
                {{-- <div class="mb-4">
                    <label for="" class="form-label">Alamat Kejadian</label>
                    <input type="text" placeholder="Alamat Kejadian" name="alamatkejadian" id="alamatkejadian" class="form-input">
                </div> --}}
                <div class="mb-4">
                    <label for="" class="form-label">Kecamatan</label>
                    <input type="text" placeholder="Kecamatan Apa?" name="kecamatan" id="kecamatan" class="form-input">
                </div>
                <div class="flex flex-wrap mb-8">
                    <div class="w-full md:w-6/12 md:pr-4 mb-4">
                        <label for="" class="form-label">Kelurahan</label>
                        <input type="text" placeholder="Kelurahan Apa?" name="kelurahan" id="kelurahan" class="form-input">
                    </div>
                    <div class="w-full md:w-6/12 mb-4">
                        <label for="" class="form-label">RT/RW</label>
                        <input type="text" placeholder="RT/RW Berapa?" name="rtrw" id="rtrw" class="form-input">
                    </div>
                </div>
                <div class="flex flex-wrap justify-between">
                    <a href="{{ route('dashboard') }}" class="insendentil-back-btn">
                        <i class='bx bx-arrow-back text-sm lg:text-base'></i>
                        <span class="text-sm lg:text-base">Back</span>
                    </a>
                    <button class="insendentil-next-btn">
                        <span class=" text-sm lg:text-base">Next</span>
                        <i class='bx bx-arrow-back rotate-180 text-sm lg:text-base'></i>
                    </button>
                </div>
            </form>

            {{-- Page 2 --}}
            {{-- <form action="" method="POST">
                <div class="mb-6">
                    <h3 class="text-xl lg:text-2xl font-bold">Informasi Kejadian</h3>
                </div>
                <div class="mb-4">
                    <label for="" class="form-label">Jenis Kejadian</label>
                    <input type="text" placeholder="Pilih Jenis Kejadian" name="jeniskejadian" id="jeniskejadian" class="form-input">
                </div>
                <div class="mb-4">
                    <label for="" class="form-label">Lokasi Kejadian</label>
                    <input type="text" placeholder="Tempat Kejadian" name="lokasikejadian" id="lokasikejadian" class="form-input">
                </div>
                <div class="mb-4">
                    <label for="" class="form-label">Kronologis</label>
                    <input type="text" placeholder="Kronologis Kejadian" name="kronologis" id="kronologis" class="form-input">
                </div>
                <div class="mb-4">
                    <label for="" class="form-label">Penyebab</label>
                    <input type="text" placeholder="Penyebab Kejadian" name="penyebabkejadian" id="penyebabkejadian" class="form-input">
                </div>
                <div class="mb-4">
                    <label for="" class="form-label">Dampak</label>
                    <input type="text" placeholder="Dampak Kejadian" name="dampakkejadian" id="dampakkejadian" class="form-input">
                </div>
                <div class="mb-4">
                    <label for="" class="form-label">Kerugian</label>
                    <input type="text" placeholder="Kerugian Materil" name="kerugianmateril" id="kerugianmateril" class="form-input">
                </div>
                <div class="mb-4">
                    <label for="" class="form-label">Korban Jiwa</label>
                    <input type="text" placeholder="Jumlah Korban" name="korbanjiwa" id="korbanjiwa" class="form-input">
                </div>
            </form> --}}
        </div>
    </div>
</div>

{{-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
                    <a href="{{ route('articles.show',$post->slug) }}" class="font-medium text-slate-500 hover:text-slate-700"><i class='bx bx-show text-xl'></i></a>
                    <a href="#" class="font-medium text-blue-500 hover:text-blue-700"><i class='bx bxs-edit text-xl'></i></a>
                    <a href="#" class="font-medium text-red-500 hover:text-red-700"><i class='bx bxs-x-circle text-xl'></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mx-4 my-6">
        {!! $posts->links() !!}
    </div>
</div> --}}

@endsection