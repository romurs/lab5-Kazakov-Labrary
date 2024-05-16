<?php

namespace Romurs\ChocolateFactory;

use Egor\Chocolate\Sweets;

class Candy extends Sweets
{
    public function __construct(string $name, string $chocolate, array $toppings)
    {
        parent::__construct($name, $chocolate, $toppings);
    }
    public function cut(): void
    {
        echo "Этот конфетный снек нарезан на кусочки." . PHP_EOL;
    }
}
