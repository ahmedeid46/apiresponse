<?php

namespace Ahmedeid46\APIResponse;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ahmedeid46\APIResponse\Skeleton\SkeletonClass
 */
class APIResponseFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'apiresponse';
    }
}
