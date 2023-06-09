<section class="bg-gradient-to-r from-redColor from-45% via-red-400 via-10% to-redColorAlt to-45%">
    <div class="py-6 mx-4 sm:px-6 md:px-8">
        <div class="text-center mb-8">
            <h3 class="text-white text-xl lg:text-3xl font-bold mb-2">E-Lapor Dinas Pemadam Kebakaran dan Penyelamatan</h3>
            <p class="text-xs lg:text-sm text-white">Sampaikan aduan anda kepada Dinas Damkar Kota Tanjungpinang dan ambil peran dalam mewujudkan pelayanan masyarakat yang lebih baik</p>
        </div>
        <div class="mb-4 border-2 border-white rounded-lg">
            <div class="text-center text-white">
                <span class="text-sm lg:text-lg">Panduan Kirim Aduan Anda</span>
            </div>
            <div class="mx-2 mb-2 flex flex-wrap justify-between">
                <div class="elapor-panduan-card">
                    <div class="elapor-panduan-column">
                        {{-- Icon --}}
                        <span class="text-sm">Aduan Pelayanan</span>
                        <p class="text-xs">Aduan umum mengenai layanan publik Dinas Damkar Tanjungpinang</p>
                    </div>
                </div>
                <div class="w-full md:w-3/12 mb-3">
                    <img src="" alt="banner-img" class="mx-auto">
                </div>
                <div class="elapor-panduan-card">
                    <div class="elapor-panduan-column">
                        {{-- Icon --}}
                        <span class="text-sm">Aduan Pelayanan</span>
                        <p class="text-xs">Aduan umum mengenai layanan publik Dinas Damkar Tanjungpinang</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-8 flex flex-wrap justify-center">
            <div class="p-1 bg-white rounded-full mr-4"></div>
            <div class="p-1 bg-white rounded-full mr-4"></div>
            <div class="p-1 bg-white rounded-full mr-4"></div>
            <div class="p-1 bg-white rounded-full"></div>
        </div>
        <div class="mb-8 bg-white rounded-lg">
            <div class="px-2 py-4">
                <div class="text-center text-blackColor mb-6">
                    <h4 class="uppercase font-bold text-lg lg:text-xl">Kritik dan Saran</h4>
                    <span class="w-8 h-1 my-2 block bg-blackColor mx-auto"></span>
                </div>
                <form action="" method="POST">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2 px-4">
                            <div class="my-3">
                                <h5 class="text-base xl:text-lg font-bold">Identitas Pelapor</h5>
                            </div>
                            <div class="elapor-column">
                                <div class="w-3/12">
                                    <label for="nama" class="form-label">Nama</label>
                                </div>
                                <div class="w-9/12">
                                    <input type="text" placeholder="Nama Lengkap" name="namapelapor" id="namapelapor" class="form-input">
                                </div>
                            </div>
                            <div class="elapor-column">
                                <div class="w-3/12">
                                    <label for="email" class="form-label">Telpon/HP</label>
                                </div>
                                <div class="w-9/12">
                                    <input type="text" placeholder="Nomor Telpon/HP" name="nohppelapor" id="nohppelapor" class="form-input">
                                </div>
                            </div>
                            <div class="elapor-column">
                                <div class="w-3/12">
                                    <label for="email" class="form-label">NIK</label>
                                </div>
                                <div class="w-9/12">
                                    <input type="text" placeholder="NIK Anda" name="nikpelapor" id="nikpelapor" class="form-input">
                                </div>
                            </div>
                            <div class="mb-4">
                                <input type="checkbox">
                                <span class="text-sm lg:text-base">Anonim</span>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 px-4">
                            <div class="my-3">
                                <h5 class="text-base xl:text-lg font-bold">Pelaporan</h5>
                            </div>
                            <div class="mb-4">
                                <input type="text" placeholder="Judul Keluhan" name="judulkeluhan" id="judulkeluhan" class="form-input">
                            </div>
                            <div class="mb-3">
                                <textarea placeholder="Keluhan Anda" name="deskripsikeluhan" id="deskripsikeluhan" class="form-input h-24 resize-y"></textarea>
                            </div>
                            <div class="mb-4">
                                <select name="listwilayah" id="listwilayah" class="form-input">
                                    <option value="">Pilih Wilayah</option>
                                    <option value="">Opsi 1</option>
                                    <option value="">Opsi 2</option>
                                </select>
                            </div>
                            <div class="flex flex-wrap justify-start gap-4 mb-10">
                                {{-- <div class="w-full md:w-6/12 md:mr-4 lg:w-7/12 mb-4">
                                    <select name="listkategori" id="listkategori" class="elapor-text-form focus:shadow-outline">
                                        <option value="">Pilih Kategori</option>
                                        <option value="">Opsi 1</option>
                                        <option value="">Opsi 2</option>
                                    </select>
                                </div> --}}
                                <div class="w-full md:w-6/12 lg:w-5/12 xl:w-4/12">
                                    <button class="elapor-btn">
                                        {{-- Icon --}}
                                        <span class="elapor-btn-text">Upload Gambar</span>
                                    </button>
                                </div>
                                <div class="w-full md:w-5/12 lg:w-5/12 xl:w-4/12">
                                    <button class="elapor-btn">
                                        <span class="elapor-btn-text">Pilih Lokasi</span>
                                    </button>
                                </div>
                            </div>
                            <div class="mb-4">
                                <input type="checkbox">
                                <span class="text-xs lg:text-sm text-justify">Dengan mengisi form ini dan mengirimkan kritik serta saran, Anda telah menyetujui <a href="#" target="_blank" class="text-blue-400">Ketentuan Layanan dan Kebijakan Privasi</a> kami</span>
                            </div>
                            <div class="flex justify-start mb-4">
                                <button type="submit" class="px-4 py-1 bg-redColor rounded-md hover:bg-redColorAlt transition duration-300">
                                    <span class="elapor-btn-text font-semibold">Report Now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>