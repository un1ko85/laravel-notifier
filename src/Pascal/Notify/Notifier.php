<?php namespace Pascal\Notifier;

interface Notifier {

    /**
     * Display an success styled alert box or flash notification
     *
     * @param $message
     */
    public function success($message, $config = []);

    /**
     * Display an error styled alert box or flash notification
     *
     * @param $message
     */
    public function error($message, $config = []);

    /**
     * Display a warning styled alert box or flash notification
     *
     * @param $message
     */
    public function warning($message, $config = []);

    /**
     * Display an info styled alert box or flash notification
     *
     * @param $message
     */
    public function info($message, $config = []);

    /**
     * Display a Modal overlay
     *
     * @param $message
     */
    public function overlay($message);
}