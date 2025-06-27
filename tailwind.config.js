/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            animation: {
                'spin-slow': 'spin 2s linear infinite',
            },
            colors: {
                primary: {
                    "lightblue": "#50BFD0",
                    "darkblue": "#142B33",
                    "grey": "#AAC4D4",
                    "blue": "#0F6E80",
                    "white": "#FFFFFF",
                    "600":"#2563eb"
                }
            }
        },
        fontFamily: {
            'Plus-Jakarta-Sans': ['Plus Jakarta Sans'],
            'Montserrat': ['"Montserrat", sans-serif'],
            'Poppins': ['"Poppins", sans-serif'],
        }
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
