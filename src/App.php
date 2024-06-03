<?php

namespace Oladesoftware\Universalmarks;

class App
{

    private static ?App $instance = null;

    public static function getInstance(): App
    {
        if (is_null(self::$instance))
        {
            self::$instance = new App();
        }
        return self::$instance;
    }

    private function __construct()
    {

    }

    public function run()
    {

    }

}