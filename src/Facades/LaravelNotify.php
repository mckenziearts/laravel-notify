<?php

namespace Mckenziearts\Notify\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelNotify extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'notify';
    }
}
