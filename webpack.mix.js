let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.js('resources/assets/js/admin.js', 'public/js')
   .sass('resources/assets/sass/admin.scss', 'public/css');

mix.scripts([
   'node_modules/startbootstrap-sb-admin-2/vendor/jquery/jquery.min.js',
   'node_modules/startbootstrap-sb-admin-2/vendor/bootstrap/js/bootstrap.min.js',
   'node_modules/startbootstrap-sb-admin-2/vendor/metismenu/metisMenu.min.js',
   'node_modules/startbootstrap-sb-admin-2/vendor/raphael/raphael.min.js',
   'node_modules/startbootstrap-sb-admin-2/vendor/morris.js/morris.min.js',
   'node_modules/startbootstrap-sb-admin-2/data/morris.min.js',
   'node_modules/startbootstrap-sb-admin-2/js/sb-admin-2.js'
], 'public/js/admin.js');
