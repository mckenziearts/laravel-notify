<div id="laravel-notify">
    @if (session()->has('notify.message'))

        @include('notify::notifications.toast')

        @include('notify::notifications.smiley')

        @include('notify::notifications.drakify')

        @include('notify::notifications.connectify')

        @include('notify::notifications.emotify')

    @endif

    {{ session()->forget('notify.message') }}

    <script>
        var notify = {
            timeout: "{{ config('notify.timeout') }}",
        }
    </script>
</div>
