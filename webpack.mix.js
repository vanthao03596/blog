const mix = require('laravel-mix');
require('laravel-mix-purgecss');
const glob = require('glob-all');
const path = require('path');

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
    "public/js/jquery-2.1.4.min.js",
    "public/js/crum-mega-menu.js",
    "public/js/swiper.jquery.min.js",
    "public/js/theme-plugins.js",
    "public/js/main.js",
    "public/js/form-actions.js",
    "public/js/smooth-scroll.min.js",
    "public/js/velocity.min.js",
    "public/js/ScrollMagic.min.js",
    "public/js/animation.velocity.min.js",
], 'public/js/mix.js')
    .sass('resources/sass/app.scss', 'public/css').purgeCss();
