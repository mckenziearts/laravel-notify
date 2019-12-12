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

    /**
     * Create a new notify instance.
     *
     * @param Session $session
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    /**
     * Flash an information message.
     *
     * @param string $message
     * @return $this
     */
    public function info(string $message) : LaravelNotify
    {
        $this->flash($message, 'info', 'flaticon-exclamation-1', 'toast');

        return $this;
    }

    /**
     * Flash a success message.
     *
     * @param  string $message
     * @return $this
     */
    public function success(string $message) : LaravelNotify
    {
        $this->flash($message, 'success', 'flaticon2-check-mark', 'toast');

        return $this;
    }

    /**
     * Flash an error message.
     *
     * @param  string $message
     * @return $this
     */
    public function error(string $message) : LaravelNotify
    {
        $this->flash($message, 'error', 'flaticon2-delete', 'toast');

        return $this;
    }

    /**
     * Flash a warning message.
     *
     * @param  string $message
     * @return $this
     */
    public function warning(string $message) : LaravelNotify
    {
        $this->flash($message, 'warning', 'flaticon-warning-sign', 'toast');

        return $this;
    }

    /**
     * Return a Connect Notification
     *
     * @param string $type
     * @param string $title
     * @param string $message
     * @return $this
     */
    public function connect(string $type, string $title, string $message) : LaravelNotify
    {
        $icon = ($type === 'success') ? 'flaticon-like' : 'flaticon-cancel';

        $this->flash($message, $type, $icon, 'connect', $title);

        return $this;
    }

    /**
     * Return a smiley notify
     *
     * @param string $type
     * @param string $message
     * @return $this
     */
    public function smiley(string $type, string $message) : LaravelNotify
    {
        $icon = ($type === 'success') ? '👍' : '🙅🏽‍♂';

        $this->flash($message, $type, $icon, 'smiley');

        return $this;
    }

    /**
     * Return a smiley notify
     *
     * @param string $type
     * @param string $message
     * @return $this
     */
    public function emotify(string $type, string $message) : LaravelNotify
    {
        $this->flash($message, $type, null, 'emotify');

        return $this;
    }

    /**
     * Return a drake notify
     *
     * @param string $type
     * @return $this
     */
    public function drake(string $type) : LaravelNotify
    {
        $icon = ($type === 'success') ? 'flaticon2-check-mark' : 'flaticon2-cross';
        $message = ($type === 'success') ? 'Success' : 'Try Again';

        $this->flash($message, $type, $icon, 'drake');

        return $this;
    }

    /**
     * Flash a message.
     *
     * @param  string $message
     * @param  string|null $type
     * @param  string|null $icon
     * @param  string|null $model
     * @param  string|null $title
     *
     * @return void
     */
    public function flash($message, $type = null, $icon = null, string $model = null, string $title = null)
    {
        $notifications = [
            'message' => $message,
            'type' => $type,
            'icon' => $icon,
            'model' => $model,
            'title' => $title
        ];

        $this->session->flash('notify', $notifications);
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
}
