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

// Kompilacja SCSS
mix.sass('resources/scss/style.scss', 'public/assets/css');
mix.sass('resources/scss/admin-login.scss', 'public/assets/css');
mix.sass('resources/scss/admin-panel.scss', 'public/assets/css');
mix.sass('resources/scss/admin-angular.scss', 'public/assets/css');
