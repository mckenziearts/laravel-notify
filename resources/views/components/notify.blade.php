@if (session()->has('notify.0.message'))
    <div class="notify fixed inset-0 flex items-end justify-start px-4 py-6 pointer-events-none flex-col space-y-3 sm:p-6">
        @php
            $notifyList = session()->get('notify') ?: [];
        @endphp
        @foreach($notifyList as $key => $value)
            @php
                $notify = session()->pull('notify.'.$key) ?: null;
            @endphp
            @include('notify::notifications.toast')

            @include('notify::notifications.smiley')

            @include('notify::notifications.drakify')

            @include('notify::notifications.connectify')

            @include('notify::notifications.emotify')

        @endforeach
    </div>
@endif

<script>
    var notify = {
        timeout: "{{ config('notify.timeout') }}",
    }
</script>
