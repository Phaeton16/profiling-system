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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

mix.scripts([
        'node_modules/jquery/dist/jquery.min.js',
        'resources/assets/js/bootstrap.min.js',
        'resources/assets/js/adminlte.min.js'
    ], 'public/js/app.js')
    .styles([
        'resources/assets/css/bootstrap.min.css',
        'resources/assets/css/adminlte.min.css'
    ], 'public/css/app.css');
