<section class="py-[90px] bg-bgGreyColor">
    <div class="main-layout">
        <div class="title-main text-center">
            <h6 class="text-subtitle">{{ $subServices }}</h6>
            <h3 class="text-title">{{ $titleServices }}</h3>
        </div>
        <div class="services-data">
            <div class="services-column">
                <a href="#" target="_blank">
                    <div class="services-card">
                        <img src="icons/1-pemadam.png" alt="emergency-help" class="mx-auto h-[90px]">
                        <div class="services-text-main">
                            <h4 class="services-title">Emergency Help</h4>
                            <span class="services-subtitle">Sed do elusm ad tempor</span>
                        </div>
                        <div class="services-point">
                            {{-- <div class="services-point-icon"></div>
                            <div class="services-point-icon"></div>
                            <div class="services-point-icon"></div> --}}
                            <span class="services-point-icon"></span>
                            <span class="services-point-icon"></span>
                            <span class="services-point-icon"></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="services-column">
                <a href="#" target="_blank">
                    <div class="services-card">
                        <img src="icons/2-pencegahan.png" alt="smoke-alarms" class="mx-auto h-[90px]">
                        <div class="services-text-main">
                            <h4 class="services-title">Smoke Alarms</h4>
                            <span class="services-subtitle">Sed do elusm ad tempor</span>
                        </div>
                        <div class="services-point">
                            <span class="services-point-icon"></span>
                            <span class="services-point-icon"></span>
                            <span class="services-point-icon"></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="services-column">
                <a href="#" target="_blank">
                    <div class="services-card">
                        <img src="icons/3-penyelamatan.png" alt="fire-extinguisher" class="mx-auto h-[90px]">
                        <div class="services-text-main">
                            <h4 class="services-title">Fire Statements</h4>
                            <span class="services-subtitle">Sed do elusm ad tempor</span>
                        </div>
                        <div class="services-point">
                            <span class="services-point-icon"></span>
                            <span class="services-point-icon"></span>
                            <span class="services-point-icon"></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="services-column">
                <a href="#" target="_blank">
                    <div class="services-card">
                        <img src="icons/4-penanganan.png" alt="fire-stations" class="mx-auto h-[90px]">
                        <div class="services-text-main">
                            <h4 class="services-title">Fire Stations</h4>
                            <span class="services-subtitle">Sed do elusm ad tempor</span>
                        </div>
                        <div class="services-point">
                            <span class="services-point-icon"></span>
                            <span class="services-point-icon"></span>
                            <span class="services-point-icon"></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    {{-- Services Images --}}
    <div class="pt-[90px] flex flex-wrap">
        <div class="services-gallery-data">
            <a href="#" target="_blank">
                <div class="relative">
                    <img src="images/response-time.jpg" alt="response-time" class="services-gallery-images">
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
                                <span class="services-gallery-title">Response Time</span>
                                <p class="services-gallery-subtitle">Natus error sit voluptatem</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="services-gallery-data">
            <a href="#" target="_blank">
                <div class="relative">
                    <img src="images/safety-education.jpg" alt="safety-education" class="services-gallery-images">

                    <div class="services-gallery-bg">
                        <div class="services-gallery-text">
                            <div class="text-center">
                                <span class="services-gallery-title">Safety Education</span>
                                <p class="services-gallery-subtitle">Natus error sit voluptatem</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="services-gallery-data">
            <a href="#" target="_blank">
                <div class="relative">
                    <img src="images/alarm-inspection.jpg" alt="alarm-inspection" class="services-gallery-images">

                    <div class="services-gallery-bg">
                        <div class="services-gallery-text">
                            <div class="text-center">
                                <span class="services-gallery-title">Alarm Inspection</span>
                                <p class="services-gallery-subtitle">Natus error sit voluptatem</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="services-gallery-data">
            <a href="#" target="_blank">
                <div class="relative">
                    <img src="images/effective-methods.jpg" alt="effective-methods" class="services-gallery-images">

                    <div class="services-gallery-bg">
                        <div class="services-gallery-text">
                            <div class="text-center">
                                <span class="services-gallery-title">Effective Methods</span>
                                <p class="services-gallery-subtitle">Natus error sit voluptatem</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    {{-- Services Instructions --}}
    <div class="pt-[90px]">
        <div class="main-layout flex flex-wrap w-full">
            <div class="w-full px-[15px] md:w-1/2 lg:w-1/3">
                <div class="title-main">
                    <h3 class="text-title">We Help Other</h3>
                </div>
            </div>
        </div>
    </div>
</section>