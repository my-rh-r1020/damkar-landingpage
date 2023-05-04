<section class="bg-[#FAF8F9] py-20">
    <div class="py-4 px-4">
        <div class="mx-4 mb-8 border-2 border-slate-200 bg-white rounded-lg">
            <div class="px-2 py-4">
                <div class="mb-6 px-4 pt-4 flex flex-wrap justify-between">
                    <div>
                        {{-- Icon --}}
                        <h4 class="font-bold text-lg lg:text-xl text-blackColor">Pelatihan Penggunaan APAR Tingkat RT se-Kota Tanjungpinang</h4>
                        <p class="text-xs text-redColor">13/03/2023 sampai dengan 17/03/2023</p>
                    </div>
                    <div class="flex">
                        <img src="/images/logo-tpi.png" alt="pemkot-logo" class="w-[60px]">
                        <img src="/images/logo-damkar.png" alt="damkar-logo" class="w-[70px]">
                    </div>
                </div>
                <form action="" method="POST">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-4/12 lg:w-5/12 px-4">
                            <div class="mb-3">
                                <span class="uppercase text-xs font-bold text-greyColorAlt">Identitas Peserta</span>
                            </div>
                            <div class="mb-4">
                                <input type="text" placeholder="Nama Lengkap Peserta" name="namapeserta" id="namapeserta" class="pelatihan-text-form focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <input type="text" placeholder="Email Peserta" name="emailpeserta" id="emailpeserta" class="pelatihan-text-form focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <textarea placeholder="Alamat Lengkap" name="alamatpeserta" id="alamatpeserta" class="pelatihan-text-form focus:shadow-outline h-24 resize-y"></textarea>
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="px-8 py-1 bg-green-500 text-white rounded-md hover:bg-greenColor transition duration-300">
                                    <span class="font-semibold uppercase text-sm">Daftar</span>
                                </button>
                            </div>
                        </div>
                        <div class="w-full md:w-8/12 lg:w-7/12 px-4">
                            <div class="mb-3">
                                <span class="uppercase text-xs font-bold text-greyColorAlt">Identitas Persyaratan Peserta</span>
                            </div>
                            <div class="flex items-center">
                                <div>
                                    <div class="p-2 bg-[#008036] rounded-full mr-4"></div>
                                </div>
                                <div>
                                    <h6 class="font-semibold">KTP</h6>
                                    <p class="italic text-sm">PDF/JPG/PNG</p>
                                </div>
                                <div>
                                    <button class="bg-[#EEF5FA] px-4 py-1 border-2 border-slate-300 border-dashed rounded-lg" type="file">
                                        <span class="text-sm">Upload Berkas</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>