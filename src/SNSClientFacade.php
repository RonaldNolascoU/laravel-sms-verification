<?php

namespace Ronuz\SMSVerification;

use Illuminate\Support\Facades\Facade;

class SNSClientFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'SNSClientSingleton';
    }
}
