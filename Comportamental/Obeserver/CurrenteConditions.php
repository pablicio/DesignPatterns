<?php
namespace App\DesignPattners\Observer;
/**
 * Created by PhpStorm.
 * User: pablicio
 * Date: 08/04/2017
 * Time: 20:00
 */
class CurrenteConditions implements Observer, DisplayElements
{
    private $temperature;

    private $humidity;

    private $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;

        $weatherData->resgisterObserver($this);
    }

    public function update($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;

        $this->humidity = $humidity;

        self::display();
    }

    public function display()
    {
        echo "Condições atuais: " . $this->temperature . " Graus Farenheith " . $this->humidity . "% de Humidade";
    }

}