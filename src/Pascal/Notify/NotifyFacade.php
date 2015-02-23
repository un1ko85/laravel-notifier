<?php namespace Pascal\Notifier;

use Illuminate\Support\Facades\Facade;

class NotifyFacade extends Facade {

    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'notify';
    }

}