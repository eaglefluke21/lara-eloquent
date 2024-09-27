/** @type {import('tailwindcss').Config} */
export default {
    darkMode: ["class"],
    content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
  	extend: {
  		fontFamily: {
  			anta: ['Anta', 'sans-serif'],
  			quick: ['Quicksand', 'sans-serif'],
  			comic: ['Comic Neue', 'sans-serif']
  		},
  		borderRadius: {
  			lg: 'var(--radius)',
  			md: 'calc(var(--radius) - 2px)',
  			sm: 'calc(var(--radius) - 4px)'
  		},
  		boxShadow: {
  			'custom-inner-sky-400': 'inset -2px 2px 10px 2px rgba(0, 0, 0, 0.8), inset 2px -2px 10px 2px rgba(0, 0, 0, 0.8)'
  		},
  		colors: {}
  	}
  },
  plugins: [require("tailwindcss-animate")],
}