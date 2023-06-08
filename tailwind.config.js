import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
      container: {
        center: true,
      },
      screens: {
        sm: '480px',
        md: '768px',
        lg: '976px',
        xl: '1440px',
      },
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'neutral': {
          100: '#ffffff' ,
          200: '#f7fafa' ,
          300: '#dfe8e8' ,
          400: '#929494' ,
          500: '#414242' ,
          600: '#141414' ,
        },
        'blueSS': {
          100: '#5ce1e6' ,
          200: '#188bc9' ,
          300: '#146c9c' ,
          400: '#0b415e' ,
          500: '#136B9C' ,
          600: '#051f2e' ,
          700: '#03111a' ,
        }
      },
      daisyui: {
        themes: ["light", "dark", "cupcake", "bumblebee", "emerald", "corporate", "synthwave", "retro", "cyberpunk", "valentine", "halloween", "garden", "forest", "aqua", "lofi", "pastel", "fantasy", "wireframe", "black", "luxury", "dracula", "cmyk", "autumn", "business", "acid", "lemonade", "night", "coffee", "winter"],
      },
      extend: {
        fontFamily: {
          Kenit: ['Kenit', 'sans-serif'],
        },
        fontFamily: {
          sans: ['Figtree', ...defaultTheme.fontFamily.sans],
        },
      },
    },
    plugins: [
      require("daisyui"),
      forms,
    ],
  }
  
  