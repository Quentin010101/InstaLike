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
      },
      keyframes:{
        'heart' : {
          '0%, 100%' : { transform: 'scale(1)' },
          '50%' : { transform: 'scale(1.25)'}
        }
      },
      animation:{
        'heart' : 'heart 0.6s ease-in'
      }
    },
  },
  plugins: [],
}
