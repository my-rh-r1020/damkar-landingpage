<section class="section-layout bg-bgGreyColor">
    <div class="main-layout">
        <div class="title-main text-center">
            <h6 class="text-subtitle">{{ $subServices }}</h6>
            <h3 class="text-title leading-none">Layanan Utama <br> Dinas Pemadam Kebakaran dan Penyelamatan</h3>
        </div>
        <div class="services-data">
            @foreach($serviceItems as $sItem)
            <div class="services-column">
                <a href="{{ $sItem['url'] }}" target="_blank">
                    <div class="services-card">
                        <img src="icons/{{ $sItem['icon-services'] }}" alt="emergency-help" class="mx-auto h-[90px]">
                        <div class="services-text-main">
                            <h4 class="services-title">{{ $sItem['services-title'] }}</h4>
                            <span class="services-subtitle">{{ $sItem['services-subtitle'] }}</span>
                        </div>
                        <div class="services-point gap-1 text-[8px] text-[#D8D8D8] hover:text-redColor">
                            <i class='bx bxs-square'></i>
                            <i class='bx bxs-square'></i>
                            <i class='bx bxs-square'></i>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Services Images --}}
    <div class="section-layout flex flex-wrap">
        @foreach($gallerys as $gallery)
        <div class="services-gallery-data">
            <a href="{{ $gallery['url'] }}" target="_blank">
                <div class="relative">
                    <img src="images/{{ $gallery['image-banner'] }}" alt="response-time" class="services-gallery-images">
                    {{-- <div class="absolute inset-0 bg-black opacity-30 transition duration-500 ease-in-out hover:opacity-40 hover:bg-red-600"></div>
                    <div class="absolute inset-0 flex items-center justify-center text-white transition duration-500 ease-in-out transform hover:-translate-y-2">
                        <p class="text-3xl font-bold">Teks di atas gambar</p>
                    </div> --}}
                    {{-- <div class="absolute inset-0 bg-black bg-opacity-30 hover:opacity-[0.85] hover:bg-redColor transition duration-300 ease-in-out">
                        <div class="absolute inset-0 flex items-end justify-center text-white transition duration-500 ease-in-out transform hover:-translate-y-2">
                            <p class="text-2xl font-bebasNeue">Teks di atas gambar</p>
                        </div>
                    </div> --}}
                    <div class="services-gallery-bg">
                        <div class="services-gallery-text">
                            <div class="text-center">
                                <span class="services-gallery-title">{{ $gallery['gallery-title'] }}</span>
                                <p class="services-gallery-subtitle">{{ $gallery['gallery-subtitle'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>

    {{-- Services Instructions --}}
    <div class="main-layout flex flex-wrap w-full">
        <div class="w-full px-[15px] md:w-1/2 lg:w-5/12">
            <a href="#" class="flex flex-wrap items-center">
                <span class="px-4 py-[13px] rounded-full shadow-md shadow-slate-300">
                    <i class='bx bx-play text-[16px] lg:text-3xl'></i>
                </span>
            </a>
            <div class="title-main mt-[45px]">
                <h3 class="text-title leading-none">Mencegah Lebih Baik Dari <span class="text-redColorAlt">Memadamkan</span></h3>
            </div>
            {{-- Accordion --}}
            <div class="accordion">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button bg-gray-200 hover:bg-gray-300 focus:outline-none py-2 px-4 w-full text-left" type="button">
                      Item 1
                    </button>
                  </h2>
                  <div class="accordion-collapse">
                    <div class="accordion-body bg-white py-2 px-4">
                      Content for Item 1 goes here.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button bg-gray-200 hover:bg-gray-300 focus:outline-none py-2 px-4 w-full text-left" type="button">
                      Item 2
                    </button>
                  </h2>
                  <div class="accordion-collapse">
                    <div class="accordion-body bg-white py-2 px-4">
                      Content for Item 2 goes here.
                    </div>
                  </div>
                </div>
              </div>
              
        </div>
        <div class="w-full px-[15px] md:w-1/2 lg:w-7/12">
            <img src="images/prevention-img.jpg" alt="prevention-img" class="mx-auto">
        </div>
    </div>
</section>