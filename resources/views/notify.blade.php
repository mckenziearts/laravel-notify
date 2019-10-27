@extends('notify::layout.app')

@section('content')

    <h2><i class="flaticon-alert"></i> Connectify <small class="text-primary">Notification</small></h2>
    <div class="row mb-5">
        <div class="col-md-7">
            <div class="card align-items-center">
                <div class="card-body">
                    <div class="connectify-alert connectify-success" role="alert">
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
                    <div class="connectify-alert connectify-danger" role="alert">
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
            <pre><code class="language-php">notify()->flash('You have successfully reconnected', 'success', 'Connection Found');</code></pre>
        </div>
    </div>

    <h2><i class="flaticon-alert"></i> Toast  <small class="text-primary">Notification</small></h2>
    <div class="row mb-5">
        <div class="col-md-7">
            <div class="card align-items-center">
                <div class="card-body">
                    <div class="notify-alert notify-success" role="alert">
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
                    <div class="notify-alert notify-info" role="alert">
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
                    <div class="notify-alert notify-warning" role="alert">
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
                    <div class="notify-alert notify-danger" role="alert">
                        <div class="notify-alert-icon"><i class="flaticon2-delete"></i></div>
                        <div class="notify-alert-text">
                            <h4>Danger</h4>
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
            <pre><code class="language-php">notify()->flash('You have successfully reconnected', 'success', 'Connection Found');</code></pre>
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
                    <div class="drake-alert drake-danger" role="alert">
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
            <pre><code class="language-php">notify()->flash('You have successfully reconnected', 'success', 'Connection Found');</code></pre>
        </div>
    </div>

    <h2><i class="flaticon-alert"></i> Smiley <small class="text-primary">Notification</small></h2>
    <div class="row mb-5">
        <div class="col-md-7">
            <div class="card align-items-center">
                <div class="card-body">
                    <div class="smiley-alert smiley-success" role="alert">
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
                    <div class="smiley-alert smiley-danger" role="alert">
                        <div class="smiley-icon"><span>🙅🏽‍♂️</span></div>
                        <div class="smiley-text">
                            <p><span class="title">Sorry!</span>, it seems your file is too big, try reducing the file size and try again.</p>
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
            <pre><code class="language-php">notify()->flash('You have successfully reconnected', 'success', 'Connection Found');</code></pre>
        </div>
    </div>

@endsection
