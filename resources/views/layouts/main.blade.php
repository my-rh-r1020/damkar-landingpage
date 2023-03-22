<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing | DAMKAR</title>

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
        let swiperTestimonials = new Swiper('.testi-swiper', {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        })
    </script>
</body>

</html>