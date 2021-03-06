const { scripts } = require('laravel-mix');
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

mix.
    styles([
        'resources/views/solasstech/css/style.css',
        'node_modules/bootstrap/dist/css/bootstrap.css',
    ], 'public/solasstech/css/bootstrap.css')
    .version();

    scripts([
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
    ], 'public/solasstech/js/bootstrap.bundle.js')
    .version();
