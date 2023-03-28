<?php

namespace Mckenziearts\Notify\Facades;

use Illuminate\Support\Facades\Facade;

final class LaravelNotify extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'notify';
    }
}
