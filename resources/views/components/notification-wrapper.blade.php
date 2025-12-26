@props([
    'model',
])

@php
    use Mckenziearts\Notify\Enums\NotificationModel;
    use Mckenziearts\Notify\Helpers\DirectionHelper;

    $timeout = ($model instanceof NotificationModel && $model === NotificationModel::Toast)
        || $model === 'toast'
        ? 500
        : 750;
@endphp

<div class="notify" dir="{{ DirectionHelper::getDirection() }}">
    <div aria-live="assertive" class="pointer-events-none fixed inset-0 z-50 flex items-end px-4 py-6 sm:items-start">
        <div class="flex w-full flex-col items-center space-y-4 sm:items-end">
            <div
                x-data="{ show: true }"
                x-init="setTimeout(() => { show = true }, {{ $timeout }})"
                x-show="show"
                {{ $attributes->merge(['class' => 'pointer-events-auto w-full max-w-sm translate-y-0 transform rounded-lg bg-white opacity-100 shadow-lg outline-1 outline-black/5 transition duration-300 ease-out sm:translate-x-0 dark:bg-zinc-800 dark:-outline-offset-1 dark:outline-white/10 starting:translate-y-2 starting:opacity-0 starting:sm:translate-x-2 starting:sm:translate-y-0']) }}
            >
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
