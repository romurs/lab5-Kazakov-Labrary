<?php

namespace Romurs\ChocolateFactory;

use Egor\Chocolate\ChocolateFactory;
use Egor\Chocolate\Sweets;

class SweetsFactory extends ChocolateFactory{
  public function createSnack(string $type): Sweets
  {
    switch($type){
      case "Белый шоколад": 
        return new WhiteChocolate("","",[]);
        break;
      // И тут ещё много разных типов сладостей
      default:
        throw new \InvalidArgumentException("Такого типа шоколада нет");
        break;
    }
  }
}