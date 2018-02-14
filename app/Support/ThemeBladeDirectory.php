<?php

namespace App\Support;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class ThemeBladeDirectory
{
    /**
     * @return string
     */
    public static function get(): string
    {
        return storage_path().'/../theme/'.config('wordpress.themes.blade.directory');
    }
}