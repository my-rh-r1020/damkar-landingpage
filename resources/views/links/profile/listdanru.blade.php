<section class="section-layout bg-[#FAF8F9]">
    <div class="main-layout">
        <div class="container-layout">
            <div class="breadcrumbs-container">
                <a href="/" class="breadcrumbs-link">Home</a>
                <span>> <a href="/profile" class="breadcrumbs-link">Profil</a></span>
                <span class="breadcrumbs-link-active">> Danru</span>
            </div>
            <div class="title-main text-center">
                <h3 class="font-bebasNeue text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl">Daftar Anggota <br>Pemadam Kebakaran dan Penyelamatan</h3>
            </div>
            {{-- <div class="mt-10">
                <h4 class="font-bebasNeue text-center text-xl md:text-2xl xl:text-3xl">Regu 1 - Pos Damkar Suka Berenang</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-8 mt-6">
                    <div class="rounded-md text-center">
                        <img src="images/bg-user.png" alt="profil-danru" class="w-[50%] rounded-full mx-auto mb-4">
                        <span class="font-bebasNeue tracking-widest text-xl">AGUS ALFIAN</span>
                    </div>
                    <div class="rounded-md text-center">
                        <img src="images/bg-user.png" alt="profil-danru" class="w-[50%] rounded-full mx-auto mb-4">
                        <span class="font-bebasNeue tracking-widest text-xl">R.FIRMANSYAH</span>
                    </div>
                    <div class="rounded-md text-center">
                        <img src="images/bg-user.png" alt="profil-danru" class="w-[50%] rounded-full mx-auto mb-4">
                        <span class="font-bebasNeue tracking-widest text-xl">HARYANTO GITARA</span>
                    </div>
                    <div class="rounded-md text-center">
                        <img src="images/bg-user.png" alt="profil-danru" class="w-[50%] rounded-full mx-auto mb-4">
                        <span class="font-bebasNeue tracking-widest text-xl">RIZWAN,S.AK</span>
                    </div>
                    <div class="rounded-md text-center">
                        <img src="images/bg-user.png" alt="profil-danru" class="w-[50%] rounded-full mx-auto mb-4">
                        <span class="font-bebasNeue tracking-widest text-xl">WENDY PRASETYA,SH</span>
                    </div>
                </div>
            </div>
            <div class="mt-14">
                <h4 class="font-bebasNeue text-center text-xl md:text-2xl xl:text-3xl">Regu 2 - Pos Damkar Suka Berenang</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-8 mt-6">
                    <div class="rounded-md text-center">
                        <img src="images/bg-user.png" alt="profil-danru" class="w-[50%] rounded-full mx-auto mb-4">
                        <span class="font-bebasNeue tracking-widest text-xl">RUSNI</span>
                    </div>
                    <div class="rounded-md text-center">
                        <img src="images/bg-user.png" alt="profil-danru" class="w-[50%] rounded-full mx-auto mb-4">
                        <span class="font-bebasNeue tracking-widest text-xl">M.REZA SAMUDERA</span>
                    </div>
                    <div class="rounded-md text-center">
                        <img src="images/bg-user.png" alt="profil-danru" class="w-[50%] rounded-full mx-auto mb-4">
                        <span class="font-bebasNeue tracking-widest text-xl">TRI HARTANTO</span>
                    </div>
                    <div class="rounded-md text-center">
                        <img src="images/bg-user.png" alt="profil-danru" class="w-[50%] rounded-full mx-auto mb-4">
                        <span class="font-bebasNeue tracking-widest text-xl">ZULKIFRI JULIANSYAH</span>
                    </div>
                    <div class="rounded-md text-center">
                        <img src="images/bg-user.png" alt="profil-danru" class="w-[50%] rounded-full mx-auto mb-4">
                        <span class="font-bebasNeue tracking-widest text-xl">MANGASAN SITINJAK</span>
                    </div>
                </div>
            </div> --}}
            @foreach($lists as $list)
            <div class="mt-14">
                <h4 class="font-bebasNeue text-center text-xl md:text-2xl xl:text-3xl">{{ $list['regu'] }}</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-8 mt-6">
                    @foreach($list['anggota'] as $member)
                    <div class="rounded-md text-center">
                        <img src="images/{{ $member['profil-img'] }}" alt="profil-danru" class="w-[50%] rounded-full mx-auto mb-4">
                        <span class="font-bebasNeue tracking-widest uppercase text-xl">{{ $member['nama'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>