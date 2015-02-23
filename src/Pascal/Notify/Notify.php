<?php namespace Pascal\Notifier;

use Illuminate\Session\Store;
use Pascal\Notifier\Notifier;

class Notify implements Notifier {

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
     * Display a success styled alert box or flash notification
     *
     * @param $message
     */
    public function success($message, $config = [])
    {
        $this->message($message, 'success');
    }

    /**
     * Display an error styled alert box or flash notification
     *
     * @param $message
     */
    public function error($message, $config = [])
    {
        $this->message($message, 'danger');
    }

    /**
     * Display a warning styled alert box or flash notification
     *
     * @param $message
     */
    public function warning($message, $config = [])
    {
        $this->message($message, 'warning');
    }

    /**
     * Display an info styled alert box or flash notification
     *
     * @param $message
     */
    public function info($message, $config = [])
    {
        $this->message($message, 'info');
    }

    /**
     * Display a Modal overlay
     *
     * @param $message
     */
    public function overlay($message, $config = [])
    {
        $this->message($message);
        $this->session->flash('notify.overlay', true);
    }

    /**
     * @param $message
     * @param string $level
     */
    private function message($message, $level = 'info')
    {
        $this->session->flash('notify.message.text', $message);
        $this->session->flash('notify.message.level', $level);
    }

}