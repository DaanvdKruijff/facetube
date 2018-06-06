<?php

namespace App\Controllers;

class Controller
{
    protected $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function __get($key)
    {
        if (!$this->app->has($key)) {
            return;
        }

        return $this->app->get($key);
    }
}
