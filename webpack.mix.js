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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/layouts/web/includes/header.js', 'public/js')
    .js('resources/js/pages/homepage.js', 'public/js')
    .js('resources/js/pages/about.js', 'public/js')
    .js('resources/js/pages/base.js', 'public/js')
    .js('resources/js/pages/menu.js', 'public/js')
    .js('resources/js/pages/contact.js', 'public/js')
    .js('resources/js/pages/blog.js', 'public/js')

    .sass('resources/sass/pages/article.scss', 'public/css/article.css')
    .sass('resources/sass/app.scss', 'public/css/app.css')
    .sass('resources/sass/pages/homepage.scss', 'public/css/homepage.css')
    .sass('resources/sass/pages/aboutus.scss', 'public/css/aboutus.css')
    .sass('resources/sass/pages/contact.scss', 'public/css/contact.css')
    .sass('resources/sass/pages/menu.scss', 'public/css/menu.css')
    .sass('resources/sass/pages/blog.scss', 'public/css/blog.css')
    .copy('resources/images', 'public/images')
    .copy('resources/fonts','public/fonts')
    .copy('resources/plugins', 'public/plugins')


    .postCss('resources/css/app.css', 'public/css', [

]);
