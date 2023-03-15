<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing | DAMKAR</title>

    {{-- Tailwind --}}
    @vite('resources/css/app.css')
</head>

<body>
    <header></header>

    {{-- Hero Banner --}}
    <section></section>

    {{-- Contact Us --}}
    <section class="py-[90px] bg-white">
        <div class="px-[50px]">
            <div class="w-full md:w-1/2 lg:w-1/3 px-[15px]">
                <div class="title-main">
                    <h6 class="text-subtitle">{{ $subContact }}</h6>
                    <h3 class="text-title">{{ $titleContact }}</h3>
                </div>
                <div class="mb-[40px]">
                    <span class="text-blackColor text-[22px]">{{ $spanContact }}</span>
                    <p class="text-[17px] text-greyColor mt-[30px]">{{ $descContact }}</p>
                </div>
                <div>
                    <a href="#" class="uppercase pt-[15px] pb-[14px] px-[55px] bg-[#E60F32] text-white text-[17px]
                ">Get In Touch</a>
                    <div class="mt-[10px]">
                        <span>Call Icon</span>
                        <span>0 800 555 44 33</span>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-2/3 px-[15px]">

            </div>
        </div>
    </section>

    {{-- Services --}}
    <section class="py-[90px] bg-greyColor">
        <div class="px-[50px]">
            <div class="title-main text-center">
                <h6 class="text-subtitle">{{ $subServices }}</h6>
                <h3 class="text-title">{{ $titleServices }}</h3>
            </div>
            <div class="w-full">

            </div>
        </div>
    </section>
</body>

</html>