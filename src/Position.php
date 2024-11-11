<?php

declare(strict_types=1);

namespace Mckenziearts\Notify;

enum Position: string
{
    case TopLeft = 'top-left';

    case TopRight = 'top-right';

    case BottomLeft = 'bottom-left';

    case BottomRight = 'bottom-right';
}
