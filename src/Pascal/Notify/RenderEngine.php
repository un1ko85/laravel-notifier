<?php namespace Pascal\Notifier;

interface RenderEngine {

    /**
     * Get a Notification Key
     *
     * @param $key
     */
    public function get($key);

    /**
     * Determin if an Overlay Message is availble for render
     */
    public function overlay();

    /**
     * Determin if a Notification Message is availble for render
     */
    public function notification();
}