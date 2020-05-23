module.exports = {
  purge: {
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
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ],
}
