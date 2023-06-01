const hamburger = document.querySelector("#hamburger"),
    sidebar = document.querySelector("#sidebar"),
    closeBtn = document.querySelector("#close-btn"),
    searchBtn = document.querySelector("#search-btn"),
    searchForm = document.querySelector("#search-form"),
    searchCloseBtn = document.querySelector("#search-close-btn"),
    accordionItems = document.querySelectorAll(".accordion-item"),
    videoBtn = document.querySelector("#video-btn"),
    videoPopUp = document.querySelector("#damkarplay"),
    videoCloseBtn = document.querySelector("#video-close-btn"),
    emergencyCard = document.querySelector("#emergency-card"),
    emergencyBtn = document.querySelector("#emergency-btn");

// Hamburger & Sidebar
hamburger.addEventListener("click", () => {
    sidebar.classList.remove("hidden");
});

closeBtn.addEventListener("click", () => {
    sidebar.classList.add("hidden");
});

// Search Form
searchBtn.addEventListener("click", () => {
    searchForm.classList.remove("hidden");
});

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

// Emergency Call Button
emergencyBtn.addEventListener("mouseenter", () => {
    emergencyCard.classList.remove("hidden");
});

emergencyBtn.addEventListener("mouseleave", () => {
    emergencyCard.classList.add("hidden");
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

// Nav Menu
const dropdownLink = document.querySelector("#dropdown-link"),
    dropdownMenu = document.querySelector("#dropdown-menu");

dropdownLink.addEventListener("mouseenter", () => {
    dropdownMenu.classList.remove("hidden");
});

dropdownLink.addEventListener("mouseleave", (e) => {
    if (e.target != dropdownLink && e.target != dropdownMenu) {
        dropdownMenu.classList.add("hidden");
    }
});

// window.addEventListener("mouseleave", (e) => {
//     if (e.target != dropdownLink && e.target != dropdownMenu) {
//         dropdownMenu.classList.add("hidden");
//     }
// });

// dropdownLink.addEventListener("mouseleave", () => {
//     dropdownMenu.classList.add("hidden");
// });
