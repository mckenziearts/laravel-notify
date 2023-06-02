<?php

namespace Mckenziearts\Notify\Storage;

use Illuminate\Session\Store;

final class Session
{
    protected Store $session;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    public function get(string $key, mixed $default = null): mixed
    {
        $this->session->get($key, $default);
    }

    public function flash(string $key, array $data = []): void
    {
        $this->session->flash($key, $data);
    }
}
