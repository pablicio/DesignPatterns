<?php
namespace App\DesignPattners\Strategy;
/**
 * Created by PhpStorm.
 * User: pablicio
 * Date: 08/04/2017
 * Time: 11:10
 */
class PatoLino extends Pato
{
    public function __construct()
    {
        $this->flyInterface = new FlyNoWay() ;
        $this->quackInterface = new Quack();
    }


    public function display()
    {
        echo "Sou Um LinoPato";
    }
}