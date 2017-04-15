<?php
namespace App\DesignPattners\Decorator;
/**
 * Created by PhpStorm.
 * User: pablicio
 * Date: 09/04/2017
 * Time: 12:50
 */

class VendaCafe
{
    public static function pedido(){

        $espresso = new Dark();

        echo $espresso->getDescription() . " $" . $espresso->cost() . "<br>";

        $espresso = new Mocha($espresso);

        echo $espresso->getDescription() . " $" . $espresso->cost() . "<br>";

        $espresso = new Milk($espresso);

        echo $espresso->getDescription() . " $" . $espresso->cost() . "<br>";

        $espresso = new Soy($espresso);

        echo $espresso->getDescription() . " $" . $espresso->cost() . "<br>";

        $espresso = new Whip($espresso);

        echo $espresso->getDescription() . " $" . $espresso->cost() . "<br>";

    }
}