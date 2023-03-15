/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                greyColor: "#848484",
                blackColor: "#020202",
                redColor: "#CB1330",
                bgGreyColor: "#faf8f8",
            },
        },
    },
    plugins: [],
};
