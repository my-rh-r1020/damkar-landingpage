<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing | DAMKAR</title>

    {{-- Tailwind --}}
    @vite('resources/css/app.css')

    {{-- Font Google --}}
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <header></header>

    {{-- Hero Banner --}}
    <section></section>

    {{-- Contact Us --}}
    <section class="py-[90px] bg-white">
        <div class="px-[50px] flex">
            <div class="contact-column lg:w-1/3">
                <div class="title-main">
                    <h6 class="text-subtitle">{{ $subContact }}</h6>
                    <h3 class="text-title">{{ $titleContact }}</h3>
                </div>
                <div class="mb-[40px]">
                    <span class="text-blackColor text-[22px]">{{ $spanContact }}</span>
                    <p class="text-[17px] text-greyColor mt-[30px]">{{ $descContact }}</p>
                </div>
                <div>
                    <a href="#" class="contact-button">Get In Touch</a>
                    <div class="mt-[10px]">
                        <span>Call Icon</span>
                        <span class="font-bebasNeue">0 800 555 44 33</span>
                    </div>
                </div>
            </div>
            <div class="contact-column lg:w-2/3">
                <img src="" alt="contact-image">
                <img src="" alt="contact-image">
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section class="py-[90px] bg-bgGreyColor">
        <div class="px-[50px]">
            <div class="title-main text-center">
                <h6 class="text-subtitle">{{ $subServices }}</h6>
                <h3 class="text-title">{{ $titleServices }}</h3>
            </div>
            <div class="services-data">
                <div class="services-column">
                    <a href="#" target="_blank">
                        <div class="services-card">
                            {{-- Icon --}}
                            <h4 class="services-title">Emergency Help</h4>
                            <span class="services-subtitle">Sed do elusm ad tempor</span>
                        </div>
                    </a>
                </div>
                <div class="services-column">
                    <a href="#" target="_blank">
                        <div class="services-card">
                            {{-- Icon --}}
                            <h4 class="services-title">Smoke Alarms</h4>
                            <span class="services-subtitle">Sed do elusm ad tempor</span>
                        </div>
                    </a>
                </div>
                <div class="services-column">
                    <a href="#" target="_blank">
                        <div class="services-card">
                            {{-- Icon --}}
                            <h4 class="services-title">Fire Statements</h4>
                            <span class="services-subtitle">Sed do elusm ad tempor</span>
                        </div>
                    </a>
                </div>
                <div class="services-column">
                    <a href="#" target="_blank">
                        <div class="services-card">
                            {{-- Icon --}}
                            <h4 class="services-title">Fire Stations</h4>
                            <span class="services-subtitle">Sed do elusm ad tempor</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        {{-- Services Images --}}
        <div class="pt-[90px] flex flex-wrap">
            <div class="services-gallery-data">
                <a href="#" target="_blank">
                    <img src="images/response-time.jpg" alt="response-time" class="services-gallery-images">
                </a>
            </div>
            <div class="services-gallery-data">
                <a href="#" target="_blank">
                    <img src="images/safety-education.jpg" alt="safety-education" class="services-gallery-images">
                </a>
            </div>
            <div class="services-gallery-data">
                <a href="#" target="_blank">
                    <img src="images/alarm-inspection.jpg" alt="alarm-inspection" class="services-gallery-images">
                </a>
            </div>
            <div class="services-gallery-data">
                <a href="#" target="_blank">
                    <img src="images/effective-methods.jpg" alt="effective-methods" class="services-gallery-images">
                </a>
            </div>
        </div>
    </section>

    {{-- Prevention Services --}}
    <section class="py-[90px] bg-white">
        <div class="px-[50px] flex flex-wrap">
            <div class="w-full md:w-1/2 lg:w-1/3">
                <img src="" alt="prevention-thumbnail">
            </div>
            <div class="w-full md:w-1/2 lg:w-2/3 lg:px-[30px]">
                <div class="text-main mt-[75px]">
                    <h6 class="text-subtitle">{{ $subPrevention }}</h6>
                    <h3 class="text-title">{{ $titlePrevention }}</h3>
                </div>
                <div class="pt-[25px]">
                    <p class="text-greyColor">{{ $descPrevention }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    <section class="py-[90px] bg-bgGreyColor">
        <div class="px-[50px]">
            <div class="title-main text-center">
                <h6 class="text-subtitle">{{ $subTestimonials }}</h6>
                <h3 class="text-title">{{ $titleTestimonials }}</h3>
            </div>
            <div class="testimonials-data">
                <div class="testimonials-column">
                    <div class="testimonials-card bg-white">
                        <p class="testimonials-card-title text-blackColor">{{ $descTestimonials }}</p>
                    </div>
                </div>
                <div class="testimonials-column">
                    <div class="testimonials-card bg-redColorAlt">
                        <p class="testimonials-card-title text-white">{{ $descTestimonials }}</p>
                    </div>
                </div>
                <div class="testimonials-column">
                    <div class="testimonials-card bg-white">
                        <p class="testimonials-card-title text-blackColor">{{ $descTestimonials }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Blog --}}
    <section class="py-[90px]">
        <div class="px-[50px]">
            <div class="title-main text-center">
                <h6 class="text-subtitle">{{ $subBlog }}</h6>
                <h3 class="text-title">{{ $titleBlog }}</h3>
            </div>
            <div class="pt-[35px]"></div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="pt-[70px] pb-[20px] bg-blackColor">
        <div class="px-[50px]">
            <div class="px-[15px]">
                <img src="images/logo-fire-dark.png" alt="logo-damkar" class="mx-auto">
            </div>
        </div>
    </footer>
</body>

</html>