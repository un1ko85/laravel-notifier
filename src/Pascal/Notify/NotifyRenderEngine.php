<?php namespace Pascal\Notifier;

use Illuminate\Session\Store;
use Pascal\Notifier\RenderEngine;

class NotifyRenderEngine implements RenderEngine {

    /**
     * @var \Illuminate\Session\Store
     */
    private $session;

    /**
     * @param Store $session
     */
    function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * @param
     * @return
     */
    public function get($key)
    {
        return $this->session->get('notify.message.'.$key)
    }

    /**
     * @return
     */
    public function overlay()
    {
        return $this->session->has('notify.overlay')
    }

    /**
     * @return
     */
    public function notification()
    {
        return $this->session->has('notify.message.text')
    }

}