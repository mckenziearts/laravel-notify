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
