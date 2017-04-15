<?php
namespace App\DesignPattners\Decorator;
/**
 * Created by PhpStorm.
 * User: pablicio
 * Date: 09/04/2017
 * Time: 12:20
 */

abstract class Beverage
{
    public $description = "Teste";

    public function getDescription()
    {
        return $this->description;
    }

    public abstract function cost();
}