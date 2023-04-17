{{-- Request Form --}}
<section class="bg-[#eeeff1]">
    <div class="bg-gradient-to-t from-redColor from-45% via-red-400 via-10% to-redColorAlt to-45% text-center px-4 sm:px-6 md:px-8 pt-10 pb-12">
        <h3 class="text-white text-2xl lg:text-3xl font-bold mb-2">Form Permohonan Data OPD</h3>
        <p class="text-xs lg:text-sm text-white">Kami memiliki komponen untuk memberikan layanan terbaik kepada Anda dan selalu berusaha untuk menyediakan produk dan layanan terbaik yang Anda butuhkan</p>
    </div>
    <div class="flex flex-wrap w-full px-4 md:px-6 lg:px-8 xl:px-10 pt-12 pb-6">
        <div class="w-full md:w-6/12 lg:w-7/12 xl:w-8/12">
            <form action="" method="POST">
                <div class="mb-6">
                    <input type="text" placeholder="Nama Pemohon" name="nama" id="nama" class="request-text-form focus:shadow-outline">
                </div>
                <div class="mb-6">
                    <input type="text" placeholder="Email Pemohon" name="email" id="email" class="request-text-form focus:shadow-outline">
                </div>
                <div class="mb-6">
                    <input type="text" placeholder="Alamat Lengkap Pemohon" name="alamat" id="alamat" class="request-text-form focus:shadow-outline">
                </div>
                <div class="mb-6">
                    <input type="text" placeholder="Nomor Telp." name="notlp" id="notlp" class="request-text-form focus:shadow-outline">
                </div>
                <div class="mb-6">
                    <select name="jenisid" id="jenisid" class="request-text-form focus:shadow-outline">
                        <option value="">Pilih Jenis Identitas</option>
                        <option value="">Opsi 1</option>
                        <option value="">Opsi 2</option>
                    </select>
                </div>
                <div class="mb-6">
                    <input type="text" placeholder="Nomor Identitas" name="nomorid" id="nomorid" class="request-text-form focus:shadow-outline">
                </div>
                <div class="mb-6">
                    <select name="caraget" id="caraget" class="request-text-form focus:shadow-outline">
                        <option value="">Pilih Cara Mendapatkan</option>
                        <option value="">Opsi 1</option>
                        <option value="">Opsi 2</option>
                    </select>
                </div>
                <div class="mb-6">
                    <select name="carafulfill" id="carafulfill" class="request-text-form focus:shadow-outline">
                        <option value="">Pilih Cara Pemenuhan</option>
                        <option value="">Opsi 1</option>
                        <option value="">Opsi 2</option>
                    </select>
                </div>
                <div class="mb-6">
                    <textarea placeholder="Jenis Kebutuhan" name="jenisbutuh" id="jenisbutuh" class="request-text-form focus:shadow-outline h-24 resize-y"></textarea>
                    <p class="text-xs"><span class="text-redColor">*</span>Jelaskan tentang kebutuhan data/informasi apa dan mengapa ini dibutuhkan</p>
                </div>
                <div class="flex mb-10">
                    <button class="request-btn bg-gradient-to-tr from-[#FF4A4A] to-redColor mr-4">Ajukan</button>
                    <button class="request-btn bg-greyColor">Reset</button>
                </div>
            </form>
        </div>
        <div class="w-full px-2 md:pl-6 lg:mx-auto xl:pl-10 md:w-6/12 lg:w-4/12">
            <div class="text-center mb-4">
                <span class="bg-gradient-to-tr from-[#FF4A4A] to-redColor text-white font-semibold text-lg lg:text-xl px-4 py-[2px] rounded-full">Permintaan Data OPD</span>
            </div>
            <div class="text-justify text-black indent-8">
                <p class="leading-none mb-3">Pemohon mengisi form disamping dengan sebenar-benarnya</p>
                <p class="leading-none mb-3">Petugas memberikan tanda bukti penerimaan dan permohonan informasi publik kepada pemohon informasi publik, baik secara langsung maupun melalui surat elektronik (email) ke alamat pemohon;</p>
                <p class="leading-none mb-3">Petugas memproses permohonan informasi publik sesuai dengan formulir permohonan informasi publik yang telah ditandatangani oleh pemohon informasi publik;</p>
                <p class="leading-none mb-3">Apabila ternyata informasi yang dimohon termasuk dalam kategori Informasi Publik yang dikecualikan sesuai ketentuan yang berlaku, maka permohonann informasi publik dapat ditolah oleh PPID. Permohonan juga dapat ditolah oleh PPID apabila pemohon informasi tidak memenuhi persyaratan permohonan informasi dan atau diduga beritikad tidak baik terhadap informasi yang dimohonkan;</p>
            </div>
        </div>
    </div>
</section>

{{-- Insendentil Report --}}
<section class="bg-[#FAF8F9] py-20">
    <div class="mx-[72px] py-12 bg-[#FAFEFD] border-2 border-greyColor rounded-3xl">
        <div class="px-16">
            <div class="mb-6">
                <h3 class="text-2xl font-bold">Informasi Awal</h3>
            </div>
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
                <div class="w-full md:w-1/2 md:pr-2 lg:w-1/3 mb-4">
                    <label for="">Kecamatan</label>
                    <input type="text" placeholder="Kecamatan Apa?" name="kecamatan" id="kecamatan" class="insendentil-text-form focus:shadow-outline">
                </div>
                <div class="w-full md:w-1/2 md:pl-2 lg:w-1/3 lg:pr-2 mb-4">
                    <label for="">Kelurahan</label>
                    <input type="text" placeholder="Kelurahan Apa?" name="kelurahan" id="kelurahan" class="insendentil-text-form focus:shadow-outline">
                </div>
                <div class="w-full md:w-1/2 md:pr-2 lg:w-1/3 lg:pr-0 lg:pl-2 mb-4">
                    <label for="">RT/RW</label>
                    <input type="text" placeholder="RT/RW Apa?" name="rtrw" id="rtrw" class="insendentil-text-form focus:shadow-outline">
                </div>
            </div>
            <div class="mb-8 flex flex-wrap">
                <div class="w-full md:w-1/2 md:pr-2 lg:w-1/3 mb-4">
                    <label for="">No Telpon/HP</label>
                    <input type="text" placeholder="Telpon/HP" name="nohp" id="nohp" class="insendentil-text-form focus:shadow-outline">
                </div>
                <div class="w-full md:w-1/2 md:pl-2 lg:w-1/3 mb-4">
                    <button class="bg-[#EEF5FA] px-4 py-1 border-2 border-slate-300 border-dashed" type="file">
                        <span>Upload KTP</span>
                    </button>
                </div>
            </div>
            <div class="flex flex-wrap justify-between">
                <button class="px-6 py-2 bg-white border border-black rounded-full hover:bg-greyColorAlt transition duration-300">
                    <span class="text-greenColor hover:text-white">Back</span>
                </button>
                <button class="px-6 py-2 bg-[#64B08C] rounded-full hover:bg-greenColor transition duration-300">
                    <span class="text-white">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>

{{-- Damkar Activity --}}
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