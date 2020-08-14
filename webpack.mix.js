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
mix.js('resources/js/notify.js', 'public/js')
  .sass('resources/sass/app.scss', 'public/css')
  .sass('resources/sass/notify.scss', 'public/css')
  .tailwind("./tailwind.config.js")
  .sourceMaps();

if (mix.inProduction()) {
  mix.version();
}
