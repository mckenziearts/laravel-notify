@php
    use Mckenziearts\Notify\Enums\NotificationType;
    use Mckenziearts\Notify\Enums\NotificationModel;
@endphp

<x-notify::notification-wrapper
    :model="NotificationModel::Emotify"
    @class([
        'no-emo',
        'bg-linear-to-r from-teal-500 via-green-500 to-green-800' => session()->get('notify.type') === NotificationType::Success,
        'bg-linear-to-r from-orange-500 via-red-500 to-red-800' => session()->get('notify.type') === NotificationType::Error
    ])
>
    <div class="p-4">
        <div class="flex items-start">
            @if (session()->get('notify.icon'))
                <x-notify::icon
                    :name="session()->get('notify.icon')"
                    class="size-10 text-white"
                    aria-hidden="true"
                />
            @else
                @if (session()->get('notify.type') === NotificationType::Success)
                    <div class="inline-flex items-center text-white rounded-full shrink-0">
                        <svg fill="none" viewBox="0 0 40 40" stroke="currentColor" class="emoticon-success size-12" aria-hidden="true">
                            <path d="M19.995 4.5A15.498 15.498 0 0 1 32.89 28.606 15.5 15.5 0 1 1 19.995 4.5z" fill="#F7F7F7" stroke="#137230" />
                            <path d="M14.232 22.382c-.253 0-.43.355-.332.673.5 1.667 2.171 5.858 6.318 5.858s5.859-4.227 6.37-5.908c.1-.323-.078-.678-.334-.678l-12.022.055z" fill="#034915" />
                            <path d="M20.153 32.27c2.492 0 4.512-1.496 4.512-3.34 0-1.846-2.02-3.342-4.512-3.342-2.493 0-4.513 1.496-4.513 3.341 0 1.846 2.02 3.341 4.513 3.341z" fill="#137230" />
                            <path d="M24.98 18.78s-.029-2.485 2.178-2.485c2.206 0 2.16 2.46 2.16 2.46m-18.634.026s-.029-2.486 2.18-2.486c2.208 0 2.16 2.466 2.16 2.466" stroke="#137230" stroke-miterlimit="10" stroke-linecap="round" />
                            <g opacity=".6" fill="#137230">
                                <path d="M8.8 24.73a2.327 2.327 0 1 0 0-4.654 2.327 2.327 0 0 0 0 4.655zM31.203 24.73a2.327 2.327 0 1 0 0-4.654 2.327 2.327 0 0 0 0 4.655z" />
                            </g>
                        </svg>
                    </div>
                @endif

                @if (session()->get('notify.type') === NotificationType::Error)
                    <div class="inline-flex items-center text-white rounded-full shrink-0">
                        <svg fill="none" viewBox="0 0 40 40" stroke="currentColor" class="size-12" aria-hidden="true">
                            <path d="M30.96 9.04c6.053 6.053 6.053 15.867 0 21.92-6.053 6.053-15.867 6.053-21.92 0-6.053-6.053-6.053-15.867 0-21.92 6.053-6.053 15.867-6.053 21.92 0z" fill="#F7F7F7" stroke="#E52828"/>
                            <path d="M11 14l4.05 2.01L11.032 18M29 18l-3.959-2.008L28.968 14" stroke="#E52828" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14 26s1.269-4 6.028-4C24.787 22 26 25.968 26 25.968" stroke="#E52828" stroke-miterlimit="10" stroke-linecap="round"/>
                        </svg>
                    </div>
                @endif
            @endif

            <div class="ms-3 w-0 flex-1 pt-0.5">
                <p class="text-sm leading-5 font-medium text-white">
                    {{ session()->get('notify.title') }}
                </p>

                @if (session()->get('notify.message'))
                    <p class="mt-1 text-sm text-white">
                        {{ session()->get('notify.message') }}
                    </p>
                @endif

                <x-notify::actions class="mt-3 flex gap-6 [&_a]:text-white [&_a:hover]:text-zinc-200" />
            </div>
            <div class="ms-4 shrink-0 flex">
                <x-notify::button x-on:click="show = false;" class="text-white! hover:text-zinc-200!" />
            </div>
        </div>
    </div>
</x-notify::notification-wrapper>
