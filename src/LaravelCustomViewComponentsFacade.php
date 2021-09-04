<?php

namespace Mawuekom\LaravelCustomViewComponents;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mawuekom\LaravelCustomViewComponents\Skeleton\SkeletonClass
 */
class LaravelCustomViewComponentsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-custom-view-components';
    }
}
