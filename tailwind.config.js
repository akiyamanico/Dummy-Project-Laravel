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
        abel: ['"Abel"'],
        quicksand: ['"Quicksand"'],
        helmed: ['Helvetica Neue Medium'],
        hellight: ['Helvetica Neue Light'],
        creathin: ['CreatoDisplay-Thin'],
        creal: ['CreatoDisplay-Light'],
        crear: ['CreatoDisplay-Regular'],
      },
      gridTemplateRows: {
        '[auto,auto,1fr]': 'auto auto 1fr',
      },
    },
  },
  plugins: [
    require('daisyui'),
    require('@tailwindcss/aspect-ratio'),
  ],
}

