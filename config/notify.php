<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Notify Theme
    |--------------------------------------------------------------------------
    |
    | You can change the theme of notifications by specifying the desired theme.
    | By default the theme light is activated, but you can change it by
    | specifying the dark mode. To change theme, update the global variable to `dark`
    |
    */

    'theme' => env('NOTIFY_THEME', 'light'),

    /*
    |--------------------------------------------------------------------------
    | Notification timeout
    |--------------------------------------------------------------------------
    |
    | Defines the number of seconds during which the notification will be visible.
    |
    | You can also define an array of timeout for each type of notification such as:
    | ['error' => 10000, 'default' => 5000]
    | Here the error notification will be visible for 10 seconds and all other
    | notifications type for 5 seconds.
    |
    */

    'timeout' => 5000,

    /*
    |--------------------------------------------------------------------------
    | Preset Messages
    |--------------------------------------------------------------------------
    |
    | Define any preset messages here that can be reused.
    | Available model: connect, drake, emotify, smiley, toast
    |
    */

    'preset-messages' => [
        // An example preset 'user updated' Connectify notification.
        'user-updated' => [
            'message' => 'The user has been updated successfully.',
            'type' => 'success',
            'model' => 'connect',
            'title' => 'User Updated',
            'timeout' => 5000,
        ],
    ],

];
