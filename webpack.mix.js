const mix = require('laravel-mix');
require('laravel-mix-purgecss');

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
    .minify('public/fonts/league-spartan/league-spartan.css')
    .postCss('resources/css/tw.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .sass('resources/scss/style.scss', 'public/css')
    .purgeCss()
    .sourceMaps(false, 'inline-source-map');

if (mix.inProduction()) {
    mix.version();
}

const bsOpen = (process.env.MIX_BS_OPEN.toLowerCase() === 'true');

mix.browserSync({
    host: process.env.MIX_BS_LOCALHOST,
    proxy: process.env.MIX_BS_PROXY,
    open: bsOpen
});
