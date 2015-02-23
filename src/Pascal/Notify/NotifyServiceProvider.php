<?php namespace Pascal\Notifier;

use Illuminate\Support\ServiceProvider;

class NotifyServiceProvider extends ServiceProvider {

    /**
     * Create binding
     */
    public function register()
    {
        $this->app->bindShared('notify', function()
        {
            return $this->app->make('Pascal\Notifier\Notify');
        });

        $this->app->bindShared('notify.render', function()
        {
            return $this->app->make('Pascal\Notifier\NotifyRenderEngine');
        });
    }

}