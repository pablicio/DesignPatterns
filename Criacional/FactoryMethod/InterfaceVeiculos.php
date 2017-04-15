<?php

namespace App\DesignPattners\FactoryMethod;

/**
 * VehicleInterface is a contract for a vehicle
 */
interface InterfaceVeiculos
{
    /**
     * sets the color of the vehicle
     *
     * @param string $rgb
     */
    public function setColor($rgb);
}
