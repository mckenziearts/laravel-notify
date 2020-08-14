@extends('notify::layout.app')

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
                        <a href="https://tailwindcss.com" class="text-gray-800 font-medium">TailwindCSS</a> and <a href="https://tailwindui.com" class="text-gray-800 font-medium">TailwindUI</a>.
                    </p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <a href="#docs" class="flex items-center justify-center w-full px-6 py-3 text-base font-medium leading-5 text-white transition duration-150 ease-in-out bg-pink-600 border border-transparent rounded-md hover:bg-pink-500 focus:outline-none focus:shadow-outline-red md:py-4 md:text-lg md:px-10">
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
                    <div class="relative mx-auto w-full rounded-lg lg:max-w-md">
                        <img class="relative mx-auto" width="490" src="https://tailwindui.com/img/features/feature-example-2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div x-data class="py-16 relative overflow-hidden lg:py-24">
        <div class="relative max-w-xl px-4 mx-auto sm:px-6 lg:px-8 lg:max-w-screen-xl">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
                <div class="relative">
                    <h4 class="text-2xl leading-8 font-extrabold text-gray-900 tracking-tight sm:text-3xl sm:leading-9">
                        Connectity Notification
                    </h4>
                    <p class="mt-3 text-lg leading-7 text-gray-500">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur minima sequi recusandae, porro maiores officia assumenda.
                    </p>
                    <div class="mt-10 flex items-center space-x-6">
                        <div class="flex items-center">
                            <input id="connectify_success" name="connectify_notifications" type="radio" class="form-radio h-4 w-4 text-pink-600 focus:shadow-outline-red transition duration-150 ease-in-out" value="success" checked>
                            <label for="connectify_success" class="ml-2">
                                <span class="block cursor-pointer text-sm leading-5 font-medium text-gray-700">Success</span>
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="connectify_error" name="connectify_notifications" type="radio" class="form-radio h-4 w-4 text-pink-600 focus:shadow-outline-red transition duration-150 ease-in-out" value="error">
                            <label for="connectify_error" class="ml-2">
                                <span class="block cursor-pointer text-sm leading-5 font-medium text-gray-700">Error</span>
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="connectify_dark" name="connectify_notifications" type="radio" class="form-radio h-4 w-4 text-pink-600 focus:shadow-outline-red transition duration-150 ease-in-out" value="dark">
                            <label for="connectify_dark" class="ml-2">
                                <span class="block cursor-pointer text-sm leading-5 font-medium text-gray-700">Dark Mode</span>
                            </label>
                        </div>
                    </div>
                    <span class="mt-6 inline-flex rounded-md shadow-sm">
                        <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition ease-in-out duration-150">
                            Success
                        </button>
                    </span>
                </div>
                <div class="mt-10 -mx-4 relative lg:mt-0">
                    <div>
                        <h5 class="text-lg leading-6 font-medium text-gray-900">Success Notification</h5>
                        <p class="mt-2 mb-4 text-base leading-6 text-gray-500">
                            From your controller, call the flash method with a message and success type.
                        </p>
                        <pre>
                            <code class="language-php">connectify('success', 'Connection Found', 'Success Message Here');</code>
                        </pre>
                        <div class="mt-4">
                            <div class="max-w-md w-full bg-white shadow-lg rounded-lg pointer-events-auto border-t-4 border-green-600">
                                <div class="relative rounded-lg shadow-xs overflow-hidden">
                                    <div class="absolute bg-gray">

                                    </div>
                                    <div class="p-4">
                                        <div class="flex items-start">
                                            <div class="ml-10 w-0 flex-1">
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
                </div>
            </div>
        </div>
    </div>

    <h2><i class="flaticon-alert"></i> Connectify <small class="text-primary">Notification</small></h2>
    <div class="row mb-5">
        <div class="col-md-7">
            <div class="card align-items-center">
                <div class="card-body">
                    <div class="connectify-alert connectify-success {{ config('notify.theme') }}" role="alert">
                        <div class="connectify-icon">
                            <i class="flaticon-like"></i><span>Success</span>
                        </div>
                        <div class="connectify-text">
                            <h4>Connection Found</h4>
                            <p>You have successfully reconnected.</p>
                        </div>
                        <div class="connectify-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">
                                    <i class="flaticon2-cross"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="connectify-alert connectify-error {{ config('notify.theme') }}" role="alert">
                        <div class="connectify-icon">
                            <i class="flaticon-cancel"></i><span>Error</span>
                        </div>
                        <div class="connectify-text">
                            <h4>No Available Connections</h4>
                            <p>Connection could not be established. Please try reconnection after 15s</p>
                        </div>
                        <div class="connectify-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">
                                    <i class="flaticon2-cross"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <h4># Basic Usage</h4>
            <p>From your application, call the flash method with a message and type.</p>
            <pre>
                <code class="language-php">connectify('success', 'Connection Found', 'Success Message Here');</code>
            </pre>
            <pre>
                <code class="language-php">connectify('error', 'No Connection Found', 'Error Message Here');</code>
            </pre>
        </div>
    </div>

    <h2><i class="flaticon-alert"></i> Toast  <small class="text-primary">Notification</small></h2>
    <div class="row mb-5">
        <div class="col-md-7">
            <div class="card align-items-center">
                <div class="card-body">
                    <div class="notify-alert notify-success {{ config('notify.theme') }}" role="alert">
                        <div class="notify-alert-icon"><i class="flaticon2-check-mark"></i></div>
                        <div class="notify-alert-text">
                            <h4>Success</h4>
                            <p>Anyone with access can view your invited visitor</p>
                        </div>
                        <div class="notify-alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="flaticon2-cross"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="notify-alert notify-info {{ config('notify.theme') }}" role="alert">
                        <div class="notify-alert-icon"><i class="flaticon-exclamation-1"></i></div>
                        <div class="notify-alert-text">
                            <h4>Info</h4>
                            <p>Anyone with access can view your invited visitor</p>
                        </div>
                        <div class="notify-alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="flaticon2-cross"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="notify-alert notify-warning {{ config('notify.theme') }}" role="alert">
                        <div class="notify-alert-icon"><i class="flaticon-warning-sign"></i></div>
                        <div class="notify-alert-text">
                            <h4>Warning</h4>
                            <p>Anyone with access can view your invited visitor</p>
                        </div>
                        <div class="notify-alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="flaticon2-cross"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="notify-alert notify-error {{ config('notify.theme') }}" role="alert">
                        <div class="notify-alert-icon"><i class="flaticon2-delete"></i></div>
                        <div class="notify-alert-text">
                            <h4>Error</h4>
                            <p>Anyone with access can view your invited visitor</p>
                        </div>
                        <div class="notify-alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="flaticon2-cross"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <h4># Basic Usage</h4>
            <p>From your application, call the flash method with a message and type.</p>
            <pre><code class="language-php">notify()->success('You have successfully logged in');</code></pre>
            <pre><code class="language-php">notify()->info('You have new subscribers');</code></pre>
            <pre><code class="language-php">notify()->warning('Please charge your mobile phone');</code></pre>
            <pre><code class="language-php">notify()->error('Some error here please try again');</code></pre>
        </div>
    </div>

    <h2><i class="flaticon-alert"></i> Drake <small class="text-primary">Notification</small></h2>
    <div class="row mb-5">
        <div class="col-md-7">
            <div class="card align-items-center">
                <div class="card-body">
                    <div class="drake-alert drake-success" role="alert">
                        <div class="drake-icon">
                            <span><i class="flaticon2-check-mark"></i></span>
                            <h4>Success</h4>
                        </div>
                    </div>
                    <div class="drake-alert drake-error" role="alert">
                        <div class="drake-icon">
                            <span><i class="flaticon2-cross"></i></span>
                            <h4>Try Again</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <h4># Basic Usage</h4>
            <p>From your application, call the flash method with a message and type.</p>
            <pre><code class="language-php">drakify('success');</code></pre>
            <pre><code class="language-php">drakify('error');</code></pre>
        </div>
    </div>

    <h2><i class="flaticon-alert"></i> Smiley <small class="text-primary">Notification</small></h2>
    <div class="row mb-5">
        <div class="col-md-7">
            <div class="card align-items-center">
                <div class="card-body">
                    <div class="smiley-alert smiley-success {{ config('notify.theme') }}" role="alert">
                        <div class="smiley-icon"><span>👍</span></div>
                        <div class="smiley-text">
                            <p><span class="title">Success!</span>, your file has been successfully uploaded!</p>
                        </div>
                        <div class="smiley-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="flaticon2-cross"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="smiley-alert smiley-error {{ config('notify.theme') }}" role="alert">
                        <div class="smiley-icon"><span>🙅🏽‍♂️</span></div>
                        <div class="smiley-text">
                            <p><span class="title">Error!</span>, it seems your file is too big, try reducing the file size and try again.</p>
                        </div>
                        <div class="smiley-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="flaticon2-cross"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <h4># Basic Usage</h4>
            <p>From your application, call the flash method with a message and type.</p>
            <pre><code class="language-php">smilify('success', 'You have successfully reconnected');</code></pre>
            <pre><code class="language-php">smilify('error', 'Bad request appear please try again');</code></pre>
        </div>
    </div>

    <h2><i class="flaticon-alert"></i> Emoticon <small class="text-primary">Notification</small></h2>
    <div class="row mb-5">
        <div class="col-md-7">
            <div class="card align-items-center">
                <div class="card-body">
                    <div class="emoticon-alert emoticon-success" role="alert">
                        <div class="emoticon-icon"><span></span></div>
                        <div class="emoticon-text">
                            <p>You are awesome. Your data successfully saved. Great Job :) !</p>
                        </div>
                        <div class="emoticon-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="flaticon2-cross"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="emoticon-alert emoticon-error" role="alert">
                        <div class="emoticon-icon"><span></span></div>
                        <div class="emoticon-text">
                            <p>It seems your file is too big, try reducing the file size and try again.</p>
                        </div>
                        <div class="emoticon-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="flaticon2-cross"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <h4># Basic Usage</h4>
            <p>From your application, call the flash method with a message and type.</p>
            <pre><code class="language-php">emotify('success', 'You have successfully done it!');</code></pre>
            <pre><code class="language-php">emotify('error', 'Bad request appear please try again');</code></pre>
        </div>
    </div>

@endsection
