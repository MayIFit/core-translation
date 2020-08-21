<?php

namespace MayIFit\Core\Translation\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Translation
 *
 * @package MayIFit\Core\Translation
 */
class Translation extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'translation';
    }
}