<?php

use Illuminate\Support\Facades\Route;

if (config('notify.demo')) {
    Route::view('notify/demo', 'notify::notify');
}
