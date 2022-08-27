/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
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
