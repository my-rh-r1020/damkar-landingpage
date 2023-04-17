<section class="bg-gradient-to-r from-redColor from-45% via-red-400 via-10% to-redColorAlt to-45%">
    <div class="py-6 px-4 sm:px-6 md:px-8">
        <div class="text-center mb-8">
            <h3 class="text-white text-xl lg:text-2xl font-bold mb-2">E-Lapor Dinas Damkar Kota Tanjungpinang</h3>
            <p class="text-xs lg:text-sm text-white">Sampaikan aduan anda kepada Dinas Damkar Kota Tanjungpinang dan ambil peran dalam mewujudkan pelayanan masyarakat yang lebih baik</p>
        </div>
        <div class="mx-4 mb-4 border-2 border-white rounded-lg">
            <div class="text-center text-white">
                <span class="text-sm">Panduan Kirim Aduan</span>
                <h3 class="text-2xl lg:text-3xl font-bold mb-2">E-Lapor Dinas Damkar Kota Tanjungpinang</h3>
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
        <div class="mx-4 mb-8 bg-white rounded-lg">
            <div class="px-2 py-4">
                <div class="text-center text-blackColor mb-6">
                    <h4 class="uppercase font-bold text-lg">Kritik dan Saran</h4>
                    <span class="w-8 h-1 my-2 block bg-blackColor mx-auto"></span>
                </div>
                <form action="" method="POST">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2 px-4">
                            <div class="mb-4">
                                <input type="text" placeholder="Judul Keluhan" name="keluhantitle" id="keluhantitle" class="elapor-text-form focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <textarea placeholder="Keluhan Anda" name="desckeluhan" id="desckeluhan" class="elapor-text-form focus:shadow-outline h-24 resize-y"></textarea>
                            </div>
                            <div class="mb-4">
                                <select name="listwilayah" id="listwilayah" class="elapor-text-form focus:shadow-outline">
                                    <option value="">Pilih Wilayah</option>
                                    <option value="">Opsi 1</option>
                                    <option value="">Opsi 2</option>
                                </select>
                            </div>
                            <div class="flex flex-wrap justify-between">
                                <div class="w-full md:w-6/12 md:mr-4 lg:w-7/12 mb-4">
                                    <select name="listkategori" id="listkategori" class="elapor-text-form focus:shadow-outline">
                                        <option value="">Pilih Kategori</option>
                                        <option value="">Opsi 1</option>
                                        <option value="">Opsi 2</option>
                                    </select>
                                </div>
                                <div class="w-full md:w-3/12 lg:w-2/12 mb-2">
                                    <button class="elapor-btn">
                                        {{-- Icon --}}
                                        <span class="text-white">File</span>
                                    </button>
                                </div>
                                <div class="w-full md:w-3/12 lg:w-2/12 mb-2">
                                    <button class="elapor-btn">
                                        {{-- Icon --}}
                                        <span class="text-white">Lokasi</span>
                                    </button>
                                </div>
                            </div>
                            <div class="mb-4">
                                <input type="checkbox">
                                <span class="text-sm">Rahasia</span>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 px-4">
                            <div class="mb-4">
                                <input type="checkbox">
                                <span class="text-sm">Anonim</span>
                            </div>
                            <div class="flex flex-wrap items-center mb-4">
                                <div class="w-3/12">
                                    <label for="nama" class="font-semibold">Nama</label>
                                </div>
                                <div class="w-9/12">
                                    <input type="text" placeholder="Nama Lengkap" name="namalengkap" id="namalengkap" class="elapor-text-form focus:shadow-outline">
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center mb-4">
                                <div class="w-3/12">
                                    <label for="email" class="font-semibold">Email</label>
                                </div>
                                <div class="w-9/12">
                                    <input type="text" placeholder="Email Anda" name="email" id="email" class="elapor-text-form focus:shadow-outline">
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center mb-4">
                                <div class="w-3/12">
                                    <label for="email" class="font-semibold">Telpon/HP</label>
                                </div>
                                <div class="w-9/12">
                                    <input type="text" placeholder="Nomor Telpon/HP" name="nohp" id="nohp" class="elapor-text-form focus:shadow-outline">
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center mb-10">
                                <div class="w-3/12">
                                    <label for="email" class="font-semibold">NIK</label>
                                </div>
                                <div class="w-9/12">
                                    <input type="text" placeholder="NIK Anda" name="nik" id="nik" class="elapor-text-form focus:shadow-outline">
                                </div>
                            </div>
                            <div class="mb-4">
                                <input type="checkbox">
                                <span class="text-sm">Dengan mengisi form ini dan mengirimkan kritik serta saran, Anda telah menyetujui <a href="#" target="_blank" class="text-blue-400">Ketentuan Layanan dan Kebijakan Privasi</a> kami</span>
                            </div>
                            <div class="flex justify-start mb-4">
                                <button type="submit" class="px-4 py-1 bg-redColor text-white rounded-md hover:bg-redColorAlt transition duration-300">
                                    <span class="font-semibold">Kirim Now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="text-center mb-10">
        <h5 class="text-white text-2xl">Request Data Form</h5>
        <div class="mt-4">
            <a href="/elapor/requestdata">
                <span class="px-4 py-2 bg-redColor text-white hover:bg-redColorAlt">Click Here</span>
            </a>
        </div>
    </div>
</section>