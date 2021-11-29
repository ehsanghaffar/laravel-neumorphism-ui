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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.copy('node_modules/font-awesome/css/font-awesome.min.css', 'public/css'); 
mix.copy('node_modules/font-awesome/fonts/*', 'public/fonts');
mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js');
mix.copy('node_modules/bootstrap/dist/css/bootstrap.css', 'public/css')

