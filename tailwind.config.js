module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./somefolder/**/*.blade.php",
        "./*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                'jamselinas-primary': '#0B74B9',
                'jamselinas-secondary': '#346E97',
                'jamselinas-cream': '#FFF8EE',
                'jamselinas-white': '#FCFEFF',
                'jamselinas-footer': '#B9D9F2',
                'jamselinas-text': '#0C5F96',
                'jamselinas-gradient-start': '#FFEDD4',
                'jamselinas-gradient-mid': '#B2D5F2',
                'jamselinas-gradient-end': '#B6D7F1',
            },
            fontFamily: {
                inter: ['Inter', 'system-ui', 'sans-serif'],
                poppins: ['Poppins', 'system-ui', 'sans-serif'],
                roboto: ['Roboto', 'system-ui', 'sans-serif'],
            },
        },
    },
    plugins: [],
};