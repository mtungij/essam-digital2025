const defaultTheme = require("tailwindcss/defaultTheme");
const forms = require("@tailwindcss/forms");

module.exports = {
    darkMode: "class", // or 'media', depending on your preference
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
        './vendor/masmerise/livewire-toaster/resources/views/*.blade.php', // 👈
    ],
    theme: {
        extend: {
            colors: { // Correct placement for colors
                primary: {
                    300: '#7fd8e6', // Light shade for focus ring
                    600: '#00a3cf', // Default teal for background
                    700: '#008db5', // Darker teal for hover
                    800: '#006f91', // Even darker teal for focus ring in dark mode
                },
            },
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [forms, require("flowbite/plugin")],
};
