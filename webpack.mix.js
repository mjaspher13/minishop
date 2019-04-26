const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


// Js
mix.js('resources/js/theme.js', 'public/js');

// CSS
mix.sass('resources/sass/app.sass', 'public/css')
    .sass('resources/sass/fonts.sass', 'public/css');

mix.react('resources/js/feedback/list.js', 'public/js/feedback/list.js');
