
const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
    typography:{
        DEFAULT: {
            css: {
                prose: '50ch' ,
            },
        },
    },
    presets: [
        require('./news_styles' )],
  content: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
        container: {
            center: true,
        },
      fontSize: {
          'xs': '.5rem',
          'sm': '.875rem',
          'tiny': '.875rem',
          'base': '1rem',
          'lg': '1.125rem',
          'xl': '1.25rem',
          '2xl': '1.5rem',
          '3xl': '1.875rem',
          '4xl': '2.25rem',
          '5xl': '3rem',
          '6xl': '4rem',
          '7xl': '5rem',
      },
      corePlugins:{
          container: false,
      },
      debugScreens: {
          position: ['top', 'right'],
      },
      fontFamily: {
          sans : ['Roboto', 'Helvetica']
      }
},
    extend: {
        typography:{
            DEFAULT: {
                    css: {
                        prose: '50ch' ,
},
},
},
},
  variants: {},
  plugins: [
      require('@tailwindcss/typography'),
      require('tailwindcss-debug-screens'),
  ]
}
