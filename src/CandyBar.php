<?php

namespace Romurs\ChocolateFactory;

use Egor\Chocolate\Sweets;

class CandyBar extends Sweets
{
    public function __construct(string $name, string $chocolate, array $toppings)
    {
        parent::__construct($name, $chocolate, $toppings);
    }
    public function cut(): void
    {
        echo "Этот ботончик режут на 4 равные части" . PHP_EOL;
    }
}
