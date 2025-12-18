<?php

declare(strict_types=1);

namespace Mckenziearts\Notify\Helpers;

class DirectionHelper
{
    /** @var array<int, string> */
    protected static array $rtlLocales = [
        'ar', // Arabic
        'he', // Hebrew
        'fa', // Persian/Farsi
        'ur', // Urdu
        'yi', // Yiddish
        'ji', // Yiddish (alternative code)
        'iw', // Hebrew (alternative code)
        'dv', // Dhivehi
        'ku', // Kurdish (Sorani)
    ];

    public static function isRtl(): bool
    {
        $direction = config('notify.direction', 'auto');

        if ($direction === 'rtl') {
            return true;
        }

        if ($direction === 'ltr') {
            return false;
        }

        $locale = app()->getLocale();

        foreach (static::$rtlLocales as $rtlLocale) {
            if (str_starts_with($locale, $rtlLocale)) {
                return true;
            }
        }

        return false;
    }

    public static function getDirection(): string
    {
        return static::isRtl() ? 'rtl' : 'ltr';
    }
}
