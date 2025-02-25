import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'false',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/masmerise/livewire-toaster/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        'node_modules/preline/dist/*.js',
    ],
    theme: {
              
        extend: {
            boxShadow: {
                md: "rgba(145,158,171,0.2) 0px 0px 2px 0px,rgba(145,158,171,0.12) 0px 12px 24px -4px",
                xl: "inset 0 1px 2px rgba(90,106,133,0.075)",
            },
            fontFamily: {
                sans: ["Plus Jakarta Sans", "sans-serif"],
            },
            keyframes: {
                pulse : {
                  '0%, 100%': { opacity: '1' },
                  '50%': { opacity: '.5' },
                },
            },
            animation: {
                tabmodal: 'pulse 0.7s ease 1',
                window: 'pulse 0.5s ease 1',
            }
        },
        container: {
            center: true,
            padding: "20px",
        },
    },
    plugins: [
        require("@tailwindcss/forms")({
            strategy: "base",
          }),
          require("@tailwindcss/typography"),
        require('preline/plugin'),
    ],
};
