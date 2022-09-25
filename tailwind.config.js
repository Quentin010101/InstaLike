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
          'from' : { opacity: '100' },
          'to' : { opacity: '0' },

        },
        'disapear' : {
          '0%' : { opacity: '0' },
          '5%' : { opacity: '1' },
          '95%' : { opacity: '1' },
          '100%' : { opacity: '0'  }
        },
        'appear' : {
            '0%' : { opacity: '0' },
            '100%' : { opacity: '100'}
        },

      },
      animation:{
        'heart' : 'heart 0.8s ease-in',
        'fade' : 'fade 1.5s ease-in 3s forwards',
        'fade2' : 'fade 0.5s ease-in forwards',
        'disapear' : 'disapear 4.5s ease-in forwards',
        'appear' : 'appear 1s ease-in forwards'
      }
    },
  },
  plugins: [],
}
