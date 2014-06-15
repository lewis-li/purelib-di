<?php

use PureLib\Di\Adapter\Pimple;

require __DIR__.'/../vendor/autoload.php';

$container = new Pimple(new \Pimple()); 

echo get_class($container);