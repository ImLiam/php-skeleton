<?php

namespace ImLiam\Skeleton;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ImLiam\Skeleton\SkeletonClass
 */
class SkeletonFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}
