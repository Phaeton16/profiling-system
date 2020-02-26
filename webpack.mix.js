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

mix.styles([
    'imperial/css/style.css',
    'imperial/lib/font-awesome/css/font-awesome.min.css',
    'imperial/lib/animate-css/animate.min.css',
    'AdminLTE/plugins/fontawesome-free/css/all.min.css',
    'AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.mins.css',
    'AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
    'AdminLTE/plugins/jqvmap/jqvmap.min.css',
    'AdminLTE/dist/css/adminlte.min.css',
    'AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
    'AdminLTE/plugins/daterangepicker/daterangepicker.css',
    'AdminLTE/plugins/summernote/summernote-bs4.css'
], 'public/css/all.css');

mix.scripts([
    'imperial/lib/jquery/jquery.min.js',
    'imperial/lib/bootstrap/js/bootstrap.min.js',
    'imperial/lib/superfish/hoverIntent.js',
    'imperial/lib/superfish/superfish.min.js',
    'imperial/lib/morphext/morphext.min.js',
    'imperial/lib/wow/wow.min.js',
    'imperial/lib/stickyjs/sticky.js',
    'imperial/lib/easing/easing.js',
    'imperial/js/custom.js',
    'imperial/lib/contactform/contactform.js',
    'AdminLTE/plugins/jquery/jquery.min.js',
    'AdminLTE/jquery-ui/jquery-ui.min.js',
    'AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'AdminLTE/plugins/chart.js/Chart.min.js',
    'AdminLTE/plugins/sparklines/sparkline.js',
    'AdminLTE/plugins/jqvmap/jquery.vmap.min.js',
    'AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js',
    'AdminLTE/plugins/jquery-knob/jquery.knob.min.js',
    'AdminLTE/plugins/moment/moment.min.js',
    'AdminLTE/plugins/daterangepicker/daterangepicker.js',
    'AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
    'AdminLTE/plugins/summernote/summernote-bs4.min.js',
    'AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
    'AdminLTE/dist/js/adminlte.js',
    'AdminLTE/dist/js/demo.js'
], 'public/js/all.js');

mix.copyDirectory([
    'imperial/img',
    'AdminLTE/dist/img'
], 'public/img');


