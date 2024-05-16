<?php

namespace Romurs\ChocolateFactory;

use Egor\Chocolate\Sweets;

class WhiteChocolate extends Sweets
{
    public function __construct(string $name, string $chocolate, array $toppings)
    {
        parent::__construct($name, $chocolate, $toppings);
    }
    public function cut(): void
    {
        echo "Этот белый шоколад нарезан ромбиками" . PHP_EOL;
    }
}
