@if (session()->get('notify.model') === 'connect')
    <div class="notify fixed inset-0 flex items-end justify-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end">
        <div
            x-data="{ show: @if(session()->get('notify.model') === 'connect') true @else false @endif }"
            x-init="setTimeout(() => { show = true }, 750)"
            x-show="show"
            x-transition:enter="transform ease-out duration-300 transition"
            x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
            x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @class([
                'pointer-events-auto max-w-sm w-full shadow-lg rounded-lg border-t-4',
                'bg-white' => config('notify.theme') === 'light',
                'bg-slate-800' => config('notify.theme') !== 'light',
                'border-green-600' => session()->get('notify.type') === 'success',
                'border-red-600' => session()->get('notify.type') === 'error',
            ])
        >
            <div class="relative rounded-lg shadow-xs overflow-hidden">
                <div class="p-4">
                    <div class="flex items-start">
                        @if(session()->get('notify.type') === 'success')
                            <div class="inline-flex items-center bg-gradient-to-r from-green-600 to-green-800 p-2 text-white text-sm rounded-full shrink-0">
                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.288 15.038a5.25 5.25 0 017.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 011.06 0z" />
                                </svg>
                            </div>
                        @endif
                        @if(session()->get('notify.type') === 'error')
                            <div class="inline-flex items-center bg-gradient-to-r from-red-600 to-red-800 p-2 text-white text-sm rounded-full shrink-0">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </div>
                        @endif
                        <div class="ml-6 w-0 flex-1">
                            <x-notify::notify-title :title="session()->get('notify.title')" />
                            <x-notify::notify-content :content="session()->get('notify.message')" />
                        </div>
                        <div class="ml-4 flex-shrink-0 flex">
                            <x-notify::button />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
