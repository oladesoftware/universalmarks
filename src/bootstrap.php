<?php

use Oladesoftware\Universalmarks\App;

require (dirname(__DIR__) . "/vendor/autoload.php");

App::getInstance()
    ->run();