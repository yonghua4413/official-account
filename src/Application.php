<?php

namespace YongHua4413\OfficialAccount;
use YongHua4413\OfficialAccount\Auth\ServiceProvider;

/**
 * Class Application
 * @package YongHua4413\OfficialAccount
 */

class Application
{
    public $app;
    public $config;

    public function __construct($config)
    {
        $this->config = $config;
        $this->app = new ServiceProvider();
    }

    public function __call($name, $arguments)
    {
        return $this->app->$name($arguments);
    }
}