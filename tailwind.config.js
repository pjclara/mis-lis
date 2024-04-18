const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ["FUTURA Medium", ...defaultTheme.fontFamily.sans],
      },
      colors: {
        "color-primary": "#00225C",
        "color-primary-light": "#3FD1D3",
        "color-primary-dark": "#0B3260",
        "color-secondary": "#BD5A00",
        "color-gray": "#333",
        "color-white": "#fff",
        "color-blob": "#A427DF",
      },
      container: {
        center: true,
        padding: {
          DEFAULT: "20px",
          md: "50px",
        },
      },
    },
  },

  variants: {
    extend: {
      opacity: ["disabled"],
    },
  },

  plugins: [require("@tailwindcss/forms")],
};
