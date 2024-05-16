<?php

namespace Romurs\ChocolateFactory;

use Romurs\ChocolateFactory\WhiteChocolate;
use Egor\Chocolate\ChocolateFactory;
use Egor\Chocolate\Sweets;

class SweetsFactory extends ChocolateFactory
{
    public function createSnack(string $type): Sweets
    {
        switch ($type) {
            case "белый шоколад":
                return new WhiteChocolate("Alpen White", "Белый шоколад", ["орехи","карамель"]);
            break;
            case "конфета":
                return new Candy("Raffaello", "Белый щоколад", ["какао", "какосовая стружка", "фундук"]);
            break;
            case "ботончик":
                return new CandyBar("Snickers", "Молочный шоколад", ["орехи", "карамельаня нуга"]);
            break;
          // И тут ещё много разных типов сладостей
            default:
                throw new \InvalidArgumentException("Такого типа шоколада нет");
            break;
        }
    }
}
