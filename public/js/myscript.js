// Hamburger & Sidebar
const hamburger = document.querySelector("#hamburger");
const sidebar = document.querySelector("#sidebar");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("hamburger-active");
    sidebar.classList.remove("hidden");
});

// Close Button
const closeBtn = document.querySelector("#close-btn");

closeBtn.addEventListener("click", () => {
    sidebar.classList.add("hidden");
});
