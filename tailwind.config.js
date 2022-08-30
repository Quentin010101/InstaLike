/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {  
      blur: {
        xs: '1px',
      },
      spacing:{
        '128': '1000px'
      }
    },
  },
  plugins: [],
}
