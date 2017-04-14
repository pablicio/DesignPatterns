<?php
/**
 * Created by PhpStorm.
 * User: pablicio
 * Date: 14/04/2017
 * Time: 11:26
 */

namespace App\PadroesDeProjeto\SimpleFactory;


class TestaSimpleFactory
{
    public static function main()
    {
        $fabrica = new FabricaConcreta();

        $bicicleta = $fabrica->createVeiculos("bicicleta");

        $bicicleta->driveTo("ceara<br>");

        $carro = $fabrica->createVeiculos("carro");

        $carro->driveTo("Paraiba");
    }
}