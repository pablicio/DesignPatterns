<?php

namespace App\DesignPattners\FactoryMethod;

/**
 * ItalianFactory is vehicle factory in Italy
 */
class FabricaItalia extends FactoryMethod
{
    /**
     * {@inheritdoc}
     */
    protected function createVehicle($type)
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicicleta();
                break;
            case parent::FAST:
                return new Ferrari();
                break;
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}
