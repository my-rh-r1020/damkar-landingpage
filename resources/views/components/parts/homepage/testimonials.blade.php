<x-layout class="bg-bgGreyColor">
    <div class="main-container">
        <div class="main-title text-center">
            <h6 class="sub-text">{{ $subTestimonials }}</h6>
            <h3 class="title-text">Apa Yang Dikatakan <span class="text-redColorAlt">Publik</span></h3>
        </div>
        <div class="swiper testimonials-list" id="testimonial-slider">
            <div class="swiper-wrapper mb-20">
                <div class="swiper-slide testimonials-column">
                    <div class="testimonials-card bg-white">
                        <i class='bx bxs-quote-alt-right rotate-180 text-3xl text-redColorAlt'></i>
                        <p class="testimonials-card-title text-blackColor">{{ $descTestimonials }}</p>
                    </div>
                    <div class="testimonials-user-card">
                        <img src="/assets/images/webpages/bg-user.png" alt="user-profile" class="testimonials-user-img">
                        <div class="testimonials-user-profile">
                            <h5 class="testimonials-user-name">User 1</h5>
                            <span class="testimonials-user-job">Auditor</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide testimonials-column swiper-slide-active">
                    <div class="testimonials-card">
                        <i class='bx bxs-quote-alt-right testimonials-quote'></i>
                        <p class="testimonials-card-title text-blackColor">{{ $descTestimonials }}</p>
                    </div>
                    <div class="testimonials-user-card">
                        <img src="/assets/images/webpages/bg-user.png" alt="user-profile" class="testimonials-user-img">
                        <div class="testimonials-user-profile">
                            <h5 class="testimonials-user-name">User 2</h5>
                            <span class="testimonials-user-job">Sistem Analis</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide testimonials-column">
                    <div class="testimonials-card">
                        <i class='bx bxs-quote-alt-right testimonials-quote'></i>
                        <p class="testimonials-card-title text-blackColor">{{ $descTestimonials }}</p>
                    </div>
                    <div class="testimonials-user-card">
                        <img src="/assets/images/webpages/bg-user.png" alt="user-profile" class="testimonials-user-img">
                        <div class="testimonials-user-profile">
                            <h5 class="testimonials-user-name">User 3</h5>
                            <span class="testimonials-user-job">CEO</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide testimonials-column">
                    <div class="testimonials-card">
                        <i class='bx bxs-quote-alt-right testimonials-quote'></i>
                        <p class="testimonials-card-title text-blackColor">{{ $descTestimonials }}</p>
                    </div>
                    <div class="testimonials-user-card">
                        <img src="/assets/images/webpages/bg-user.png" alt="user-profile" class="testimonials-user-img">
                        <div class="testimonials-user-profile">
                            <h5 class="testimonials-user-name">User 4</h5>
                            <span class="testimonials-user-job">CTO</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide testimonials-column">
                    <div class="testimonials-card">
                        <i class='bx bxs-quote-alt-right testimonials-quote'></i>
                        <p class="testimonials-card-title text-blackColor">{{ $descTestimonials }}</p>
                    </div>
                    <div class="testimonials-user-card">
                        <img src="/assets/images/webpages/bg-user.png" alt="user-profile" class="testimonials-user-img">
                        <div class="testimonials-user-profile">
                            <h5 class="testimonials-user-name">User 5</h5>
                            <span class="testimonials-user-job">Manager</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide testimonials-column">
                    <div class="testimonials-card">
                        <i class='bx bxs-quote-alt-right testimonials-quote'></i>
                        <p class="testimonials-card-title text-blackColor">{{ $descTestimonials }}</p>
                    </div>
                    <div class="testimonials-user-card">
                        <img src="/assets/images/webpages/bg-user.png" alt="user-profile" class="testimonials-user-img">
                        <div class="testimonials-user-profile">
                            <h5 class="testimonials-user-name">User 6</h5>
                            <span class="testimonials-user-job">Supervisor</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</x-layout>

{{-- JS Scripts --}}
@push('scripts')
<script>
    const swiperTestimonials = new Swiper('.testimonials-list', {
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
                ('.swiper-slide').removeClass('swiper-slide-active');

                // add active class to current slide
                ('.swiper-slide').eq(swiperTestimonials.activeIndex).addClass('swiper-slide-active');
            }
        }
    });
</script>
@endpush