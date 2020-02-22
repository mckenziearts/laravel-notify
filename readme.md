<p align="center"><img src="https://arthurmonney.com/images/laravel-notify.svg"></p>

<p align="center">
<a href="https://github.styleci.io/repos/217758926"><img src="https://github.styleci.io/repos/217758926/shield?branch=master" alt="StyleCI"></a>
<a href="https://travis-ci.org/mckenziearts/laravel-notify"><img src="https://img.shields.io/travis/mckenziearts/laravel-notify/master.svg?style=flat-square" alt="Build Status"></a>
<a href="https://packagist.org/packages/mckenziearts/laravel-notify"><img src="https://poser.pugx.org/mckenziearts/laravel-notify/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/mckenziearts/laravel-notify"><img src="https://poser.pugx.org/mckenziearts/laravel-notify/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/mckenziearts/laravel-notify"><img src="https://poser.pugx.org/mckenziearts/laravel-notify/license.svg" alt="License"></a>
</p>


## Introduction

Laravel Notify is a package that lets you add custom notifications to your project. 
A diverse range of notification design is available and many are coming soon.

<p align="center">
<img src="https://i.ibb.co/yknfXzX/laravel-notify.png">
</p>


## Work In Progress

This package is still under active development. If you need Android version please try this package [Aesthetic Dialogs](https://github.com/gabriel-TheCode/AestheticDialogs). Happy Coding 👨🏾‍💻

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
        
        
        @include('notify::messages')
        @notifyJs
    </body>
</html>
```

### Type of notifications
 
Laravel Notify actually display 5 types of notifications

1. `toast` notification, who is default notification for Laravel Notify

```php
notify()->success('Welcome to Laravel Notify ⚡️') or notify()->success('Welcome to Laravel Notify ⚡️', 'My custom title')
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

5. `emotify` notification, a simple custom toast notification using vector emoticon

```php
emotify('success', 'You are awesome, your data was successfully created')
```

#### Preset Notifications

If you have a specific notification that is used across multiple different places in your system, you can define it
as a preset notification in your config file. This makes it easier to maintain commonly used notifications in one place. 
Read how to define preset messages in the [Config](#config) section below.

As an example, to use a preset notification you have defined called 'common-notification', use the following:

```php
notify()->preset('common-notification')
``` 

You can override any of the values that are set in the config if you need to. For example, this could be useful if you 
have a common notification across, but you want to change the icon in one particular place that it's used without having
to manually write out a new notification.

To do this, simply pass in an array that has the key of the attribute that you want to override and the value you want
to override it with.

As an example, we could override the 'title' of our 'common-notification' by using the following:

```php
notify()->preset('common-notification', ['title' => 'This is the overridden title'])
```

## Config

Config file are located at `config/notify.php` after publishing provider element.

Some awesome stuff. To active `dark mode` update the `theme` config, or add global variable `NOTIFY_THEME` on your .env file

```php
'theme' => env('NOTIFY_THEME', 'dark'),
```

Got result like that

<p align="center">
<img src="https://i.ibb.co/FVR99PJ/Screenshot-2019-12-11-at-23-12-20.png">
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

You can now choose where the notification should appear with the `position` variable in the configuration file. By default
the `top-right` position is enable.

```php
'position' => 'top-right',
```

You can define preset notifications in the config file using the following structure:

```php
'preset-messages' => [
    'user-updated' => [
        'message' => 'The user has been updated successfully.',
        'type'    => 'success',
        'icon'    => 'flaticon2-check-mark',
        'model'   => 'connect',
        'title'   => 'User Updated',
    ],
    'user-deleted' => [
        'message' => 'The user has been deleted successfully.',
        'type'    => 'success',
        'icon'    => 'flaticon2-check-mark',
        'model'   => 'connect',
        'title'   => 'User Deleted',
    ],
],
```

The example above shows the config for two preset notifications: 'user-updated' and 'user-deleted'.

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
[link-travis]: https://travis-ci.org/mckenziearts/laravel-notify
[link-author]: https://arthurmonney.com
[link-contributors]: ../../contributors
