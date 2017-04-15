<?php

namespace App\DesignPattners\FactoryMethod;

/**
 * Ferrari is a italian car
 */
class Ferrari implements InterfaceVeiculos
{
    /**
     * @var string
     */
    protected $color;

    /**
     * @param string $rgb
     */
    public function setColor($rgb)
    {
        $this->color = $rgb;
    }
}
