/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    transitionProperty: {
      'width': 'width',
      'left' : 'left',
      'right' : 'right',
    },
    backgroundSize: {
      'auto': 'auto',
      'cover': 'cover',
      'contain': 'contain',
      '200': '200%'
    },
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
        'disapear' : {
          '0%' : { opacity: '0' },
          '5%' : { opacity: '1' },
          '95%' : { opacity: '1' },
          '100%' : { opacity: '0'  }
        },

      },
      animation:{
        'heart' : 'heart 0.8s ease-in',
        'fade' : 'fade 1.5s ease-in 3s forwards',
        'disapear' : 'disapear 4.5s ease-in forwards',
      }
    },
  },
  plugins: [],
}
