<?php

namespace Mckenziearts\Notify\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelNotify extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'notify';
    }
}
