
const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
      debugScreens: {
          position: ['top', 'right'],
      },
      fontFamily: {
          sans : ['Roboto', 'Helvetica']
      }
},
    extend: {
        fontFamily: {
            'spartan' : ["Spartan"]
        }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
      require('tailwindcss-debug-screens'),
  ]
}
