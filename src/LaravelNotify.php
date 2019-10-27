<?php

namespace Mckenziearts\Notify;

use Mckenziearts\Notify\Storage\Session;

class LaravelNotify
{
    /**
     * Session storage.
     *
     * @var \Mckenziearts\Notify\Storage\Session
     */
    protected $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    /**
     * Flash a message.
     *
     * @param  string $message
     * @param  string $type
     * @param  array  $options
     *
     * @return void
     */
    public function flash($message, $type = null, array $options = [])
    {
        $this->session->flash([
            'notify.message' => $message,
            'notify.type' => $type,
            'notify.options' => json_encode($options),
        ]);
    }

    /**
     * Get the message
     *
     * @param  boolean $array
     * @return array
     */
    public function get($array = false)
    {
        return [
            'message' => $this->message(),
            'type' => $this->type(),
            'options' => $this->options($array),
        ];
    }

    /**
     * If a message is ready to be shown.
     *
     * @return bool
     */
    public function ready()
    {
        return $this->message();
    }

    /**
     * Get the stored message.
     *
     * @return string
     */
    public function message()
    {
        return $this->session->get('notify.message');
    }

    /**
     * Get the stored type.
     *
     * @return string
     */
    public function type()
    {
        return $this->session->get('notify.type');
    }

    /**
     * Get an additional stored options.
     *
     * @param  boolean $array
     * @return mixed
     */
    public function options($array = false)
    {
        return json_decode($this->session->get('notify.options'), $array);
    }

    /**
     * Get a stored option.
     *
     * @param  string $key
     * @param null $default
     * @return string
     */
    public function option($key, $default = null)
    {
        return array_get($this->options(true), $key, $default);
    }
}
