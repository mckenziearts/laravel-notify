/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./resources/views/**/*.php'],
  theme: {
    extend: {
      inset: {
        '0': 0,
        '-14': '-3.5rem',
      },
      zIndex: {
        60: '60',
        70: '70',
        80: '80',
        90: '90',
        100: '100',
      },
    },
  },
  plugins: [],
}
