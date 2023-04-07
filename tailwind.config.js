/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'sub':'#939393'
      },
      spacing:{
        '500':'500px'
      }
    },
  },
  plugins: [],
}
