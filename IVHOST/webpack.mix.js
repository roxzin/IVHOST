
    const mix = require('laravel-mix');

mix.webpackConfig({
    mode: 'production',
    optimization: {
        usedExports: true,
    },
});

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        // Aqui você pode adicionar plugins PostCSS ou outras configurações necessárias
    ]);