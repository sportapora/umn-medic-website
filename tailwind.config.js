import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            maxWidth: {
                'custom-container': '1536px', // max-w-screen-2xl
            },
            margin: {
                'custom-mx': '2.5rem', // mx-10
                'custom-md-mx': '4rem' // md:mx-16
            },
            colors: {
                'medic-primary': '#02A900',
                'medic-secondary': '#E1F8E5',
                'medic-primary-dark': '#62825D'
            },
            width: {
                '533': '533px',
                '594': '594px',
            }
        },
    },

    plugins: [
        forms,
        require("flowbite/plugin"),
        function ({ addComponents }) {
            addComponents({
                '.custom-container': {
                    maxWidth: '1536px',
                    marginLeft: '2.5rem',
                    marginRight: '2.5rem',
                    '@screen md': {
                        marginLeft: '4rem',
                        marginRight: '4rem',
                    },
                    '@screen lg': {
                        marginLeft: 'auto',
                        marginRight: 'auto',
                    },
                },
            });
        },
    ],
};
