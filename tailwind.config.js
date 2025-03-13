/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      backgroundImage: {
        'lp-desktop-gradient': 'linear-gradient(36deg, #EDF4FF 64.54%, #ADCEFF 92.02%)',
        'lp-mobile-gradient': 'linear-gradient(36deg, #EDF4FF 95.54%, #ADCEFF 98.5%)',
        // 'lp-mobile-gradient': 'linear-gradient(36deg, #EDF4FF 92.54%, #ADCEFF 99.02%)',
      },
      lineHeight: {
        'extra-loose': '4.5rem'
      },
      width: {
        '100': '30rem'
      },
      height: {
        '90': '22rem'
      }
    },
  },
  plugins: [],
};

