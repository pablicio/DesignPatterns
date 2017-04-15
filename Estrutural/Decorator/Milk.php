<?php
namespace App\DesignPattners\Decorator;
/**
 * Created by PhpStorm.
 * User: pablicio
 * Date: 09/04/2017
 * Time: 12:22
 */


class Milk extends CondimentDecorator
{
    public $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . " Leite";
    }

    public function cost()
    {
        return .05 + $this->beverage->cost();
    }
}