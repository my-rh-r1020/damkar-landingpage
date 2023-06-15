{{-- <section class="main-section bg-white" id="survey">
    <div class="main-px">
        <div class="flex flex-wrap">
            <div class="w-full px-[15px] md:w-1/2 lg:w-5/12">
                <img src="/images/prevention-service.jpg" alt="prevention-thumbnail" class="mx-auto">
            </div>
            <div class="w-full px-[15px] md:w-1/2 lg:w-7/12 lg:px-[30px]">
                <div class="main-title mt-[75px]">
                    <h6 class="sub-text">{{ $subPrevention }}</h6>
                    <h3 class="title-text">Persentasi Pelayanan <span class="text-redColorAlt">Publik</span></h3>
                </div>
                <div>
                    <p class="text-greyColor">{{ $descPrevention }}</p>
                </div>
                <div class="mt-[32px] flex justify-start">
                    <div class="flex items-center justify-center" x-data="{ circumference: 2 * 22 / 7 * 120, percent: 80 }">
                        <svg class="transform -rotate-90 w-32 h-32">
                            <circle cx="60" cy="60" r="50" stroke="currentColor" stroke-width="10" fill="transparent" class="text-slate-400" />
        
                            <circle cx="60" cy="60" r="50" stroke="currentColor" stroke-width="10" fill="transparent" :stroke-dasharray="circumference" :stroke-dashoffset="circumference - percent / 100 * circumference" class="text-redColorAlt " />
                        </svg>
                        <span class="absolute text-3xl font-bebasNeue text-blackColor">75%</span>
                    </div>
                    <div class="flex items-center justify-center" x-data="{ circumference: 2 * 22 / 7 * 120, percent: 80 }">
                        <svg class="transform -rotate-90 w-32 h-32">
                            <circle cx="60" cy="60" r="50" stroke="currentColor" stroke-width="10" fill="transparent" class="text-slate-400" />
        
                            <circle cx="60" cy="60" r="50" stroke="currentColor" stroke-width="10" fill="transparent" :stroke-dasharray="circumference" :stroke-dashoffset="circumference - percent / 100 * circumference" class="text-redColorAlt " />
                        </svg>
                        <span class="absolute text-3xl font-bebasNeue text-blackColor">90%</span>
                    </div>
                    <div class="flex items-center justify-center" x-data="{ circumference: 2 * 22 / 7 * 120, percent: 80 }">
                        <svg class="transform -rotate-90 w-32 h-32">
                            <circle cx="60" cy="60" r="50" stroke="currentColor" stroke-width="10" fill="transparent" class="text-slate-400" />
        
                            <circle cx="60" cy="60" r="50" stroke="currentColor" stroke-width="10" fill="transparent" :stroke-dasharray="circumference" :stroke-dashoffset="circumference - percent / 100 * circumference" class="text-redColorAlt " />
                        </svg>
                        <span class="absolute text-3xl font-bebasNeue text-blackColor">88%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<x-layout class="bg-white">
    <div class="main-container flex flex-wrap">
        <div class="w-full px-[15px] md:w-1/2 lg:w-5/12">
            <img src="/images/prevention-service.jpg" alt="prevention-thumbnail" class="mx-auto">
        </div>
        <div class="w-full px-[15px] md:w-1/2 lg:w-7/12 lg:px-[30px]">
            <div class="main-title mt-[75px]">
                <h6 class="sub-text">{{ $subPrevention }}</h6>
                <h3 class="title-text">Persentasi Pelayanan <span class="text-redColorAlt">Publik</span></h3>
            </div>
            <div>
                <p class="text-greyColor">{{ $descPrevention }}</p>
            </div>
            <div class="mt-[32px] flex justify-start">
                <div class="flex items-center justify-center" x-data="{ circumference: 2 * 22 / 7 * 120, percent: 80 }">
                    <svg class="transform -rotate-90 w-32 h-32">
                        <circle cx="60" cy="60" r="50" stroke="currentColor" stroke-width="10" fill="transparent" class="text-slate-400" />
    
                        <circle cx="60" cy="60" r="50" stroke="currentColor" stroke-width="10" fill="transparent" :stroke-dasharray="circumference" :stroke-dashoffset="circumference - percent / 100 * circumference" class="text-redColorAlt " />
                    </svg>
                    <span class="absolute text-3xl font-bebasNeue text-blackColor">75%</span>
                </div>
                <div class="flex items-center justify-center" x-data="{ circumference: 2 * 22 / 7 * 120, percent: 80 }">
                    <svg class="transform -rotate-90 w-32 h-32">
                        <circle cx="60" cy="60" r="50" stroke="currentColor" stroke-width="10" fill="transparent" class="text-slate-400" />
    
                        <circle cx="60" cy="60" r="50" stroke="currentColor" stroke-width="10" fill="transparent" :stroke-dasharray="circumference" :stroke-dashoffset="circumference - percent / 100 * circumference" class="text-redColorAlt " />
                    </svg>
                    <span class="absolute text-3xl font-bebasNeue text-blackColor">90%</span>
                </div>
                <div class="flex items-center justify-center" x-data="{ circumference: 2 * 22 / 7 * 120, percent: 80 }">
                    <svg class="transform -rotate-90 w-32 h-32">
                        <circle cx="60" cy="60" r="50" stroke="currentColor" stroke-width="10" fill="transparent" class="text-slate-400" />
    
                        <circle cx="60" cy="60" r="50" stroke="currentColor" stroke-width="10" fill="transparent" :stroke-dasharray="circumference" :stroke-dashoffset="circumference - percent / 100 * circumference" class="text-redColorAlt " />
                    </svg>
                    <span class="absolute text-3xl font-bebasNeue text-blackColor">88%</span>
                </div>
            </div>
        </div>
    </div>
</x-layout>