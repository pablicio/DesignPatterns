<?php
namespace App\DesignPattners\Decorator;
/**
 * Created by PhpStorm.
 * User: pablicio
 * Date: 09/04/2017
 * Time: 12:21
 */


class Espresso extends Beverage
{
    public function __construct()
    {
        $this->description = "Café Espresso";
    }

    public function cost()
    {
        return 1.99;
    }
}