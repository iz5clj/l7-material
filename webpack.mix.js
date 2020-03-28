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

mix.scripts([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/popper.js/dist/umd/popper.js',
    'node_modules/bootstrap/dist/js/bootstrap.js',
    'resources/js/app.js'
], 'public/assets/js/app.js').version();

mix.scripts('node_modules/@fortawesome/fontawesome-free/js/all.js', 'public/assets/js/fontawesome.js').version();

mix.sass('resources/sass/app.scss', 'public/assets/css').version();

mix.browserSync({
    proxy: 'l7.test',
    open: false
});
