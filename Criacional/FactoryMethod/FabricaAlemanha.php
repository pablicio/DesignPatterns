<?php

namespace App\DesignPattners\FactoryMethod;

/**
 * GermanFactory is a vehicle factory in Germany
 */
class FabricaAlemanha extends FactoryMethod
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
                $obj = new Porsche();
                // we can specialize the way we want some concrete Vehicle since
                // we know the class
                $obj->addTuningAMG();

                return $obj;
                break;
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}
