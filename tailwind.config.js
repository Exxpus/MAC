module.exports = {
  content: [
    './templates/**/*.php',
    './inc/**/*.php',
    './*.php',
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}