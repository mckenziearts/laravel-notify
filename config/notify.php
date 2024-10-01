<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Notify Theme
    |--------------------------------------------------------------------------
    |
    | You can change the theme of notifications by specifying the desired theme.
    | Default themes available: light, dark, colorful, minimal.
    |
    */

    'theme' => env('NOTIFY_THEME', 'light'),

    /*
    |--------------------------------------------------------------------------
    | Notification timeout
    |--------------------------------------------------------------------------
    |
    | Defines the number of seconds during which the notification will be visible.
    | You can set a default timeout or customize for each message type.
    |
    */

    'timeout' => env('NOTIFY_TIMEOUT', 5000),

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
        'user-updated' => [
            'message' => 'The user has been updated successfully.',
            'type' => 'success',
            'model' => 'connect',
            'title' => 'User Updated',
            'timeout' => 5000, // Specific timeout for this message
        ],
        'user-deleted' => [
            'message' => 'The user has been deleted successfully.',
            'type' => 'error',
            'model' => 'toast',
            'title' => 'User Deleted',
            'timeout' => 3000, // Shorter timeout for error messages
        ],
        'info-message' => [
            'message' => 'This is an informational message.',
            'type' => 'info',
            'model' => 'drake',
            'title' => 'Information',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Sound Notifications
    |--------------------------------------------------------------------------
    |
    | Define whether to enable sound notifications for alerts.
    | This can enhance user experience by providing audible alerts.
    |
    */

    'sound' => env('NOTIFY_SOUND', true), // Default to true

    /*
    |--------------------------------------------------------------------------
    | Localization Support
    |--------------------------------------------------------------------------
    |
    | Enable localization support for notifications.
    | Specify the default language for messages.
    |
    */

    'localization' => [
        'default' => env('NOTIFY_LANGUAGE', 'en'),
        'supported' => ['en', 'tr', 'fr', 'es'], // Add more languages as needed
    ],

];
