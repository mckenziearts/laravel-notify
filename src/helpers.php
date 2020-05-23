<?php

if (! function_exists('notify')) {
    /**
     * Notify.
     *
     * @param  string|null  $message
     * @param  string|null  $title
     * @return \Mckenziearts\Notify\LaravelNotify
     */
    function notify(string $message = null, string $title = null)
    {
        $notify = app('notify');

        if (! is_null($message)) {
            return $notify->success($message, $title);
        }

        return $notify;
    }
}

if (! function_exists('connectify')) {
    /**
     * Connectify.
     *
     * @param  string  $type
     * @param  string  $title
     * @param  string  $message
     * @return \Mckenziearts\Notify\LaravelNotify
     */
    function connectify(string $type, string $title, string $message)
    {
        return app('notify')->connect($type, $title, $message);
    }
}

if (! function_exists('drakify')) {
    /**
     * Drakify.
     *
     * @param  string  $type
     * @return \Mckenziearts\Notify\LaravelNotify
     */
    function drakify(string $type)
    {
        return app('notify')->drake($type);
    }
}

if (! function_exists('smilify')) {
    /**
     * Smilify.
     *
     * @param  string  $type
     * @param  string|null  $message
     * @return \Mckenziearts\Notify\LaravelNotify
     */
    function smilify(string $type, string $message)
    {
        return app('notify')->smiley($type, $message);
    }
}
if (! function_exists('emotify')) {
    /**
     * Emotify.
     *
     * @param  string  $type
     * @param  string|null  $message
     * @return \Mckenziearts\Notify\LaravelNotify
     */
    function emotify(string $type, string $message)
    {
        return app('notify')->emotify($type, $message);
    }
}

if (! function_exists('notifyJs')) {
    /**
     * @return string
     */
    function notifyJs(): string
    {
        return '<script type="text/javascript" src="'.asset('vendor/mckenziearts/laravel-notify/js/notify.js').'"></script>';
    }
}

if (! function_exists('notifyCss')) {
    /**
     * @return string
     */
    function notifyCss(): string
    {
        return '<link rel="stylesheet" type="text/css" href="'.asset('vendor/mckenziearts/laravel-notify/css/notify.css').'"/>';
    }
}
