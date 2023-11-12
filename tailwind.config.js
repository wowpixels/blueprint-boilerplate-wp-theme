/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./parts/*.{php,html,js}",
    "./templates/*.{php,html,js}",
    "./patterns/*.{php,html,js}",
    "./*.{php,html,js}",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
