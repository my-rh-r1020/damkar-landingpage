<footer class="pt-[70px] bg-blackColor">
    <div class="px-[50px]">
        <div class="px-[15px] pb-14 gap-10 flex flex-wrap">
            <div class="w-full lg:w-5/12">
                <div class="flex flex-wrap items-center text-lg">
                    <img src="/images/logo-tpi-damkar.png" alt="damkar-logo" class="w-[130px]">
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
                <h4 class="footer-header">Tentang Kami</h4>
                <ul class="pt-3 text-whiteColorAlt font-bebasNeue text-lg">
                    <li><a href="/" class="footer-menu">Beranda</a></li>
                    <li><a href="/profile" class="footer-menu">Profil</a></li>
                    <li><a href="/berita" class="footer-menu">Berita</a></li>
                    <li><a href="/gallery" class="footer-menu">Gallery</a></li>
                    <li><a href="/redkar" class="footer-menu">Red Kar</a></li>
                </ul>
            </div>
            <div class="w-full lg:w-3/12">
                <div class="mb-4">
                    <h4 class="footer-header">Media Sosial</h4>
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
                    <h4 class="footer-header">Link Terkait</h4>
                    <div class="flex pt-3 gap-2 items-center">
                        <i class='bx bx-world text-redColorAlt text-xl'></i>
                        <a href="https://www.tanjungpinangkota.go.id/" class="text-whiteColorAlt hover:text-white">tanjungpinangkota.go.id</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-2 text-center bg-[#181823]">
        <span class="text-whiteColorAlt text-xs lg:text-[13px] font-bold">&#169; <?php echo date('Y')?> Dinas Pemadam Kebakaran dan Penyelamatan</span>
    </div>
</footer>

{{-- Emergency Call --}}
<div class="fixed z-20 bottom-6 left-0 right-0">
    <a href="tel:077124949" class="emergency-btn" data-tooltip-target="tooltip-default">
        <i class='bx bxs-phone-call text-redColorAlt text-3xl'></i>
    </a>
    <div id="tooltip-default" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-redColorAlt rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
        Emergency Call
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
</div>

{{-- Back To Top --}}
<a href="#" class="fixed z-10 bottom-4 right-4 w-12 h-12 rounded-full bg-redColor items-center justify-center hidden" id="to-top">
    <i class='bx bx-arrow-back text-white text-xl rotate-90 transition hover:-translate-y-1'></i>
</a>