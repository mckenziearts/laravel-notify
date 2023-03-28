@if (session()->get('notify.model') === 'emotify')
    <div class="notify fixed inset-0 flex items-end justify-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end">
        <div
            x-data="{ show: @if(session()->get('notify.model') === 'emotify') true @else false @endif }"
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
                'bg-gradient-to-r from-teal-500 via-green-500 to-green-800' => session()->get('notify.type') === 'success',
                'bg-gradient-to-r from-orange-500 via-red-500 to-red-800' => session()->get('notify.type') === 'error'
            ])
        >
            <div class="relative rounded-lg shadow-xs overflow-hidden">
                <div class="p-4">
                    <div class="flex items-start">
                        @if(session()->get('notify.type') === 'success')
                            <div class="inline-flex items-center text-white text-2xl rounded-full flex-shrink-0">
                                <svg fill="none" viewBox="0 0 40 40" stroke="currentColor" class="emoticon-success w-12 h-12">
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
                        @if(session()->get('notify.type') === 'error')
                            <div class="inline-flex items-center text-white text-2xl rounded-full flex-shrink-0">
                                <svg fill="none" viewBox="0 0 40 40" stroke="currentColor" class="emoticon-error w-12 h-12">
                                    <path d="M30.96 9.04c6.053 6.053 6.053 15.867 0 21.92-6.053 6.053-15.867 6.053-21.92 0-6.053-6.053-6.053-15.867 0-21.92 6.053-6.053 15.867-6.053 21.92 0z" fill="#F7F7F7" stroke="#E52828"/>
                                    <path d="M11 14l4.05 2.01L11.032 18M29 18l-3.959-2.008L28.968 14" stroke="#E52828" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14 26s1.269-4 6.028-4C24.787 22 26 25.968 26 25.968" stroke="#E52828" stroke-miterlimit="10" stroke-linecap="round"/>
                                </svg>
                            </div>
                        @endif
                        <div class="ml-6 w-0 flex-1">
                            <p class="text-sm leading-5 text-white">
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
