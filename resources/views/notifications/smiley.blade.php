@php
    use Mckenziearts\Notify\Enums\NotificationType;
    use Mckenziearts\Notify\Enums\NotificationModel;
@endphp

<x-notify::notification-wrapper
    :model="NotificationModel::Smiley"
    class="no-smi bg-white dark:bg-zinc-800"
>
    <div class="p-4">
        <div class="flex items-start">
            <x-notify::icon
                :name="session()->get('notify.icon')"
                class="text-lg"
                aria-hidden="true"
            />

            <div class="ms-3 w-0 flex-1 pt-0.5">
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
