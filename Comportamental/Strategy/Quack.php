<?php
namespace App\DesignPattners\Strategy;
/**
 * Created by PhpStorm.
 * User: pablicio
 * Date: 08/04/2017
 * Time: 11:12
 */
class Quack implements QuackInterface
{
    public function quack()
    {
        echo "Já Eu Sou um Pato que faz zoada pra caralho!!!!";
    }
}