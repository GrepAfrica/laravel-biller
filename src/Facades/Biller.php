<?php

namespace Grep\Biller\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Adedaramola\LaravelBiller\Skeleton\SkeletonClass
 */
class LaravelBillerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-biller';
    }
}
