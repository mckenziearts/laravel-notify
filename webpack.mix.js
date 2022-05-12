const mix = require('laravel-mix');
require('laravel-mix-tailwind');

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

mix.setPublicPath('public');
mix.setResourceRoot('../')

mix.js('resources/js/app.js', 'public/js')
  .js('resources/js/notify.js', 'public/js')
  .postCss('resources/css/app.css', 'public/css', [require('tailwindcss')])
  .sass('resources/css/notify.scss', 'public/css', [], [
    require('postcss-import'),
    require('tailwindcss'),
    require('postcss-nested'), // or require('postcss-nesting')
    require('autoprefixer')
  ]);

if (mix.inProduction()) {
  mix.version();
}
