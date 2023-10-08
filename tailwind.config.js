/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                roboto: ["Roboto"],
            },
        },
    },
    plugins: [
        require("flowbite/plugin")({
            charts: true,
        }),
        // ... other plugins
    ],
};
