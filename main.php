<?php

require_once 'vendor/autoload.php';

use Romurs\ChocolateFactory\SweetsFactory;

$factory = new SweetsFactory();
$factory->orderSnack("конфета");
print "-------------" . PHP_EOL;
$factory->orderSnack("белый шоколад");
print "-------------" . PHP_EOL;
$factory->orderSnack("ботончик");
print "-------------" . PHP_EOL;