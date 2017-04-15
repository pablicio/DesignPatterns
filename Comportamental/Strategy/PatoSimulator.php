<?php
namespace App\DesignPattners\Strategy;
/**
 * Created by PhpStorm.
 * User: pablicio
 * Date: 08/04/2017
 * Time: 16:53
 */

class PatoSimulator
{
    protected static function comportamentos(){

       return $comportamentos = [
                                    [
                                        'voar' => new FlyWithWings(),
                                        'grasnar' => new MuteQuack(),
                                    ],
                                    [
                                        'voar' => new FlyNoWay(),
                                        'grasnar' => new Quack(),
                                    ],
                                ];
    }


    public static function simulaPatos($pato){

        $pato->display();

        echo '<br><br>';

        $pato->swin();

        echo '<br><br>';

        foreach(self::comportamentos() as $key => $comportamento)
        {
            $pato->setFlyInterface($comportamento['voar']);

            $pato->setQuackInterface($comportamento['grasnar']);

            $pato->performfly();

            echo '<br><br>';

            $pato->performquack();

            echo '<br><br>';
        }

        exit();

    }
}