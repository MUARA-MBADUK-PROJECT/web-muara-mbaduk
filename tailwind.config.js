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
        'text-black':'#1E1E1E',
        'text-gray':'#939393',
        'text-blue':'#1570BF',
        'text-white':'#FFFFFF',
        'text-darkblue':'#0B4981',
        'footer':'#333333'
      },
      spacing:{
        '500':'500px',
        '750':'750px',
        '1000':'1000px',
        'page':'832px',
        'hscreen/2':'50vh'
      },
      lineClamp: {
        1: '1',
      },
    },
  },
  plugins: [],
}
