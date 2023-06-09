const navToggle = document.getElementById("nav-toggle"),
    sidebar = document.querySelector("#sidebar"),
    closeBtn = document.querySelector("#close-btn"),
    searchBtn = document.querySelector("#search-btn"),
    searchForm = document.querySelector("#search-form"),
    searchCloseBtn = document.querySelector("#search-close-btn"),
    accordionItems = document.querySelectorAll(".accordion-item"),
    videoBtn = document.querySelector("#video-btn"),
    videoPopUp = document.querySelector("#damkarplay"),
    videoCloseBtn = document.querySelector("#video-close-btn");

// Hamburger & Sidebar
navToggle.addEventListener("click", () => {
    sidebar.classList.remove("hidden");
});

closeBtn.addEventListener("click", () => {
    sidebar.classList.add("hidden");
});

// Search Form
// searchBtn.addEventListener("click", () => {
//     searchForm.classList.remove("hidden");
// });

searchCloseBtn.addEventListener("click", () => {
    searchForm.classList.add("hidden");
});

// Youtube Video
videoBtn.addEventListener("click", () => {
    videoPopUp.classList.remove("hidden");
});

videoCloseBtn.addEventListener("click", () => {
    videoPopUp.classList.add("hidden");
});

// Accordion
accordionItems.forEach((item) => {
    item.addEventListener("click", () => {
        const accordionSVG = item.querySelector(".lineHidden"),
            toggleAccordion = item.querySelector(".toggleAccordion");

        toggleAccordion.classList.toggle("hidden");
        accordionSVG.classList.toggle("hidden");
    });
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

// Back to Top Button
window.onscroll = function () {
    const scrollY = window.pageYOffset,
        header = document.querySelector("header"),
        fixedNav = header.offsetTop,
        toTopBtn = document.querySelector("#to-top");

    if (scrollY > fixedNav) {
        toTopBtn.classList.remove("hidden");
        toTopBtn.classList.add("flex");
    } else {
        toTopBtn.classList.add("hidden");
        toTopBtn.classList.remove("flex");
    }
};
