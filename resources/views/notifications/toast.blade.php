@if (session()->get('notify.model') === 'toast')
    <div class="notify fixed inset-0 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end">
        <div
            x-data="{ show: @if(session()->get('notify.model') === 'toast') true @else false @endif }"
            x-show="show"
            x-description="Notification panel, show/hide based on alert state."
            x-transition:enter="transform ease-out duration-300 transition"
            x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
            x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="max-w-sm w-full @if(config('notify.theme') === 'light') bg-white @else bg-gray-800 @endif shadow-lg rounded-lg pointer-events-auto border-l-4 @if(session()->get('notify.type') === 'success') border-green-600 @endif @if(session()->get('notify.type') === 'warning') border-yellow-400 @endif @if(session()->get('notify.type') === 'info') border-blue-600 @endif @if(session()->get('notify.type') === 'error') border-red-600 @endif"
        >
            <div class="relative rounded-lg shadow-xs overflow-hidden">
                <div class="p-4">
                    <div class="flex items-start">
                        @if(session()->get('notify.type') === 'success')
                            <div class="inline-flex items-center bg-green-600 p-2 text-white text-sm rounded-full flex-shrink-0">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="check w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                        @endif
                        @if(session()->get('notify.type') === 'warning')
                            <div class="inline-flex items-center bg-yellow-400 p-2 text-white text-sm rounded-full flex-shrink-0">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="exclamation w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                </svg>
                            </div>
                        @endif
                        @if(session()->get('notify.type') === 'info')
                            <div class="inline-flex items-center bg-blue-600 p-2 text-white text-sm rounded-full flex-shrink-0">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="exclamation-circle w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                        @endif
                        @if(session()->get('notify.type') === 'error')
                            <div class="inline-flex items-center bg-red-600 p-2 text-white text-sm rounded-full flex-shrink-0">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="x w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </div>
                        @endif
                        <div class="ml-4 w-0 flex-1">
                            <p class="text-base leading-5 font-medium capitalize @if(session()->get('notify.type') === 'success') text-green-600 @endif @if(session()->get('notify.type') === 'warning') text-yellow-400 @endif @if(session()->get('notify.type') === 'info') text-blue-600 @endif @if(session()->get('notify.type') === 'error') text-red-600 @endif">
                                {{ session()->get('notify.title') ?? session()->get('notify.type') }}
                            </p>
                            <p class="mt-1 text-sm leading-5 @if(config('notify.theme') === 'light') text-gray-500 @else text-white @endif">
                                {{ session()->get('notify.message') }}
                            </p>
                        </div>
                        <div class="ml-4 flex-shrink-0 flex">
                            <button @click="show = false;" class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
