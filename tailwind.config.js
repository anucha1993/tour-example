/**** Tailwind v4 config (using new @tailwindcss/vite) adding Flowbite content paths ****/
export default {
  darkMode: 'class',
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
  // removed flowbite for performance
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['ui-sans-serif','system-ui','sans-serif']
      },
      colors: {
        // Primary brand (inspired by NextTrip Holiday warm orange)
        brand: {
          50: '#fff7ed',
          100: '#ffedd5',
          200: '#fed7aa',
          300: '#fdba74',
          400: '#fb923c',
          500: '#f97316',
          600: '#ea580c',
          700: '#c2410c',
          800: '#9a3412',
          900: '#7c2d12'
        },
        // Accent cool blue for contrast elements
        accent: {
          50: '#eff6ff',
          100: '#dbeafe',
          200: '#bfdbfe',
          300: '#93c5fd',
          400: '#60a5fa',
          500: '#3b82f6',
          600: '#2563eb',
          700: '#1d4ed8',
          800: '#1e40af',
          900: '#1e3a8a'
        }
      }
    }
  },
  plugins: []
};
