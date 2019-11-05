<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Notify Theme
    |--------------------------------------------------------------------------
    |
    | You can change the theme of notifications by specifying the desired theme.
    | By default the theme white is activated, but you can change it by
    | specifying the dark mode. if null `white` theme is active. To change theme
    | update the global variable to `dark`
    |
    */

    'theme' => env('NOTIFY_THEME', null),

    /*
    |--------------------------------------------------------------------------
    | Demo URL
    |--------------------------------------------------------------------------
    |
    | if true you can acces to the demo documentation of the notify package
    | here: http://localhost:8000/notify/demo.
    | By default is true
    |
    */

    'demo' => true,

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

];
