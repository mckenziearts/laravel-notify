@if (session()->get('notify.model') === 'smiley')
    <div class="notify fixed inset-0 flex items-end justify-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end">
        <div
            x-data="{ show: @if(session()->get('notify.model') === 'smiley') true @else false @endif }"
            x-init="setTimeout(() => { show = true }, 750)"
            x-show="show"
            x-transition:enter="transform ease-out duration-300 transition"
            x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
            x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @class([
                'pointer-events-auto max-w-sm w-full shadow-lg rounded-lg',
                'bg-white' => config('notify.theme') === 'light',
                'bg-slate-800' => config('notify.theme') !== 'light',
            ])
        >
            <div class="relative rounded-lg shadow-xs overflow-hidden">
                <div class="p-4">
                    <div class="flex items-start">
                        <div class="inline-flex items-center text-white text-2xl shrink-0">
                            @if(session()->get('notify.type') === 'success') <span>👍</span> @endif
                            @if(session()->get('notify.type') === 'error') <span>🙅🏽‍♂️</span> @endif
                        </div>
                        <div class="ml-6 w-0 flex-1">
                            <x-notify::notify-content :content="session()->get('notify.message')" />
                        </div>
                        <div class="ml-4 shrink-0 flex">
                            <x-notify::button />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
