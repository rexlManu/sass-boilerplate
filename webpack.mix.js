const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .js("resources/js/central/app.js", "public/js/central")
    .postCss(
        "resources/css/central/app.css",
        "public/css/central",
        [
            require("postcss-import"),
            require("tailwindcss")("resources/js/central/tailwind.config.js"),
            require("autoprefixer"),
        ]
    );

mix.disableNotifications();

if (mix.inProduction()) {
    mix.version()
}
