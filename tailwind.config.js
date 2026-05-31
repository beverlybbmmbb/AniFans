/** @type {import('tailwindcss').Config} */

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],

    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: "1rem",
                sm: "2rem",
                lg: "4rem",
                xl: "5rem",
                "2xl": "6rem",
            },
        },

        extend: {
            colors: {
                cream: "#fafafa",
                terracotta: "#1a1a1a",
                forest: "#000",
                parchment: "#f5f5f5",
                ink: "#111111",
                gold: "#000",
            },

            fontFamily: {
                sans: ["Montserrat", "sans-serif"],
                display: ["Playfair Display", "serif"],
            },

            boxShadow: {
                warm: "0 4px 6px rgba(0, 0, 0, 0.1)",
                soft: "0 2px 4px rgba(0, 0, 0, 0.05)",
                cinematic: "0 10px 25px rgba(0, 0, 0, 0.15)",
                sleek: "0 1px 3px rgba(0, 0, 0, 0.1)",
            },

            borderRadius: {
                cinematic: "0.5rem",
            },

            animation: {
                float: "float 6s ease-in-out infinite",
                "fade-up": "fadeUp 0.8s ease forwards",
                shimmer: "shimmer 2s ease-in-out infinite",
                glow: "glow 3s ease-in-out infinite",
            },

            keyframes: {
                float: {
                    "0%, 100%": {
                        transform: "translateY(0px)",
                    },

                    "50%": {
                        transform: "translateY(-8px)",
                    },
                },

                fadeUp: {
                    "0%": {
                        opacity: "0",
                        transform: "translateY(20px)",
                    },

                    "100%": {
                        opacity: "1",
                        transform: "translateY(0)",
                    },
                },

                shimmer: {
                    "0%, 100%": {
                        opacity: "1",
                    },

                    "50%": {
                        opacity: "0.6",
                    },
                },

                glow: {
                    "0%, 100%": {
                        boxShadow: "0 0 10px rgba(0, 0, 0, 0.1)",
                    },

                    "50%": {
                        boxShadow: "0 0 20px rgba(0, 0, 0, 0.2)",
                    },
                },
            },

            screens: {
                xs: "480px",
            },
        },
    },

    plugins: [],
};