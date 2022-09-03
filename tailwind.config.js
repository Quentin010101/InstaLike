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
          '50%' : { transform: 'scale(1.55)'}
        },
        'fade' : {
          'to' : { opacity: '0' },

        },
      },
      animation:{
        'heart' : 'heart 0.8s ease-in',
        'fade' : 'fade 1.5s ease-in 3s forwards',
      }
    },
  },
  plugins: [],
}
