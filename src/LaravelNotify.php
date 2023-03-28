<?php

namespace Mckenziearts\Notify;

use Exception;
use Mckenziearts\Notify\Exceptions\MissingPresetNotificationException;
use Mckenziearts\Notify\Storage\Session;

final class LaravelNotify
{
    protected Session $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    public function info(string $message, string $title = null): self
    {
        $this->flash($message, 'info', 'flaticon-exclamation-1', 'toast', $title);

        return $this;
    }

    public function success(string $message, string $title = null): self
    {
        $this->flash($message, 'success', 'flaticon2-check-mark', 'toast', $title);

        return $this;
    }

    public function error(string $message, string $title = null): self
    {
        $this->flash($message, 'error', 'flaticon2-delete', 'toast', $title);

        return $this;
    }

    public function warning(string $message, string $title = null): self
    {
        $this->flash($message, 'warning', 'flaticon-warning-sign', 'toast', $title);

        return $this;
    }

    public function connect(string $type, string $title, string $message): self
    {
        $icon = ($type === 'success') ? 'flaticon-like' : 'flaticon-cancel';

        $this->flash($message, $type, $icon, 'connect', $title);

        return $this;
    }

    public function smiley(string $type, string $message): self
    {
        $icon = ($type === 'success') ? '👍' : '🙅🏽‍♂';

        $this->flash($message, $type, $icon, 'smiley');

        return $this;
    }

    public function emotify(string $type, string $message): self
    {
        $this->flash($message, $type, null, 'emotify');

        return $this;
    }

    public function drake(string $type): self
    {
        $icon = ($type === 'success') ? 'flaticon2-check-mark' : 'flaticon2-cross';
        $message = ($type === 'success') ? __('Success') : __('Try Again');

        $this->flash($message, $type, $icon, 'drake');

        return $this;
    }

    /**
     * Return a preset message that is defined in the config
     * file. If you need to override any of the values, you
     * can pass an array with the key-value pairs of what
     * you want to override.
     *
     * Example: To override the 'message' variable, the array
     *          could have the following structure:
     *
     *          ['message' => 'Your new message here!']
     *
     * @throws Exception
     */
    public function preset(string $presetName, array $overrideValues = []): self
    {
        $presetValues = config('notify.preset-messages.'.$presetName);

        if (! $presetValues) {
            throw new MissingPresetNotificationException('A preset message does not exist with the name: '.$presetName);
        }

        $this->flash(
            $overrideValues['message'] ?? $presetValues['message'],
            $overrideValues['type'] ?? $presetValues['type'] ?? null,
            $overrideValues['icon'] ?? $presetValues['icon'] ?? null,
            $overrideValues['model'] ?? $presetValues['model'] ?? null,
            $overrideValues['title'] ?? $presetValues['title'] ?? null
        );

        return $this;
    }

    public function flash(string $message, string $type = null, string $icon = null, string $model = null, string $title = null): void
    {
        $notifications = [
            'message' => $message,
            'type' => $type,
            'icon' => $icon,
            'model' => $model,
            'title' => $title,
        ];

        $this->session->flash('notify', $notifications);
    }

    public function message(): string
    {
        return $this->session->get('notify.message');
    }

    public function type(): string
    {
        return $this->session->get('notify.type');
    }
}
