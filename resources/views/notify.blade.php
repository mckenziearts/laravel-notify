@extends('layout.app')

@section('content')

    <div class="bg-white overflow-hidden relative">
        <div class="max-w-screen-xl px-4 mx-auto py-8 sm:py-12 sm:px-6 lg:px-8 md:py-20 xl:py-24 relative">
            <svg class="hidden lg:block absolute left-full transform -translate-x-1/2 -translate-y-10" width="404" height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="b1e6e422-73f8-40a6-b5d9-c8586e37e0e7" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#b1e6e422-73f8-40a6-b5d9-c8586e37e0e7)"></rect>
            </svg>
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-base font-medium leading-5 bg-pink-100 text-pink-800">
                        <svg class="-ml-0.5 mr-1.5 h-2 w-2 text-pink-400" fill="currentColor" viewBox="0 0 8 8">
                            <circle cx="4" cy="4" r="3" />
                        </svg>
                        Version 2.0
                    </span>
                    <h2 class="mt-1 text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:leading-none sm:text-6xl lg:text-5xl xl:text-6xl">
                        Notify for Laravel
                    </h2>
                    <p class="mt-3 text-base text-gray-600 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                        Version 2 is Here 🤩 ! Laravel Notify is a package that lets you add custom notifications to your project. A diverse range of notification design with
                        <a href="https://tailwindcss.com" class="text-gray-900 font-semibold">TailwindCSS</a> and <a href="https://tailwindui.com" class="text-gray-900 font-semibold">TailwindUI</a>.
                    </p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <a href="https://github.com/mckenziearts/laravel-notify" class="flex items-center justify-center w-full px-6 py-3 text-base font-medium leading-5 text-white transition duration-150 ease-in-out bg-pink-600 border border-transparent rounded-md hover:bg-pink-500 focus:outline-none focus:shadow-outline-red md:py-4 md:text-lg md:px-10">
                                Getting Started
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                    <svg class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-8 scale-75 origin-top sm:scale-100 lg:hidden" width="640" height="784" fill="none" viewBox="0 0 640 784">
                        <defs>
                            <pattern id="4f4f415c-a0e9-44c2-9601-6ded5a34a13e" x="118" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                            </pattern>
                        </defs>
                        <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor"></rect>
                        <rect x="118" width="404" height="784" fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)"></rect>
                    </svg>
                    <div class="mt-32 md:mt-0 relative mx-auto w-full rounded-lg lg:max-w-md">
                        <img class="animate-bounce relative mx-auto" width="490" src="{{ asset('/vendor/mckenziearts/laravel-notify/images/notifications.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div x-data="{ connectify_notification: 'success' }" class="py-16 bg-cool-gray-100 relative overflow-hidden lg:py-24">
        <div class="relative max-w-xl px-4 mx-auto sm:px-6 lg:px-8 lg:max-w-screen-xl">
            <div class="lg:grid lg:grid-cols-2 lg:gap-12 lg:items-center">
                <div class="relative">
                    <h4 class="text-2xl leading-8 font-extrabold text-gray-900 tracking-tight sm:text-3xl sm:leading-9">
                        Connectity Notification
                    </h4>
                    <p class="mt-3 text-lg leading-7 text-gray-500">
                        Connectity Notification can be used to notify your users that they no longer have an internet
                        connection to perform the action they started.
                    </p>
                    <div class="mt-10 flex items-center space-x-6">
                        <div class="flex items-center">
                            <input id="connectify_success" name="connectify_notifications" x-model="connectify_notification" type="radio" class="form-radio h-4 w-4 text-pink-600 focus:shadow-outline-red transition duration-150 ease-in-out" value="success">
                            <label for="connectify_success" class="ml-2">
                                <span class="block cursor-pointer text-sm leading-5 font-medium text-gray-700">Success</span>
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="connectify_error" name="connectify_notifications" x-model="connectify_notification" type="radio" class="form-radio h-4 w-4 text-pink-600 focus:shadow-outline-red transition duration-150 ease-in-out" value="danger">
                            <label for="connectify_error" class="ml-2">
                                <span class="block cursor-pointer text-sm leading-5 font-medium text-gray-700">Error</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mt-10 relative lg:mt-0">
                    <div
                        x-show="connectify_notification === 'success'"
                        x-description="Notification panel, show/hide based on alert state."
                        x-transition:enter="transform ease-out duration-300 transition"
                        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                        style="display: none"
                    >
                        <h5 class="text-lg leading-6 font-medium text-gray-900">Success Notification</h5>
                        <p class="mt-2 mb-4 text-base leading-6 text-gray-500">
                            From your controller, call the flash method with a message and success type.
                        </p>
                        <pre>
                            <code class="language-php">connectify('success', 'Network Found', 'Laravel Notify v2 is insane 🔥 !');</code>
                        </pre>
                        <div class="mt-4">
                            <div class="max-w-md w-full bg-white shadow-lg rounded-lg pointer-events-auto border-t-4 border-green-600">
                                <div class="relative rounded-lg shadow-xs overflow-hidden">
                                    <div class="p-4">
                                        <div class="flex items-start">
                                            <div class="inline-flex items-center bg-gradient-to-r from-green-600 to-green-800 p-2 text-white text-sm rounded-full flex-shrink-0">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="wifi w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                                                </svg>
                                            </div>
                                            <div class="ml-6 w-0 flex-1">
                                                <p class="text-base leading-5 font-medium text-green-600">
                                                    Network Found
                                                </p>
                                                <p class="mt-1 text-sm leading-5 text-gray-500">
                                                    Laravel Notify v2 is insane 🔥 !
                                                </p>
                                            </div>
                                            <div class="ml-4 flex-shrink-0 flex">
                                                <button class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        x-show="connectify_notification === 'danger'"
                        x-description="Notification panel, show/hide based on alert state."
                        x-transition:enter="transform ease-out duration-300 transition"
                        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                        style="display: none"
                    >
                        <h5 class="text-lg leading-6 font-medium text-gray-900">Danger Notification</h5>
                        <p class="mt-2 mb-4 text-base leading-6 text-gray-500">
                            From your controller, call the flash method with a message and danger type.
                        </p>
                        <pre>
                            <code class="language-php">connectify('error', 'Network Not Found', 'Connection could not be established. Please try again!');</code>
                        </pre>
                        <div class="mt-4">
                            <div class="max-w-md w-full bg-white shadow-lg rounded-lg pointer-events-auto border-t-4 border-red-600">
                                <div class="relative rounded-lg shadow-xs overflow-hidden">
                                    <div class="p-4">
                                        <div class="flex items-start">
                                            <div class="inline-flex items-center bg-gradient-to-r from-red-600 to-red-800 p-2 text-white text-sm rounded-full flex-shrink-0">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="x w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                                </svg>
                                            </div>
                                            <div class="ml-6 w-0 flex-1">
                                                <p class="text-base leading-5 font-medium text-red-600">
                                                    Network Not Found
                                                </p>
                                                <p class="mt-1 text-sm leading-5 text-gray-500">
                                                    Connection could not be established. Please try again!
                                                </p>
                                            </div>
                                            <div class="ml-4 flex-shrink-0 flex">
                                                <button class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-16 relative overflow-hidden lg:py-24">
        <svg class="hidden lg:block absolute right-full transform translate-x-1/2 translate-y-12" width="404" height="784" fill="none" viewBox="0 0 404 784">
            <defs>
                <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                </pattern>
            </defs>
            <rect width="404" height="784" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)"></rect>
        </svg>
        <div class="relative max-w-xl px-4 mx-auto sm:px-6 lg:px-8 lg:max-w-screen-xl">
            <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-12 lg:items-center">
                <div class="lg:col-start-2">
                    <h4 class="text-2xl leading-8 font-extrabold text-gray-900 tracking-tight sm:text-3xl sm:leading-9">
                        Toast Notification
                    </h4>
                    <p class="mt-3 text-lg leading-7 text-gray-500">
                        Toast Notification can be used to inform the user after the actions he has performed (CRUD actions).
                        From your application, call the flash method with a message and type.
                    </p>
                    <ul class="mt-8 space-y-4">
                        <li>
                            <div>
                                <h5 class="text-lg leading-6 font-medium text-gray-900">Success Toast</h5>
                                <div class="mt-2">
                                    <pre><code class="language-php">notify()->success('You have successfully logged in');</code></pre>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h5 class="text-lg leading-6 font-medium text-gray-900">Warning Toast</h5>
                                <div class="mt-2">
                                    <pre><code class="language-php">notify()->warning('Please charge your mobile phone');</code></pre>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h5 class="text-lg leading-6 font-medium text-gray-900">Info Toast</h5>
                                <div class="mt-2">
                                    <pre><code class="language-php">notify()->info('You have new subscribers');</code></pre>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h5 class="text-lg leading-6 font-medium text-gray-900">Danger Toast</h5>
                                <div class="mt-2">
                                    <pre><code class="language-php">notify()->error('Some error here please try again');</code></pre>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="mt-10 -mx-4 relative lg:mt-0 lg:col-start-1">
                    <svg class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" fill="none" viewBox="0 0 784 404">
                        <defs>
                            <pattern id="e80155a9-dfde-425a-b5ea-1f6fadd20131" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                            </pattern>
                        </defs>
                        <rect width="784" height="404" fill="url(#e80155a9-dfde-425a-b5ea-1f6fadd20131)"></rect>
                    </svg>
                    <div class="relative space-y-4">
                        <div class="mx-auto max-w-md w-full bg-white shadow-lg rounded-lg pointer-events-auto border-l-4 border-green-600">
                            <div class="relative rounded-lg shadow-xs overflow-hidden">
                                <div class="p-4">
                                    <div class="flex items-start">
                                        <div class="inline-flex items-center bg-green-600 p-2 text-white text-sm rounded-full flex-shrink-0">
                                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="check w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                            </svg>
                                        </div>
                                        <div class="ml-4 w-0 flex-1">
                                            <p class="text-base leading-5 font-medium text-green-600">
                                                Success
                                            </p>
                                            <p class="mt-1 text-sm leading-5 text-gray-500">
                                                You have successfully logged in.
                                            </p>
                                        </div>
                                        <div class="ml-4 flex-shrink-0 flex">
                                            <button class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mx-auto max-w-md w-full bg-white shadow-lg rounded-lg pointer-events-auto border-l-4 border-yellow-400">
                            <div class="relative rounded-lg shadow-xs overflow-hidden">
                                <div class="p-4">
                                    <div class="flex items-start">
                                        <div class="inline-flex items-center bg-yellow-400 p-2 text-white text-sm rounded-full flex-shrink-0">
                                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="exclamation w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                            </svg>
                                        </div>
                                        <div class="ml-4 w-0 flex-1">
                                            <p class="text-base leading-5 font-medium text-yellow-400">
                                                Warning
                                            </p>
                                            <p class="mt-1 text-sm leading-5 text-gray-500">
                                                Please charge your mobile phone.
                                            </p>
                                        </div>
                                        <div class="ml-4 flex-shrink-0 flex">
                                            <button class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mx-auto max-w-md w-full bg-white shadow-lg rounded-lg pointer-events-auto border-l-4 border-blue-600">
                            <div class="relative rounded-lg shadow-xs overflow-hidden">
                                <div class="p-4">
                                    <div class="flex items-start">
                                        <div class="inline-flex items-center bg-blue-600 p-2 text-white text-sm rounded-full flex-shrink-0">
                                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="exclamation-circle w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                        <div class="ml-4 w-0 flex-1">
                                            <p class="text-base leading-5 font-medium text-blue-600">
                                                Info
                                            </p>
                                            <p class="mt-1 text-sm leading-5 text-gray-500">
                                                You have new subscribers.
                                            </p>
                                        </div>
                                        <div class="ml-4 flex-shrink-0 flex">
                                            <button class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mx-auto max-w-md w-full bg-white shadow-lg rounded-lg pointer-events-auto border-l-4 border-red-600">
                            <div class="relative rounded-lg shadow-xs overflow-hidden">
                                <div class="p-4">
                                    <div class="flex items-start">
                                        <div class="inline-flex items-center bg-red-600 p-2 text-white text-sm rounded-full flex-shrink-0">
                                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="x w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                            </svg>
                                        </div>
                                        <div class="ml-4 w-0 flex-1">
                                            <p class="text-base leading-5 font-medium text-red-600">
                                                Danger
                                            </p>
                                            <p class="mt-1 text-sm leading-5 text-gray-500">
                                                Some error here please try again
                                            </p>
                                        </div>
                                        <div class="ml-4 flex-shrink-0 flex">
                                            <button class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div x-data="{ drake_notification: 'success' }" class="py-16 relative bg-orange-400 overflow-hidden lg:py-24">
        <div class="relative max-w-xl px-4 mx-auto sm:px-6 lg:px-8 lg:max-w-screen-xl">
            <div class="lg:grid lg:grid-cols-2 lg:gap-12 lg:items-start">
                <div class="relative">
                    <h4 class="text-2xl leading-8 font-extrabold text-gray-900 tracking-tight sm:text-3xl sm:leading-9">
                        Drake Notification
                    </h4>
                    <p class="mt-3 text-lg leading-7 text-white">
                        Drake Notification can be used to notify your users that they have a bad action request.
                    </p>
                    <div class="mt-10 flex items-center space-x-6">
                        <div class="flex items-center">
                            <input id="drake_success" name="drake_notifications" x-model="drake_notification" type="radio" class="form-radio h-4 w-4 text-pink-600 focus:shadow-outline-red transition duration-150 ease-in-out" value="success">
                            <label for="drake_success" class="ml-2">
                                <span class="block cursor-pointer text-sm leading-5 font-medium text-white">Success</span>
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="drake_error" name="drake_notifications" x-model="drake_notification" type="radio" class="form-radio h-4 w-4 text-pink-600 focus:shadow-outline-red transition duration-150 ease-in-out" value="danger">
                            <label for="drake_error" class="ml-2">
                                <span class="block cursor-pointer text-sm leading-5 font-medium text-white">Error</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mt-10 relative lg:mt-0">
                    <div
                            x-show="drake_notification === 'success'"
                            x-description="Notification panel, show/hide based on alert state."
                            x-transition:enter="transform ease-out duration-300 transition"
                            x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                            x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                            style="display: none"
                    >
                        <h5 class="text-lg leading-6 font-medium text-gray-900">Success Notification</h5>
                        <p class="mt-2 mb-4 text-base leading-6 text-gray-50">
                            From your controller, call the flash method with a message and success type.
                        </p>
                        <pre>
                            <code class="language-php">drakify('success');</code>
                        </pre>
                        <div class="mt-4">
                            <div class="max-w-sm w-full bg-white shadow-lg rounded-md pointer-events-auto">
                                <div class="h-48 relative rounded-md shadow-xs overflow-hidden">
                                    <img class="absolute inset-0" src="{{ asset('/vendor/mckenziearts/laravel-notify/images/drake-success.jpg') }}" alt="">
                                    <div class="bg-green-500 absolute inset-0 opacity-75"></div>
                                    <div class="p-4 relative z-10">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        x-show="drake_notification === 'danger'"
                        x-description="Notification panel, show/hide based on alert state."
                        x-transition:enter="transform ease-out duration-300 transition"
                        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                        style="display: none"
                    >
                        <h5 class="text-lg leading-6 font-medium text-gray-900">Danger Notification</h5>
                        <p class="mt-2 mb-4 text-base leading-6 text-gray-50">
                            From your controller, call the flash method with a message and danger type.
                        </p>
                        <pre>
                            <code class="language-php">drakify('error');</code>
                        </pre>
                        <div class="mt-4">
                            <div class="max-w-sm w-full bg-white shadow-lg rounded-md pointer-events-auto">
                                <div class="h-48 relative rounded-md shadow-xs overflow-hidden">
                                    <img class="absolute inset-0" src="{{ asset('/vendor/mckenziearts/laravel-notify/images/drake-error.jpg') }}" alt="">
                                    <div class="bg-red-500 absolute inset-0 opacity-75"></div>
                                    <div class="p-4 relative z-10">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div x-data="{ smiley_notification: 'success' }" class="py-16 bg-cool-gray-100 relative overflow-hidden lg:py-24">
        <div class="relative max-w-xl px-4 mx-auto sm:px-6 lg:px-8 lg:max-w-screen-xl">
            <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-12 lg:items-center">
                <div class="lg:col-start-2 relative">
                    <h4 class="text-2xl leading-8 font-extrabold text-gray-900 tracking-tight sm:text-3xl sm:leading-9">
                        Smiley Notification
                    </h4>
                    <p class="mt-3 text-lg leading-7 text-gray-500">
                        Smiley notification can be user to display notification messages to users who like smileys.
                    </p>
                    <div class="mt-10 flex items-center space-x-6">
                        <div class="flex items-center">
                            <input id="smiley_success" name="smiley_notification" x-model="smiley_notification" type="radio" class="form-radio h-4 w-4 text-pink-600 focus:shadow-outline-red transition duration-150 ease-in-out" value="success">
                            <label for="smiley_success" class="ml-2">
                                <span class="block cursor-pointer text-sm leading-5 font-medium text-gray-700">Success</span>
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="smiley_error" name="smiley_notification" x-model="smiley_notification" type="radio" class="form-radio h-4 w-4 text-pink-600 focus:shadow-outline-red transition duration-150 ease-in-out" value="danger">
                            <label for="smiley_error" class="ml-2">
                                <span class="block cursor-pointer text-sm leading-5 font-medium text-gray-700">Error</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mt-10 relative lg:mt-0 lg:col-start-1">
                    <div
                        x-show="smiley_notification === 'success'"
                        x-description="Notification panel, show/hide based on alert state."
                        x-transition:enter="transform ease-out duration-300 transition"
                        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                        style="display: none"
                    >
                        <h5 class="text-lg leading-6 font-medium text-gray-900">Success Notification</h5>
                        <p class="mt-2 mb-4 text-base leading-6 text-gray-500">
                            From your controller, call the flash method with a message and success type.
                        </p>
                        <pre>
                            <code class="language-php">smilify('success', 'Laravel Notify v2 is insane 🔥 !');</code>
                        </pre>
                        <div class="mt-4">
                            <div class="max-w-md w-full bg-white shadow-lg rounded-lg pointer-events-auto">
                                <div class="relative rounded-lg shadow-xs overflow-hidden">
                                    <div class="p-4">
                                        <div class="flex items-start">
                                            <div class="inline-flex items-center text-white text-2xl rounded-full flex-shrink-0">
                                                <span>👍</span>
                                            </div>
                                            <div class="ml-6 w-0 flex-1">
                                                <p class="text-base leading-5 font-medium text-green-600">
                                                    Success !
                                                </p>
                                                <p class="mt-1 text-sm leading-5 text-gray-500">
                                                    Laravel Notify v2 is insane 🔥 !
                                                </p>
                                            </div>
                                            <div class="ml-4 flex-shrink-0 flex">
                                                <button class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        x-show="smiley_notification === 'danger'"
                        x-description="Notification panel, show/hide based on alert state."
                        x-transition:enter="transform ease-out duration-300 transition"
                        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                        style="display: none"
                    >
                        <h5 class="text-lg leading-6 font-medium text-gray-900">Danger Notification</h5>
                        <p class="mt-2 mb-4 text-base leading-6 text-gray-500">
                            From your controller, call the flash method with a message and danger type.
                        </p>
                        <pre>
                            <code class="language-php">smilify('error', 'Bad request appear please try again');</code>
                        </pre>
                        <div class="mt-4">
                            <div class="max-w-md w-full bg-white shadow-lg rounded-lg pointer-events-auto">
                                <div class="relative rounded-lg shadow-xs overflow-hidden">
                                    <div class="p-4">
                                        <div class="flex items-start">
                                            <div class="inline-flex items-center text-white text-2xl rounded-full flex-shrink-0">
                                                <span>🙅🏽‍♂️</span>
                                            </div>
                                            <div class="ml-6 w-0 flex-1">
                                                <p class="text-base leading-5 font-medium text-red-600">
                                                    Error !
                                                </p>
                                                <p class="mt-1 text-sm leading-5 text-gray-500">
                                                    Bad request appear please try again
                                                </p>
                                            </div>
                                            <div class="ml-4 flex-shrink-0 flex">
                                                <button class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div x-data="{ emoticon_notification: 'success' }" class="py-16 bg-white relative overflow-hidden lg:py-24">
        <div class="relative max-w-xl px-4 mx-auto sm:px-6 lg:px-8 lg:max-w-screen-xl">
            <div class="lg:grid lg:grid-cols-2 lg:gap-12 lg:items-center">
                <div class="relative">
                    <h4 class="text-2xl leading-8 font-extrabold text-gray-900 tracking-tight sm:text-3xl sm:leading-9">
                        Emoticon Notification
                    </h4>
                    <p class="mt-3 text-lg leading-7 text-gray-500">
                        Emoticon notification can be user to display notification messages to users who like emoticons :D.
                    </p>
                    <div class="mt-10 flex items-center space-x-6">
                        <div class="flex items-center">
                            <input id="emoticon_success" name="emoticon_notification" x-model="emoticon_notification" type="radio" class="form-radio h-4 w-4 text-pink-600 focus:shadow-outline-red transition duration-150 ease-in-out" value="success">
                            <label for="emoticon_success" class="ml-2">
                                <span class="block cursor-pointer text-sm leading-5 font-medium text-gray-700">Success</span>
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="emoticon_error" name="emoticon_notification" x-model="emoticon_notification" type="radio" class="form-radio h-4 w-4 text-pink-600 focus:shadow-outline-red transition duration-150 ease-in-out" value="danger">
                            <label for="emoticon_error" class="ml-2">
                                <span class="block cursor-pointer text-sm leading-5 font-medium text-gray-700">Error</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mt-10 relative lg:mt-0">
                    <div
                        x-show="emoticon_notification === 'success'"
                        x-description="Notification panel, show/hide based on alert state."
                        x-transition:enter="transform ease-out duration-300 transition"
                        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                        style="display: none"
                    >
                        <h5 class="text-lg leading-6 font-medium text-gray-900">Success Notification</h5>
                        <p class="mt-2 mb-4 text-base leading-6 text-gray-500">
                            From your controller, call the flash method with a message and success type.
                        </p>
                        <pre>
                            <code class="language-php">emotify('success', 'You are awesome. Your data successfully saved. Great Job :) !');</code>
                        </pre>
                        <div class="mt-4">
                            <div class="max-w-md w-full bg-gradient-to-r from-teal-500 via-green-500 to-green-800 shadow-lg rounded-lg pointer-events-auto">
                                <div class="relative rounded-lg shadow-xs overflow-hidden">
                                    <div class="p-4">
                                        <div class="flex items-start">
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
                                            <div class="ml-6 w-0 flex-1">
                                                <p class="text-sm leading-5 text-white">
                                                    You are awesome. Your data successfully saved. Great Job :) !
                                                </p>
                                            </div>
                                            <div class="ml-4 flex-shrink-0 flex">
                                                <button class="inline-flex text-gray-400 focus:outline-none focus:text-gray-50 transition ease-in-out duration-150">
                                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        x-show="emoticon_notification === 'danger'"
                        x-description="Notification panel, show/hide based on alert state."
                        x-transition:enter="transform ease-out duration-300 transition"
                        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                        style="display: none"
                    >
                        <h5 class="text-lg leading-6 font-medium text-gray-900">Danger Notification</h5>
                        <p class="mt-2 mb-4 text-base leading-6 text-gray-500">
                            From your controller, call the flash method with a message and danger type.
                        </p>
                        <pre>
                            <code class="language-php">emotify('error', 'It seems your file is too big, try reducing the file size and try again.');</code>
                        </pre>
                        <div class="mt-4">
                            <div class="max-w-md w-full bg-gradient-to-r from-orange-500 via-red-500 to-red-800 shadow-lg rounded-lg pointer-events-auto">
                                <div class="relative rounded-lg shadow-xs overflow-hidden">
                                    <div class="p-4">
                                        <div class="flex items-start">
                                            <div class="inline-flex items-center text-white text-2xl rounded-full flex-shrink-0">
                                                <svg fill="none" viewBox="0 0 40 40" stroke="currentColor" class="emoticon-error w-12 h-12">
                                                    <path d="M30.96 9.04c6.053 6.053 6.053 15.867 0 21.92-6.053 6.053-15.867 6.053-21.92 0-6.053-6.053-6.053-15.867 0-21.92 6.053-6.053 15.867-6.053 21.92 0z" fill="#F7F7F7" stroke="#E52828"/>
                                                    <path d="M11 14l4.05 2.01L11.032 18M29 18l-3.959-2.008L28.968 14" stroke="#E52828" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M14 26s1.269-4 6.028-4C24.787 22 26 25.968 26 25.968" stroke="#E52828" stroke-miterlimit="10" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <div class="ml-6 w-0 flex-1">
                                                <p class="text-sm leading-5 text-white">
                                                    It seems your file is too big, try reducing the file size and try again.
                                                </p>
                                            </div>
                                            <div class="ml-4 flex-shrink-0 flex">
                                                <button class="inline-flex text-white focus:outline-none focus:text-gray-50 transition ease-in-out duration-150">
                                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12 bg-gray-900">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl sm:leading-10">
                    Dark Mode
                </h3>
                <p class="mt-4 max-w-2xl text-lg leading-7 text-gray-300 lg:mx-auto">
                    Some awesome stuff. Active dark mode by update your configuration at <code class="p-1 font-italic rounded bg-red-100 text-red-800">config/notify.php</code> and set
                    <code>NOTIFY_THEME</code> to <span class="text-gray-500">'dark'</span>.
                </p>
                <div class="mt-6 max-w-2xl text-xl leading-7 text-gray-300 lg:mx-auto">
                    <pre>
                        <code class="language-php">'theme' => env('NOTIFY_THEME', 'dark'),</code>
                    </pre>
                </div>
            </div>

            <div class="mt-16">
                <ul class="space-y-5 md:space-y-0 md:grid md:grid-cols-3 md:col-gap-8 md:row-gap-10">
                    <li>
                        <div>
                            <h4 class="text-lg leading-6 font-medium text-gray-100">Connectity Notification</h4>
                            <div class="mt-4">
                                <div class="max-w-md w-full bg-gray-800 shadow-lg rounded-lg pointer-events-auto border-t-4 border-green-600">
                                    <div class="relative rounded-lg shadow-xs overflow-hidden">
                                        <div class="p-4">
                                            <div class="flex items-start">
                                                <div class="inline-flex items-center bg-gradient-to-r from-green-600 to-green-800 p-2 text-white text-sm rounded-full flex-shrink-0">
                                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="wifi w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                                                    </svg>
                                                </div>
                                                <div class="ml-6 w-0 flex-1">
                                                    <p class="text-base leading-5 font-medium text-green-600">
                                                        Network Found
                                                    </p>
                                                    <p class="mt-1 text-sm leading-5 text-white">
                                                        Laravel Notify v2 is insane 🔥 !
                                                    </p>
                                                </div>
                                                <div class="ml-4 flex-shrink-0 flex">
                                                    <button class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h4 class="text-lg leading-6 font-medium text-gray-100">Toast Notification</h4>
                            <div class="mt-4">
                                <div class="max-w-md w-full bg-gray-800 shadow-lg rounded-lg pointer-events-auto border-l-4 border-green-600">
                                    <div class="relative rounded-lg shadow-xs overflow-hidden">
                                        <div class="p-4">
                                            <div class="flex items-start">
                                                <div class="inline-flex items-center bg-green-600 p-2 text-white text-sm rounded-full flex-shrink-0">
                                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="check w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                    </svg>
                                                </div>
                                                <div class="ml-4 w-0 flex-1">
                                                    <p class="text-base leading-5 font-medium text-green-600">
                                                        Success
                                                    </p>
                                                    <p class="mt-1 text-sm leading-5 text-white">
                                                        Laravel Notify v2 is insane 🔥 !
                                                    </p>
                                                </div>
                                                <div class="ml-4 flex-shrink-0 flex">
                                                    <button class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h4 class="text-lg leading-6 font-medium text-gray-100">Smiley Notification</h4>
                            <div class="mt-4">
                                <div class="max-w-md w-full bg-gray-800 shadow-lg rounded-lg pointer-events-auto">
                                    <div class="relative rounded-lg shadow-xs overflow-hidden">
                                        <div class="p-4">
                                            <div class="flex items-start">
                                                <div class="inline-flex items-center text-white text-2xl rounded-full flex-shrink-0">
                                                    <span>👍</span>
                                                </div>
                                                <div class="ml-6 w-0 flex-1">
                                                    <p class="text-base leading-5 font-medium text-green-600">
                                                        Success !
                                                    </p>
                                                    <p class="mt-1 text-sm leading-5 text-white">
                                                        Laravel Notify v2 is insane 🔥 !
                                                    </p>
                                                </div>
                                                <div class="ml-4 flex-shrink-0 flex">
                                                    <button class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection
