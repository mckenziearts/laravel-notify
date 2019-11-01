<?php

if (! function_exists('connectify')) {
    /**
     * Connectify
     *
     * @param string $title
     * @param string|null $message
     */
    function connectify(string $title = '', string $message = null)
    {

    }
}

if (! function_exists('toastify')) {
    /**
     * Toastify
     *
     * @param string $title
     * @param string|null $message
     */
    function toastify(string $title = '', string $message = null)
    {

    }
}

if (! function_exists('drakify')) {
    /**
     * Drakify
     *
     * @param string $title
     * @param string|null $message
     */
    function drakify(string $title = '', string $message = null)
    {

    }
}

if (! function_exists('smilify')) {
    /**
     * Smilify
     *
     * @param string $title
     * @param string|null $message
     */
    function smilify(string $title = '', string $message = null)
    {

    }
}

if (! function_exists('notifyJs')) {
    /**
     * @return string
     */
    function notifyJs(): string
    {
        return '<script type="text/javascript" src="'. asset('vendor/mckenziearts/laravel-notify/js/notify.js') .'"></script>';
    }
}

if (! function_exists('notifyCss')) {
    /**
     * @return string
     */
    function notifyCss(): string
    {
        return '<link rel="stylesheet" type="text/css" href="'. asset('vendor/mckenziearts/laravel-notify/css/notify.css') .'"/>';
    }
}
