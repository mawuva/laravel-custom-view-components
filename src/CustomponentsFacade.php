<?php

namespace Mawuekom\Customponents;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mawuekom\Customponents\Skeleton\SkeletonClass
 */
class CustomponentsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'customponents';
    }
}
