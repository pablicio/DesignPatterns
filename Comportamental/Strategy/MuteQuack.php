<?php
namespace App\DesignPattners\Strategy;

/**
 * Created by PhpStorm.
 * User: pablicio
 * Date: 08/04/2017
 * Time: 11:12
 */
class MuteQuack implements QuackInterface
{
    public function quack()
    {
        echo "Sou Um pato Siliencioso!!";
    }
}