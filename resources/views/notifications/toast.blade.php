@if (session()->get('notify.model') === 'toast')
    <div class="notify fixed inset-0 flex items-end justify-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end">
        <div
            x-data="{ show: @if(session()->get('notify.model') === 'toast') true @else false @endif }"
            x-init="setTimeout(() => { show = true }, 500)"
            x-show="show"
            x-transition:enter="transform ease-out duration-300 transition"
            x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
            x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @class([
                'pointer-events-auto w-full max-w-sm overflow-hidden shadow-lg rounded-lg border-l-4',
                'bg-white' => config('notify.theme') === 'light',
                'bg-slate-800' => config('notify.theme') !== 'light',
                'border-green-500' => session()->get('notify.type') === 'success',
                'border-yellow-500' => session()->get('notify.type') === 'warning',
                'border-blue-500' => session()->get('notify.type') === 'info',
                'border-red-500' => session()->get('notify.type') === 'error',
            ])
        >
            <div class="relative rounded-lg shadow-xs overflow-hidden">
                <div class="p-4">
                    <div class="flex items-start">
                        @if(session()->get('notify.type') === 'success')
                            <svg class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        @endif
                        @if(session()->get('notify.type') === 'warning')
                            <svg class="w-6 h-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                            </svg>
                            @endif
                        @if(session()->get('notify.type') === 'info')
                            <svg class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                            </svg>
                        @endif
                        @if(session()->get('notify.type') === 'error')
                            <svg class="w-6 h-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        @endif
                        <div class="ml-4 w-0 flex-1">
                            <x-notify::notify-title :title="session()->get('notify.title') ?? session()->get('notify.type')" />
                            <x-notify::notify-content :content="session()->get('notify.message')" />
                        </div>
                        <div class="ml-4 flex shrink-0">
                            <x-notify::button />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
