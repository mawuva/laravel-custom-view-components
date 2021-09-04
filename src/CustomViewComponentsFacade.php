<?php

namespace Mawuekom\CustomViewComponents;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mawuekom\CustomViewComponents\Skeleton\SkeletonClass
 */
class CustomViewComponentsFacade extends Facade
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
