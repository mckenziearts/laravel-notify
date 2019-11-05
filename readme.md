<p align="center"><img src="https://arthurmonney.com/images/laravel-notify.svg"></p>

[//]: # ([![Latest Version on Packagist][ico-version]][link-packagist])
[//]: # ([![Total Downloads][ico-downloads]][link-downloads])
[comment]: # ([![Build Status][ico-travis]][link-travis])

## Introduction

Laravel Notify is a package that lets you add custom notifications to your project. 
A diverse range of notification design is available and many are coming soon.

<p align="center">
<img src="https://pix.watch/5IyC6j/BSrzNV.png">
</p>


## Work In Progress

This package is still under active development.

## Installation 

You can install the package using composer

```sh
$ composer require mckenziearts/laravel-notify
```

Then add the service provider to `config/app.php`. In Laravel versions 5.5 and beyond, this step can be skipped if package auto-discovery is enabled.

```php
'providers' => [
    ...
    Mckenziearts\Notify\LaravelNotifyServiceProvider::class
    ...
];
```

You can publish the configuration file and assets by running:
 
```sh
$ php artisan vendor:publish --provider='Mckenziearts\Notify\LaravelNotifyServiceProvider'
```

Now that we have published a few new files to our application we need to reload them with the following command:

```sh
$ composer dump-autoload
```

## Usage 

1. Add styles links with `@notifyCss`
2. Add scripts links with `@notifyJs`
3. use `notify()` helper function inside your controller to set a toast notification for info, success, warning or error
4. Include notify partial to your master layout `@include('notify::messages')`

### Basic

Within your controllers, before you perform a redirect call the `notify` method with a message.

```php
public function store()
{
    notify()->success('Laravel Notify is awesome!');

    return Redirect::home();
}
```

An complete example:

```blade
<!doctype html>
<html>
    <head>
        <title>Laravel Notify</title>
        @notifyCss
    </head>
    <body>
        
        
        @notifyJs
        @include('notify::messages')
    </body>
</html>
```

### Type of notifications
 
Laravel Notify actually display 4 types of notifications

1. `toast` notification, who is default notification for Laravel Notify

```php
notify()->success('Welcome to Laravel Notify ⚡️')
```
 
2. `connectify` notification, example of basic usage

```php
connectify('success', 'Connection Found', 'Success Message Here')
```

3. `drakify` (😎) notification, only to display an alert

```php
drakify('success') // for success alert 
or
drakify('error') // for error alert 
```

4. `smilify` notification, a simple custom toast notification using smiley 😊

```php
smilify('success', 'You are successfully reconnected')
```

## Config

Config file are located at `config/notify.php` after publishing provider element.

Some awesome stuff. To active `dark mode` update the `theme` config, or add global variable `NOTIFY_THEME` on your .env file

```php
'theme' => env('NOTIFY_THEME', 'dark'),
```

Got result like that

<p align="center">
<img src="https://pix.watch/d5TpFl/Z7ert9.png">
</p>

Laravel Notify use animate.css to set smooth animation to display and hide notify element.

```php
/*
|--------------------------------------------------------------------------
| Animate Module (use animate.css)
|--------------------------------------------------------------------------
|
| Use animate.css to animate the notice.
|
*/

'animate' => [
    'in_class' => 'bounceInRight', // The class to use to animate the notice in.
    'out_class' => 'bounceOutRight', // The class to use to animate the notice out.
    'timeout'   => 5000 // Number of seconds before the notice disappears
],
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [Arthur Monney][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/mckenziearts/laravel-notify.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/mckenziearts/laravel-notify.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/mckenziearts/laravel-notify/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/mckenziearts/laravel-notify
[link-downloads]: https://packagist.org/packages/mckenziearts/laravel-notify
[link-author]: https://arthurmonney.com
[link-contributors]: ../../contributors
