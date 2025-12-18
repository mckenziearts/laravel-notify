@php
    use Mckenziearts\Notify\Enums\NotificationType;
    use Mckenziearts\Notify\Enums\NotificationModel;
@endphp

<x-notify::notification-wrapper
    :model="NotificationModel::Toast"
    @class([
        'border-l-4 no-to bg-white dark:bg-zinc-800',
        'border-green-500' => session()->get('notify.type') === NotificationType::Success,
        'border-yellow-500' => session()->get('notify.type') === NotificationType::Warning,
        'border-blue-500' => session()->get('notify.type') === NotificationType::Info,
        'border-red-500' => session()->get('notify.type') === NotificationType::Error,
    ])
>
    <div class="p-4">
        <div class="flex items-start">
            <x-notify::icon
                :name="session()->get('notify.icon')"
                aria-hidden="true"
                @class([
                    'shrink-0 size-5',
                    'text-green-400' => session()->get('notify.type') === NotificationType::Success,
                    'text-yellow-500' => session()->get('notify.type') === NotificationType::Warning,
                    'text-blue-500' => session()->get('notify.type') === NotificationType::Info,
                    'text-red-500' => session()->get('notify.type') === NotificationType::Error,
                ])
            />

            <div class="ms-3 w-0 flex-1">
                <x-notify::title :title="session()->get('notify.title')" />

                @if (session()->get('notify.message'))
                    <x-notify::content :content="session()->get('notify.message')" />
                @endif

                <x-notify::actions />
            </div>
            <div class="ms-4 flex shrink-0">
                <x-notify::button x-on:click="show = false;" />
            </div>
        </div>
    </div>
</x-notify::notification-wrapper>
