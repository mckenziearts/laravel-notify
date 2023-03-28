const mix = require('laravel-mix')

mix.setPublicPath('public')
mix.js('resources/js/notify.js', 'js')
  .postCss('resources/css/notify.css', 'dist')

if (mix.inProduction()) {
  mix.version()
}

mix.disableSuccessNotifications()
