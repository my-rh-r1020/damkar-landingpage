<section class="section-layout bg-bgGreyColor" id="service">
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
    <div class="main-layout">
        <div class="flex flex-wrap">
            <div class="w-full px-[15px] md:w-1/2 lg:w-5/12">
                <button id="video-btn" name="video-btn" type="button" class="px-4 py-[13px] rounded-full shadow-md shadow-slate-300 focus:outline-none">
                    <i class='bx bx-play text-[16px] lg:text-3xl'></i>
                </button>
                {{-- <a href="#damkarplay" class="flex items-center" id="videobtn">
                    <span class="px-4 py-[13px] rounded-full shadow-md shadow-slate-300">
                        <i class='bx bx-play text-[16px] lg:text-3xl'></i>
                    </span>
                </a> --}}
                <div class="title-main mt-[45px]">
                    <h3 class="text-title leading-none">Mencegah Lebih Baik Dari <span class="text-redColorAlt">Memadamkan</span></h3>
                </div>
                {{-- Accordion --}}
                <div class="accordion mb-10 divide-y-2" id="accordionFlush">
                    <div class="accordion-item cursor-pointer">
                        <div class="flex hover:bg-gray-300 focus:outline-none py-4 w-full text-left">
                            {{-- <i class='bx bx-plus text-lg scale-125 accIcon'></i> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path class="lineHidden" d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                             </svg>
                            <span class="text-lg ml-4 font-bebasNeue">Cara Mencegah Kebakaran Pada Rumah</span>
                        </div>
                        <div class="hidden toggleAccordion">
                            <div class="pb-2 text-justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic autem corporis sed, non cupiditate possimus nobis expedita mollitia dolorum est.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item cursor-pointer">
                        <div class="flex hover:bg-gray-300 focus:outline-none py-4 w-full text-left">
                            {{-- <i class='bx bx-plus text-lg scale-125 accIcon'></i> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path class="lineHidden" d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                             </svg>
                            <span class="text-lg ml-4 font-bebasNeue">Cara Mencegah Kebakaran Pada Rumah</span>
                        </div>
                        <div class="hidden toggleAccordion">
                            <div class="pb-2 text-justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic autem corporis sed, non cupiditate possimus nobis expedita mollitia dolorum est.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item cursor-pointer">
                        <div class="flex hover:bg-gray-300 focus:outline-none py-4 w-full text-left">
                            {{-- <i class='bx bx-plus text-lg scale-125 accIcon'></i> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path class="lineHidden" d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                             </svg>
                            <span class="text-lg ml-4 font-bebasNeue">Cara Mencegah Kebakaran Pada Rumah</span>
                        </div>
                        <div class="hidden toggleAccordion">
                            <div class="pb-2 text-justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic autem corporis sed, non cupiditate possimus nobis expedita mollitia dolorum est.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full px-[15px] md:w-1/2 lg:w-7/12">
                <div class="relative">
                    <div class="flex justify-end">
                        <img src="images/prevention-img.jpg" alt="prevention-img">
                    </div>
                    <div class="flex absolute bottom-6 left-6">
                        <div class="bg-redColorAlt mr-6">
                            <div class="px-8 py-7">
                                <h6 class="lg:text-xl font-bebasNeue text-white">Fire Fighters</h6>
                                <h3 class="lg:text-6xl font-bebasNeue text-white my-5">400+</h3>
                                <h6 class="lg:text-xl text-greyColorAlt">Lorem, ipsum dolor.</h6>
                            </div>
                        </div>
                        <div class="bg-blackColor">
                            <div class="px-8 py-7">
                                <h6 class="lg:text-xl font-bebasNeue text-white">Fire Stations</h6>
                                <h3 class="lg:text-6xl font-bebasNeue text-white my-5">13</h3>
                                <h6 class="lg:text-xl text-greyColorAlt">Lorem, ipsum dolor.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Youtube Popup --}}
<div class="services-video-popup hidden" id="damkarplay">
    <div class="fixed top-0 left-60 right-60 bottom-0 flex flex-col items-end justify-center">
        <button id="video-close-btn" name="video-close-btn" type="button" class="focus:outline-none scale-75">
            <span class="search-btn-close origin-top-left rotate-45"></span>
            <span class="search-btn-close scale-0"></span>
            <span class="search-btn-close origin-bottom-left -rotate-45"></span>
        </button>
        <div class="pt-1">
            <div class="bg-slate-200 p-2 rounded-xl">
                <iframe width="985" height="560" src="https://www.youtube.com/embed/w15dmqbGmNY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>