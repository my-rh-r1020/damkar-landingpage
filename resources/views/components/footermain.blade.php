<footer class="pt-[70px] pb-2 bg-blackColor">
    <div class="px-[50px]">
        <div class="px-[15px] gap-10 flex flex-wrap">
            <div class="w-full lg:w-5/12">
                <div class="flex flex-wrap items-center text-lg">
                    <img src="/images/logo-damkar.png" alt="damkar-logo" class="w-[70px]">
                    <span class="uppercase font-bebasNeue ml-[6px] leading-none text-white">Dinas Pemadam Kebakaran<br> dan Penyelamatan</span>
                </div>
                <div class="pt-6">
                    <div class="flex gap-2 items-center">
                        <i class='bx bxs-map text-redColorAlt text-xl'></i>
                        <p class="text-white text-justify">Jl. Ir. Sutami No. 65 Kota Tanjung Pinang, Kepulauan Riau 29112</p>
                    </div>
                    <div class="flex gap-2 my-2 items-center">
                        <i class='bx bxs-phone-call text-redColorAlt text-xl'></i>
                        <a href="tel:077124949" class="text-white">0771 - 24949</a>
                    </div>
                    <div class="flex gap-2 items-center">
                        <i class='bx bxl-gmail text-redColorAlt text-xl'></i>
                        <a href="mailto:damkar.penyelamatan.tpi@gmail.com" class="text-white">damkar.penyelamatan.tpi@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-3/12">
                <h4 class="text-white font-semibold text-lg mt-2">Tautan</h4>
                <div class="pt-3 text-whiteColorAlt font-bebasNeue text-lg">
                    <ul>
                        <li><a href="/" class="footer-menu">Home</a></li>
                        <li><a href="#about" class="footer-menu">About Us</a></li>
                        <li><a href="#contact" class="footer-menu">Contact</a></li>
                        <li><a href="#service" class="footer-menu">Our Services</a></li>
                        <li><a href="#survey" class="footer-menu">Survei Kepuasan</a></li>
                        <li><a href="#berita" class="footer-menu">Berita</a></li>
                    </ul>
                </div>
            </div>
            <div class="w-full lg:w-3/12">
                <div class="mb-4">
                    <h4 class="text-white font-semibold text-lg mt-2">Media Sosial</h4>
                    <div class="pt-3">
                        <a href="https://www.facebook.com/profile.php?id=100064204235419" target="_blank">
                            <i class='bx bxl-facebook footer-social-icons hover:text-[#1877F2]'></i>
                        </a>
                        <a href="https://www.instagram.com/tanjungpinang.fire/" target="_blank">
                            <i class='bx bxl-instagram footer-social-icons hover:text-[#E4405F]'></i>
                        </a>
                        <a href="https://www.youtube.com/@tanjungpinangfire" target="_blank">
                            <i class='bx bxl-youtube footer-social-icons hover:text-[#FF0000]'></i>
                        </a>
                    </div>
                </div>
                <div class="mt-8">
                    <h4 class="text-white font-semibold text-lg mt-2">Link</h4>
                    <div class="flex pt-3 gap-2 items-center">
                        <i class='bx bx-world text-redColorAlt text-xl'></i>
                        <a href="https://www.tanjungpinangkota.go.id/" class="text-whiteColorAlt hover:text-white">tanjungpinangkota.go.id</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-14 pb-2 text-center">
            <span class="text-whiteColorAlt text-xs lg:text-[13px] font-bold">&#169; 2023 <span class="hover:text-redColor">Dinas Pemadam Kebakaran dan Penyelamatan</span></span>
        </div>
    </div>
</footer>

{{-- Emergency Call --}}
<div class="fixed z-10 bottom-6 left-0 right-0">
    <div class="bg-redColorAlt mb-1 w-44 p-2 mx-auto text-center rounded-md hidden transition" id="emergency-card">
        <span class="uppercase text-white xl:text-lg font-semibold">Emergency Call</span>
    </div>
    <a href="tel:077124949" class="bg-[#000BED] w-16 h-16 rounded-full mx-auto flex items-center justify-center transition duration-300 hover:scale-110" id="emergency-btn">
        <i class='bx bxs-phone-call text-redColorAlt text-3xl'></i>
    </a>
</div>

{{-- Back To Top --}}
<a href="#" class="fixed z-10 bottom-4 right-4 w-12 h-12 rounded-full bg-redColor items-center justify-center hidden" id="to-top">
    <i class='bx bx-arrow-back text-white text-xl rotate-90 transition hover:-translate-y-1'></i>
</a>