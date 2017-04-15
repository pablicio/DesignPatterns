<?php
namespace App\DesignPattners\Observer;
/**
 * Created by PhpStorm.
 * User: pablicio
 * Date: 08/04/2017
 * Time: 20:01
 */
class WeatherStation
{
    public static function simula(){

        $w = new WeatherData();

        new CurrenteConditions($w);

        $w->setMeasuraments(60, 30, 702);

        echo '<br>';

        $w->setMeasuraments(90, 50, 100);

        echo '<br>';

        $w->setMeasuraments(1000, 504, 10044);
    }

}