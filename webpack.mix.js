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

mix.styles(['resources/template/css/style.css','resources/template/css/user.css'], 'public/css/style.css');

mix.styles(['resources/template/css/sb-admin-2.min.css','resources/template/css/admin.css'], 'public/css/admin.css');
mix.copyDirectory('resources/template/img', 'public/img');

mix.js('resources/js/admin/base.js','public/js/admin/base.js')
mix.js('resources/js/user/home.js','public/js/user/home.js')