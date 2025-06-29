/** @type {import('tailwindcss').Config} */
import defaultTheme from 'tailwindcss/defaultTheme';

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Montserrat', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'sans-serif'],
        montserrat: ['Montserrat', 'sans-serif'],
        },
      colors: {
        'primary': {
          '50': '#effff0',
          '100': '#d8ffd9',
          '200': '#b3ffb6',
          '300': '#78ff7e',
          '400': '#3dff44',
          '500': '#09ca16', // Your main green color
          '600': '#04aa0f',
          '700': '#079510',
          '800': '#0a6b12',
          '900': '#0a5711',
          '950': '#003107',
        },
      },
    },
  },
  plugins: [],
};
