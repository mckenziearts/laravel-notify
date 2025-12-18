@php
    use Mckenziearts\Notify\Enums\NotificationType;
    use Mckenziearts\Notify\Enums\NotificationModel;
@endphp

<x-notify::notification-wrapper
    :model="NotificationModel::Connect"
    @class([
        'border-t-4 bg-white dark:bg-zinc-800',
        'border-green-600 dark:border-green-400' => session()->get('notify.type') === NotificationType::Success,
        'border-red-600 dark:border-red-400' => session()->get('notify.type') === NotificationType::Error,
    ])
>
    <div class="p-4">
        <div class="flex items-start">
            <div @class([
                'no-co inline-flex items-center p-2 text-white text-sm rounded-full shrink-0',
                'bg-linear-to-r from-green-600 to-green-800' => session()->get('notify.type') === NotificationType::Success,
                'bg-linear-to-r from-red-600 to-red-800' => session()->get('notify.type') === NotificationType::Error,
            ])>
                <x-notify::icon
                    :name="session()->get('notify.icon')"
                    class="size-5"
                    aria-hidden="true"
                />
            </div>

            <div class="ms-3 w-0 flex-1 pt-0.5">
                <x-notify::title :title="session()->get('notify.title')" />

                @if (session()->get('notify.message'))
                    <x-notify::content :content="session()->get('notify.message')" />
                @endif

                <x-notify::actions />
            </div>
            <div class="ms-4 shrink-0 flex">
                <x-notify::button x-on:click="show = false;" />
            </div>
        </div>
    </div>
</x-notify::notification-wrapper>
