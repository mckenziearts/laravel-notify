const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  purge: {
    enable: true,
    content: [
      './resources/views/**/*.php',
    ],
    options: {
      defaultExtractor: (content) => content.match(/[\w-/.:]+(?<!:)/g) || [],
      whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
    },
  },
  theme: {
    extend: {
      colors: {
        success: '#47D764',
        info: '#2E86EB',
        warning: '#FFC022',
        danger: '#ED3063',
      },
      zIndex: {
        60: '60',
        70: '70',
        80: '80',
        90: '90',
        100: '100',
      },
      fontFamily: {
        body: ["Inter var", ...defaultTheme.fontFamily.sans],
      },
      gradients: (theme) => ({
        'gradient-green': ['60deg', theme('colors.green.600'), theme('colors.success')],
      }),
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
    require('tailwindcss-plugins/gradients'),
  ],
}
