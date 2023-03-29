<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    {{-- Tailwind --}}
    @vite('resources/css/app.css')

    {{-- Swiper CSS --}}
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />

    {{-- Font Google --}}
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    {{-- Boxicons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    @yield('bodyMain')

    {{-- My Script --}}
    <script src="/js/myscript.js"></script>

    {{-- Swiper JS --}}
    <script src="js/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        let swiperHeroBanner = new Swiper(".hero-banner", {
            spaceBetween: 30,
            effect: "fade",
            centeredSlides: true,
            autoplay: {
                delay: 10000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
        let swiperTestimonials = new Swiper('.testimonials-list', {
            slidesPerView: 1,
            grabCursor: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            },
            on:{
                slideChange:function(){
                    // remove active class from all slides
                    $('.swiper-slide').removeClass('swiper-slide-active');

                    // add active class to current slide
                    $('.swiper-slide').eq(swiperTestimonials.activeIndex).addClass('swiper-slide-active');
                }
            }
        });
        let swiperBlogs = new Swiper(".blogs-list", {
            slidesPerView: 1,
            centeredSlides: true,
            grabCursor: true,
            spaceBetween: 15,
            loop: true,
            autoplay: {
                delay: 10000,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 3
                },
                1024: {
                    slidesPerView: 4
                }
            }
        })
    </script>
</body>

</html>