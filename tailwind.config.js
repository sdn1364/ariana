const defaultTheme = require('tailwindcss/defaultTheme');
const color = require('tailwindcss/colors');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        backgroundSize: {
            'auto': 'auto',
            'cover': 'cover',
            'contain': 'contain',
            '120%': '120%',
            '130%': '130%',
        },
        screens: {
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1280px',
            '2xl': '1536px',
        },
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                sm: '1rem',
                md: '4rem',
                lg: '4rem',
                xl: '4rem',
                '2xl': '0rem'
            }
        },
        fontFamily: {
            sans: ['Roboto', ...defaultTheme.fontFamily.sans],
            'dana': ['dana'],
        },
        extend: {
            colors: {
                primary: {
                    50: '#b5ccff',
                    100: "#d4dcee",
                    200: "#a8b9dd",
                    300: "#7d95cb",
                    400: "#5172ba",
                    500: "#264fa9",
                    600: "#1e3f87",
                    700: "#172f65",
                    800: "#0f2044",
                    900: "#081022"
                },
                secondary: {
                    50: '#fff4d1',
                    100: "#fdf1ce",
                    200: "#fce49d",
                    300: "#fad66b",
                    400: "#f9c93a",
                    500: "#f7bb09",
                    600: "#c69607",
                    700: "#947005",
                    800: "#634b04",
                    900: "#312502"
                },

                black: color.black,
                white: color.white,
                red: color.rose,
                green: color.emerald,
                blue: color.sky,
                yellow: color.amber
            },

        },
    },

    plugins: [
        require('tailwindcss-debug-screens'),
        require('tailwind-scrollbar'),

    ],

};
