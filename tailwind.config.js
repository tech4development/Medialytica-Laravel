/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.blade.php",
"./resources/**/*.js",
"./resources/**/*.vue",],
  theme: {
    extend: {
        colors: {
            'custom-blue': '#0B1727',
          },
    },
  },
  plugins: [],
}

