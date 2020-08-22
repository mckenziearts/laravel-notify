<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Notify v2</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <!-- Custom built theme - This already includes Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('vendor/mckenziearts/laravel-notify/css/app.css') }}">
    @notifyCss
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>
<body class="bg-gray-50 text-gray-500 font-body transition duration-100 ease-in-out h-screen">

    <div class="bg-white">
        <header class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between py-6 border-b border-gray-200">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        @include('notify::layout.logo')
                    </div>
                    <h5 class="ml-3 text-2xl sm:text-4xl text-gray-600 font-medium leading-6">
                        Laravel <strong class="text-pink-500 font-semibold">Notify</strong>
                        <span class="ml-1 text-base font-semibold text-pink-500">v2.0</span>
                    </h5>
                </div>
                <div>
                    <a href="https://github.com/mckenziearts/laravel-notify" class="leading-6 inline-flex justify-center text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </header>
    </div>

    <main>
        @yield('content')
    </main>

    <footer class="mx-auto max-w-screen-xl px-4 sm:px-6 py-5 lg:px-8">
        <div class="flex items-center space-x-2 text-gray-500">
            <p>&copy; {{ date('Y') }} - <a href="https://github.com/mckenziearts/laravel-notify" class="font-medium" target="_blank">Laravel <span class="text-pink-600 font-semibold">Notify</span></a> v2.0</p>
            <a class="github-button" href="https://github.com/mckenziearts/laravel-notify/issues" data-icon="octicon-issue-opened" aria-label="Issue mckenziearts/laravel-notify on GitHub">Issues</a>
            <a class="github-button" href="https://github.com/mckenziearts/laravel-notify" data-icon="octicon-star" data-show-count="true" aria-label="Star mckenziearts/laravel-notify on GitHub">Star</a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="{{ asset('vendor/mckenziearts/laravel-notify/js/app.js') }}"></script>
    @include('notify::messages')
    @notifyJs

</body>
</html>
