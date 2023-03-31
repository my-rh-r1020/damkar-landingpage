const hamburger = document.querySelector("#hamburger"),
    sidebar = document.querySelector("#sidebar"),
    closeBtn = document.querySelector("#close-btn"),
    searchBtn = document.querySelector("#search-btn"),
    searchForm = document.querySelector("#search-form"),
    searchCloseBtn = document.querySelector("#search-close-btn");

// Hamburger & Sidebar
hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("hamburger-active");
    sidebar.classList.remove("hidden");
});

// Close Button
closeBtn.addEventListener("click", () => {
    sidebar.classList.add("hidden");
});

// Search Form & Button
searchBtn.addEventListener("click", () => {
    searchForm.classList.remove("hidden");
});

// Close Button Search
searchCloseBtn.addEventListener("click", () => {
    searchForm.classList.add("hidden");
});

// Slider Testimonials
const sliderTestimonial = document.querySelector("#testimonial-slider"),
    testimonialSwiper = sliderTestimonial.querySelectorAll(".swiper-slide");

testimonialSwiper.forEach((slide) => {
    slide.addEventListener("click", () => {
        // hapus kelas "active" dari semua slide
        testimonialSwiper.forEach((s) => s.classList.remove("active"));

        // tambahkan kelas "active" pada slide yang di-klik
        slide.classList.add("active");
    });
});
