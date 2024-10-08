/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme');

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
      boxShadow: {
        'product': '0 0 5px 1px rgba(0, 0, 0, 0.3)',
      }, 
      gridTemplateColumns: {
        'dashboard': 'repeat(2, minmax(0, 1fr))',
      },
      inlineAll: {
        "inline-all": "inline-block",
      }
    },
  },
  plugins: [],
}
