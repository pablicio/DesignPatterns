<?php

namespace App\DesignPattners\FactoryMethod;


/**
 * Bicycle is a bicycle
 */
class Bicicleta implements InterfaceVeiculos
{
    /**
     * @var string
     */
    protected $color;

    /**
     * sets the color of the bicycle
     *
     * @param string $rgb
     */
    public function setColor($rgb)
    {
        $this->color = $rgb;
    }
}
