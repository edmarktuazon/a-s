/**
 * @format
 * @type {import('tailwindcss').Config}
 */

module.exports = {
	content: [
		"./home.php",
		"./login.php",
		"./registration.php",
		"./src/**/*.{css,js}",
	],
	theme: {
		extend: {
			fontFamily: {
				inter: ["Inter", "sans-serif"],
			},
			colors: {
				primary: "rgb(7, 170, 211)",
				"shade-gray": "#A3A3A3",
				"shade-green": "#4D7C11",
			},
			backgroundImage: {
				"hero-bg": "url('../assets/images/home-bg.png')",
			},
		},
	},
	plugins: [],
};
