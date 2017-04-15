<?php
namespace App\DesignPattners\Decorator;
/**
 * Created by PhpStorm.
 * User: pablicio
 * Date: 09/04/2017
 * Time: 12:22
 */


class Mocha extends CondimentDecorator
{
    public $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . " Mocha";
    }

    public function cost()
    {
        return .20 + $this->beverage->cost();
    }
}