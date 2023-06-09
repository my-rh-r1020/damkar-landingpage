/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                whiteColorAlt: "#d2d3d5",
                greyColor: "#848484",
                greyColorAlt: "#a5a3a3",
                lightGrey: "#FAF8F9",
                blackColor: "#020202",
                redColor: "#CB1330",
                redColorAlt: "#E60F32",
                darkRedColor: "#850000",
                darkRedColorAlt: "#C21010",
                greenColor: "#41a34c",
                bgGreyColor: "#faf8f8",
            },
            fontFamily: {
                poppins: "Poppins",
                bebasNeue: "Bebas Neue",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
