@if (session()->get('notify.model') === 'drake')
    <div class="notify fixed inset-0 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end">
        <div
            x-data="{ show: @if(session()->get('notify.model') === 'drake') true @else false @endif }"
            x-transition:enter="transform ease-out duration-300 transition"
            x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
            x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="max-w-sm w-full shadow-lg rounded-lg pointer-events-auto"
        >
            <div class="h-40 relative rounded-md shadow-xs overflow-hidden">
                @if(session()->get('notify.type') === 'success')
                    <img class="absolute inset-0" src="{{ asset('/vendor/mckenziearts/laravel-notify/images/drake-success.jpg') }}" alt="">
                    <div class="bg-green-500 absolute inset-0 opacity-75"></div>
                @else
                    <img class="absolute inset-0" src="{{ asset('/vendor/mckenziearts/laravel-notify/images/drake-error.jpg') }}" alt="">
                    <div class="bg-red-500 absolute inset-0 opacity-75"></div>
                @endif
                <div class="p-4 relative z-10">
                    @if(session()->get('notify.type') === 'success')
                        <div class="flex items-start">
                            <div class="flex flex-col space-y-3 p-4 sm:p-6">
                                <span class="flex-shrink-0 h-10 w-10 flex items-center justify-center bg-white rounded-full">
                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="check w-6 h-6 text-green-600">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </span>
                                <h4 class="text-white font-semibold text-xl leading-6">Success</h4>
                            </div>
                        </div>
                    @else
                        <div class="flex justify-end">
                            <div class="flex flex-col space-y-3 p-4 sm:p-6 text-right">
                                <span class="flex-shrink-0 h-10 w-10 flex items-center justify-center bg-white rounded-full">
                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="check w-6 h-6 text-red-600">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                                <h4 class="text-white font-semibold text-xl leading-6">Error</h4>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endif
