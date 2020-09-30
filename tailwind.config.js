module.exports = {
    future: {
        // removeDeprecatedGapUtilities: true,
        // purgeLayersByDefault: true,
    },
    purge: [],
    theme: {
        container: {
            center: true,
            padding: "1rem",
        },

        colors: {
            transparent: "transparent",

            black: "#000",
            white: "#fff",

            gray: {
                100: "#F5F5F5",
                500: "#939393",
            },

            primary: {
                100: "#E7EEEB",
                500: "#115740",
            },

            red: {
                500: "#FF0000",
            },
        },

        borderColor: (theme) => ({
            ...theme("colors"),
            default: theme("colors.gray.100"),
        }),

        extend: {
            inset: {
                "1/2": "50%",
            },
        },
    },
    variants: {},
    plugins: [],
};
