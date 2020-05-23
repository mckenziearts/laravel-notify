<?php

namespace Mckenziearts\Notify;

use Illuminate\View\Component;

class NotifyComponent extends Component
{
    public function render()
    {
        return view('notify::messages');
    }
}
