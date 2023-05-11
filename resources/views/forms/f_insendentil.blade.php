<section class="bg-[#FAF8F9] py-20">
    <div class="mx-[15px] sm:mx-[20px] md:mx-[30px] lg:mx-11 xl:mx-[72px] py-12 bg-[#FAFEFD] border-2 border-greyColor rounded-3xl">
        <div class="px-[15px] sm:px-[20px] md:px-[30px] lg:px-11 xl:px-16">
            <div class="mb-6">
                <h3 class="text-2xl font-bold">Informasi Awal</h3>
            </div>
            {{-- Form Page 1 --}}
            <form action="#" >
                <div class="mb-4">
                    <label for="">Nama Pelapor</label>
                    <input type="text" placeholder="Nama Lengkap" name="nama" id="nama" class="insendentil-text-form focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="">Alamat Pelapor</label>
                    <input type="text" placeholder="Alamat Lengkap" name="alamat" id="alamat" class="insendentil-text-form focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="">NIK/KK Pemilik</label>
                    <input type="text" placeholder="NIK/KK" name="nikpemilik" id="nikpemilik" class="insendentil-text-form focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="">Alamat Kejadian</label>
                    <input type="text" placeholder="Alamat Lengkap" name="alamatkejadian" id="alamatkejadian" class="insendentil-text-form focus:shadow-outline">
                </div>
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/3 lg:pr-2 mb-4">
                        <label for="">Kecamatan</label>
                        <input type="text" placeholder="Kecamatan Apa?" name="kecamatan" id="kecamatan" class="insendentil-text-form focus:shadow-outline">
                    </div>
                    <div class="w-full lg:w-1/3 lg:px-2 mb-4">
                        <label for="">Kelurahan</label>
                        <input type="text" placeholder="Kelurahan Apa?" name="kelurahan" id="kelurahan" class="insendentil-text-form focus:shadow-outline">
                    </div>
                    <div class="w-full lg:w-1/3 lg:pl-2 mb-4">
                        <label for="">RT/RW</label>
                        <input type="text" placeholder="RT/RW Apa?" name="rtrw" id="rtrw" class="insendentil-text-form focus:shadow-outline">
                    </div>
                </div>
                <div class="mb-8 flex flex-wrap gap-4">
                    <div class="w-full md:w-6/12 lg:w-4/12">
                        <label for="">No Telpon/HP</label>
                        <input type="text" placeholder="Telpon/HP" name="nohp" id="nohp" class="insendentil-text-form focus:shadow-outline">
                    </div>
                    <div class="md:w-5/12 lg:w-4/12 mb-4 md:mt-6">
                        <button type="button" class="bg-[#EEF5FA] px-4 py-1 border-2 border-slate-300 border-dashed">
                            <span>Upload KTP</span>
                        </button>
                    </div>
                </div>
                <div class="flex flex-wrap justify-between">
                    {{-- <button class="px-6 py-2 bg-white border border-black rounded-full hover:bg-greyColorAlt text-greenColor hover:text-white transition duration-300">
                        <span class="">Back</span>
                    </button> --}}
                    <a href="/" class="px-6 py-2 bg-white border border-slate-400 rounded-full hover:bg-greyColorAlt text-greenColor hover:text-white transition duration-300">
                        <span class="">Back</span>
                    </a>
                    <button class="px-6 py-2 bg-[#64B08C] rounded-full hover:bg-greenColor transition duration-300">
                        <span class="text-white">Next</span>
                    </button>
                </div>
            </form>

            {{-- Form Page 2 --}}
        </div>
    </div>
</section>