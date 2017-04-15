<?php
namespace App\DesignPattners\Strategy;
/**
 * Created by PhpStorm.
 * User: pablicio
 * Date: 08/04/2017
 * Time: 11:10
 */
abstract class Pato
{
    public function __construct(FlyInterface $fly, QuackInterface $quack)
    {
        $this->flyInterface = $fly;
        $this->quackInterface = $quack;
    }

    public abstract function display();

    public function performfly()
    {
        $this->flyInterface->fly();
    }

    public function performquack()
    {
        $this->quackInterface->quack();
    }

    public function swin()
    {
        echo "Todos os patos flutuam na água!";
    }

    public function setFlyInterface(FlyInterface $fb)
    {
        $this->flyInterface = $fb;
    }

    public function setQuackInterface(QuackInterface $qb)
    {
        $this->quackInterface = $qb;
    }


}