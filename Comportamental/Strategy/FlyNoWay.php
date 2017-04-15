<?php
namespace App\DesignPattners\Strategy;
/**
 * Created by PhpStorm.
 * User: pablicio
 * Date: 08/04/2017
 * Time: 11:12
 */
class FlyNoWay implements FlyInterface
{
    public function fly()
    {
        echo "Não posso Voar, sou um pato gordo";
    }
}