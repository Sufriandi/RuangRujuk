module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './resources/**/*.tsx',
    './resources/**/*.ts',
    './resources/**/*.jsx',
    './resources/**/*.php',
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          50: '#ecfdf5',
          100: '#d1fae5',
          200: '#a7f3d0',
          300: '#6ee7b7',
          400: '#34d399',
          500: '#10b981',
          600: '#059669',
          700: '#047857',
          800: '#065f46',
          900: '#064e3b',
        },
        secondary: {
          50: '#f8fafc',
          100: '#f1f5f9',
          200: '#e2e8f0',
          300: '#cbd5e1',
          400: '#94a3b8',
          500: '#64748b',
          600: '#475569',
          700: '#334155',
          800: '#1e293b',
          900: '#0f172a',
        },
        accent: {
          500: '#f59e0b',
          600: '#d97706',
          700: '#b45309',
        },
      },
      transitionTimingFunction: {
        'premium': 'cubic-bezier(0.4,0,0.2,1)',
      },
      animation: {
        'fade-in-up': 'fadeInUp 0.8s cubic-bezier(0.4,0,0.2,1) forwards',
        'blob': 'blob 7s infinite',
        'float': 'float 4s ease-in-out infinite',
        'pulse-glow': 'pulseGlow 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
      },
      keyframes: {
        fadeInUp: {
          '0%': { opacity: '0', transform: 'translateY(30px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        blob: {
          '0%': { transform: 'translate(0px, 0px) scale(1)' },
          '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
          '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
          '100%': { transform: 'translate(0px, 0px) scale(1)' },
        },
        float: {
          '0%, 100%': { transform: 'translateY(0)' },
          '50%': { transform: 'translateY(-10px)' },
        },
        pulseGlow: {
          '0%, 100%': { opacity: '1', transform: 'scale(1)' },
          '50%': { opacity: '.8', transform: 'scale(1.05)', filter: 'brightness(1.2)' },
        },
      },
    },
  },
  plugins: [
    function({ addUtilities }) {
      addUtilities({
        '.premium-transition': {
          transitionProperty: 'all',
          transitionTimingFunction: 'cubic-bezier(0.4,0,0.2,1)',
          transitionDuration: '500ms',
        },
      })
    },
  ],
}
