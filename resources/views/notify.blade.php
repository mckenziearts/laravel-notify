@extends('notify::layout.app')

@section('content')

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
