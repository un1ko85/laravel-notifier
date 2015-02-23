<?php

if ( ! function_exists('notify')) {

    /**
     * Shortcut to Notify a new Message
     *
     * @param  string|null $message
     * @return \Pascal\Notify\Notifier
     */
    function notify($message = null)
    {
        $notifier = app('notify');

        if ( ! is_null($message)) {
            return $notifier->info($message);
        }

        return $notifier;
    }

}

if ( ! function_exists('notifier_render')) {

    /**
     * Shortcut to Render Notifier Messages
     *
     * @param  string|null $key
     * @return \Pascal\Notify\NotifyRenderEngine
     */
    function notifier_render($key = null)
    {
        $notifier = app('notify.render');

        if ( ! is_null($key)) {
            return $notifier->get($key);
        }

        return $notifier;
    }

}