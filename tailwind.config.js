export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue"
  ],
  theme: {
    extend: {
      colors: {
        cream: "#fdfaf4",
        terracotta: "#c24e30",
        forest: "#2e6b2e",
        parchment: "#f0e6cc",
        ink: "#2d1f0e",
        gold: "#d4a373",
      },
      fontFamily: {
        sans: ["Montserrat", "sans-serif"],
        display: ["Playfair Display", "serif"],
      },
      animation: {
        'float': 'float 6s ease-in-out infinite',
        'fade-up': 'fade-up 0.6s ease-out',
        'shimmer': 'shimmer 2s ease-in-out infinite',
        'glow': 'glow 3s ease-in-out infinite',
      },
      keyframes: {
        float: {
          '0%, 100%': { transform: 'translateY(0px)' },
          '50%': { transform: 'translateY(-15px)' },
        },
        'fade-up': {
          '0%': { opacity: '0', transform: 'translateY(20px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        shimmer: {
          '0%, 100%': { opacity: '1' },
          '50%': { opacity: '0.5' },
        },
        glow: {
          '0%, 100%': { boxShadow: '0 0 5px rgba(194, 78, 48, 0.5)' },
          '50%': { boxShadow: '0 0 20px rgba(194, 78, 48, 0.8)' },
        },
      },
    },
  },
  plugins: [],
}