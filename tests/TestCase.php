<?php

declare(strict_types=1);

namespace Tests;

use Mckenziearts\Notify\LaravelNotify;
use Mockery;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected $session;

    protected $notify;

    protected function setUp(): void
    {
        parent::setUp();

        config()->set('app.key', '6rE9Nz59bGRbeMATftriyQjrpF7DcOQm');

        $this->session = Mockery::spy('Mckenziearts\Notify\Storage\Session');
        $this->notify = new LaravelNotify($this->session);
    }
}
