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
          '100%' : { opacity: '0'  }
        },
        'd-none' : {
          '100%' : { display: 'none' }
        }
      },
      animation:{
        'heart' : 'heart 0.8s ease-in',
        'fade' : 'fade 1.5s ease-in 3s forwards',
        'disapear' : 'disapear 0.5s ease-in 3s forwards',
        'd-none' : ' d-none ease 3.5s forwards'
      }
    },
  },
  plugins: [],
}
