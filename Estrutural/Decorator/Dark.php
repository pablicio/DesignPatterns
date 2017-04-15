<?php
namespace App\DesignPattners\Decorator;
/**
 * Created by PhpStorm.
 * User: pablicio
 * Date: 09/04/2017
 * Time: 12:21
 */


class Dark extends Beverage
{
    public function __construct()
    {
        $this->description = "Café Preto";
    }

    public function cost()
    {
        return .99;
    }
}