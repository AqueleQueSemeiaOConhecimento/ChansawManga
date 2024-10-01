/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php', 
    './resources/**/*.js',        
    './resources/**/*.vue', 
  ],
  theme: {
    extend: {
      colors: {
        customBlack: '#0B0B0B',
        customOrange: '#F19813',
      },
      borderWidth: {
        '20': '20px',
      },
      fontFamily: {
        kodemon: ['"Kode Mono"', 'monospace'],
      },
    },
  },
  plugins: [],
}

