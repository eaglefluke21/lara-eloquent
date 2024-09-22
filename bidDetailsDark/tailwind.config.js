/** @type {import('tailwindcss').Config} */
export default {
	darkMode: ["class"],
	content: [
	  "./index.html",
	  "./src/**/*.{js,ts,jsx,tsx}",
	],
	theme: {
	  extend: {
		fontFamily: {
		  anta: ['Anta', 'sans-serif'],
		  quick: ['Quicksand', 'sans-serif'],
		  comic: ['Comic Neue', 'sans-serif'],
		},
		borderRadius: {
		  lg: 'var(--radius)',
		  md: 'calc(var(--radius) - 2px)',
		  sm: 'calc(var(--radius) - 4px)',
		},
		colors: {'custom-gray': '#3e3d4c',
			'custom-bg-gray':'#201f31',
			'data-gray': '#373646',
			'data-gray-hover' : '#4d4c5a',
			'outline-pink' : '#735b73',
			'main-pink' : '#f6b3d6',
			'custom-blue': '#52a3fa',
			'data-rose' : '#d86981',
			'data-green' : '#74e18c',
			'data-yellow' : '#d3ac66',
		},
		width: {
			'custom-400': '400px',
			'custom-540': '540px',
		  },
	  },
	},
	plugins: [require('tailwindcss-animate')],
  }
  