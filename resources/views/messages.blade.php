@if (session()->has('notify.message'))

    @if (session()->get('notify.model') === 'toast')
        <div class="notify-alert notify-{{ session()->get('notify.type') }} {{ config('notify.theme') }} animated {{ config('notify.animate.in_class') }}" role="alert">
            <div class="notify-alert-icon"><i class="{{ session()->get('notify.icon') }}"></i></div>
            <div class="notify-alert-text">
                <h4>{{ session()->get('notify.title') ?? session()->get('notify.type') }}</h4>
                <p>{{ session()->get('notify.message') }}</p>
            </div>
            <div class="notify-alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="flaticon2-cross"></i></span>
                </button>
            </div>
        </div>
    @endif

    @if (session()->get('notify.model') === 'smiley')
        <div class="smiley-alert smiley-{{ session()->get('notify.type') }} {{ config('notify.theme') }} animated {{ config('notify.animate.in_class') }}" role="alert">
            <div class="smiley-icon"><span>{{ session()->get('notify.icon') }}</span></div>
            <div class="smiley-text">
                <p><span class="title">{{ session()->get('notify.type') }}!</span> {{ session()->get('notify.message') }}</p>
            </div>
            <div class="smiley-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="flaticon2-cross"></i></span>
                </button>
            </div>
        </div>
    @endif

    @if (session()->get('notify.model') === 'drake')
        <div class="drake-alert drake-{{ session()->get('notify.type') }} animated {{ config('notify.animate.in_class') }}" role="alert">
            <div class="drake-icon">
                <span><i class="flaticon2-check-mark"></i></span>
                <h4>{{ session()->get('notify.message') }}</h4>
            </div>
        </div>
    @endif

    @if (session()->get('notify.model') === 'connect')
        <div class="connectify-alert connectify-{{ session()->get('notify.type') }} {{ config('notify.theme') }} animated {{ config('notify.animate.in_class') }}" role="alert">
            <div class="connectify-icon">
                <i class="flaticon-like"></i><span>{{ session()->get('notify.type') }}</span>
            </div>
            <div class="connectify-text">
                <h4>{{ session()->get('notify.title') }}</h4>
                <p>{{ session()->get('notify.message') }}</p>
            </div>
            <div class="connectify-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="flaticon2-cross"></i>
                    </span>
                </button>
            </div>
        </div>
    @endif

    @if (session()->get('notify.model') === 'emotify')
        <div class="emoticon-alert emoticon-{{ session()->get('notify.type') }} animated {{ config('notify.animate.in_class') }}" role="alert">
            <div class="emoticon-icon"><span></span></div>
            <div class="emoticon-text">
                <p>{{ session()->get('notify.message') }}</p>
            </div>
            <div class="emoticon-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="flaticon2-cross"></i></span>
                </button>
            </div>
        </div>
    @endif

@endif

{{ session()->forget('notify.message') }}

<script>

    var notify = {
        timeout: "{{ config('notify.animate.timeout') }}",
        animatedIn: "{{ config('notify.animate.in_class') }}",
        animatedOut: "{{ config('notify.animate.out_class') }}",
        position: "{{ config('notify.position') }}"
    }

</script>
