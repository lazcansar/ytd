/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        fontFamily: {
            ubuntu: ['Ubuntu', 'sans-serif'],
        },
        fontWeight: {
            light: 300,
            regular: 400,
            medium: 500,
            bold: 700,
        },
    },
  },
  plugins: [],
}

