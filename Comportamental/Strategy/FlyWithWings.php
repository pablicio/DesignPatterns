<?php
namespace App\DesignPattners\Strategy;
/**
 * Created by PhpStorm.
 * User: pablicio
 * Date: 08/04/2017
 * Time: 11:11
 */
class FlyWithWings implements FlyInterface
{
    public function fly()
    {
        echo "Meu voo é Uma maravilha";
    }
}