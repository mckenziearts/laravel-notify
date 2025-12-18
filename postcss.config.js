export default {
  plugins: {
    '@tailwindcss/postcss': {},
    'postcss-prefix-selector': {
      prefix: '.notify',
      exclude: [':root', ':host', 'html', 'body'],
      transform: function(prefix, selector, prefixedSelector) {
        if (selector.includes('.notify')) {
          return selector;
        }

        return prefixedSelector;
      }
    },
    ...(process.env.NODE_ENV === 'production' ? { cssnano: { preset: 'default' } } : {})
  }
}
