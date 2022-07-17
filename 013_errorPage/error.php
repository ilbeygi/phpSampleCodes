<?php

use Spatie\Ignition\Ignition;

require_once __DIR__ . '/vendor/autoload.php';

Ignition::make()->register();

throw new Exception('Bye world');