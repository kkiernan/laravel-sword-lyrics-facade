<?php

namespace Sword;

use Illuminate\Support\Facades\Facade;

class SwordFacade extends Facade
{
    /**
     * Register the service provider.
     * 
     * @return void
     */
    protected static function getFacadeAccessor()
    {
        return 'sword';
    }
}
