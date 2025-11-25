import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";
import daisyui from "daisyui";
import theme from "tailwindcss/defaultTheme";
import themes from "daisyui/theme/object";
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            container: {
                center: true,
                padding: "2rem",
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                jost: ["Jost", ...defaultTheme.fontFamily.serif],
            },
        },
    },

    daisyui: {
        themes: ["dark", "light", "cupcake"],
    },

    plugins: [forms, typography, daisyui],
};
