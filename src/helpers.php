<?php

use Mckenziearts\Notify\LaravelNotify;

if (! function_exists('notify')) {
    function notify(string $message = null, string $title = null, ?int $timeout = null): LaravelNotify
    {
        $notify = app('notify');

        if (! is_null($message)) {
            return $notify->success($message, $title, $timeout);
        }

        return $notify;
    }
}

if (! function_exists('connectify')) {
    function connectify(string $type, string $title, string $message, ?int $timeout = null): LaravelNotify
    {
        return app('notify')->connect($type, $title, $message, $timeout);
    }
}

if (! function_exists('drakify')) {
    function drakify(string $type, ?int $timeout = null): LaravelNotify
    {
        return app('notify')->drake($type, $timeout);
    }
}

if (! function_exists('smilify')) {
    function smilify(string $type, string $message, ?int $timeout = null): LaravelNotify
    {
        return app('notify')->smiley($type, $message, $timeout);
    }
}
if (! function_exists('emotify')) {
    function emotify(string $type, string $message, ?int $timeout = null): LaravelNotify
    {
        return app('notify')->emotify($type, $message, $timeout);
    }
}

if (! function_exists('notifyJs')) {
    function notifyJs(): string
    {
        return '<script type="text/javascript" src="'.asset('vendor/mckenziearts/laravel-notify/js/notify.js').'"></script>';
    }
}

if (! function_exists('notifyCss')) {
    function notifyCss(): string
    {
        return '<link rel="stylesheet" type="text/css" href="'.asset('vendor/mckenziearts/laravel-notify/dist/notify.css').'"/>';
    }
}
