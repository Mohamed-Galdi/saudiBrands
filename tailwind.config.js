import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                pr: ["pr", "sans-serif"],
                sec: ["Almarai"],
            },
            colors: {
                pr_light: "#e1dcc9",
                pr: "#aebfaa",
                pr_dark: "#3d5b46",
            },
        },
    },

    plugins: [forms],
};
