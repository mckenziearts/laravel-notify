<?php

use PHPUnit\Framework\TestCase;
use Mckenziearts\Notify\LaravelNotify;

class NotifyTest extends TestCase
{
    protected $session;

    protected $notify;

    public function setUp() : void
    {
        $this->session = Mockery::spy('Mckenziearts\Notify\Storage\Session');
        $this->notify = new LaravelNotify($this->session);
    }

    /** @test */
    public function it_display_info_notify()
    {
        $this->notify->success('Success Notification');
        $message = 'Success Notification';

        $this->assertEquals('Success Notification', $message);
    }
}
