{{-- <section class="main-section bg-white" id="contact">
    <div class="main-px">
        <div class="container-layout">
            <div class="flex flex-wrap">
                <div class="w-full px-[15px] md:w-1/2 lg:py-5 xl:py-24 2xl:py-28 lg:w-5/12">
                    <div class="main-title">
                        <h6 class="sub-text">{{ $subContact }}</h6>
                        <h3 class="title-text leading-none">{{ $titleContact }}</h3>
                    </div>
                    <div class="mb-10">
                        <span class="text-blackColor text-base lg:text-[22px]">{{ $spanContact }}</span>
                        <p class="text-sm lg:text-[17px] text-greyColor mt-[30px] text-justify">
                            Sampaikan Pengaduan Anda Melalui Fitur <span class="font-bold">E-Lapor Damkar</span> <br> Atau Dapat Menghubungi Kami Melalui <span class="font-bold">Call Center Damkar</span>
                        </p>
                    </div>
                    <div class="flex flex-wrap w-full">
                        <a href="/elapor" class="red-button mr-10 mb-2">E-Lapor</a>
                        <a href="tel:077124949" class="flex flex-wrap items-center">
                            <span class="contact-icon">
                                <i class='bx bx-phone-call text-2xl'></i>
                            </span>
                            <div>
                                <h5 class="text-base lg:text-lg text-redColorAlt font-semibold">Panggilan Darurat</h5>
                                <span class="text-sm lg:text-base font-bebasNeue">0771 - 24949</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-full px-[15px] md:w-1/2 lg:w-7/12 mt-[25px]">
                    <img src="/images/contact-img2.jpg" alt="contact-image" class="mx-auto">
                </div>
                <div class="w-full px-[15px] md:w-1/2 lg:w-7/12 mt-[25px] relative">
                    <img src="images/contact-img1.jpg" alt="contact-image" class="absolute top-0 right-0 pr-[15px] w-[210px] h-[242px] sm:w-[340px] sm:h-[392px] md:w-[279px] md:h-[322px] lg:w-[367px] lg:h-[423px] xl:w-[439px] xl:h-[506px] 2xl:w-[517px] 2xl:h-[595px]">
                    <img src="images/contact-img2.jpg" alt="contact-image" class="absolute top-28 left-0 pl-[15px] w-[160px] h-[164px] sm:w-[290px] sm:h-[297px] sm:top-[120px] md:w-[252px] md:h-[258px] lg:w-[331px] lg:h-[340px] lg:top-32 xl:w-[396px] xl:h-[406px] xl:top-40 2xl:w-[466px] 2xl:h-[478px] 2xl:top-52">
                    <img src="images/contact-img1.jpg" alt="contact-image" class="w-[46%] absolute top-0 right-0">
                    <img src="images/contact-img2.jpg" alt="contact-image" class="w-[46%] absolute bottom-0 left-0">
                </div>
            </div>
        </div>
    </div>
</section> --}}

<x-layout class="bg-white">
    <div class="main-container flex flex-wrap">
        <div class="w-full flex items-center px-[15px] md:w-1/2 lg:w-5/12">
            <div class="mb-6">
                <div class="main-title">
                    <h6 class="sub-text">{{ $subContact }}</h6>
                    <h3 class="title-text leading-none">{{ $titleContact }}</h3>
                </div>
                <div class="mb-12">
                    <span class="text-blackColor text-base lg:text-[22px]">{{ $spanContact }}</span>
                    <p class="text-sm lg:text-[17px] text-greyColor mt-[30px] text-justify">
                        Sampaikan Pengaduan Anda Melalui Fitur <span class="font-bold">E-Lapor Damkar</span> <br> Atau Dapat Menghubungi Kami Melalui <span class="font-bold">Call Center Damkar</span>
                    </p>
                </div>
                <div class="flex flex-wrap">
                    <a href="http://ppid.tanjungpinangkota.go.id/" class="red-button mr-10 mb-2">E-Lapor</a>
                    <a href="tel:077124949" class="flex flex-wrap items-center">
                        <span class="contact-icon">
                            <i class='bx bx-phone-call text-2xl'></i>
                        </span>
                        <div>
                            <h5 class="text-base lg:text-lg text-redColorAlt font-semibold">Panggilan Darurat</h5>
                            <span class="text-sm lg:text-base font-bebasNeue">0771 - 24949</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-7/12">
            <img src="/assets/images/webpages/contact-img2.jpg" alt="contact-image" class="mx-auto rounded-md">
        </div>
    </div>
</x-layout>