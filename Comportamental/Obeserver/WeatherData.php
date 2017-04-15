<?php
namespace App\DesignPattners\Observer;
/**
 * Created by PhpStorm.
 * User: pablicio
 * Date: 08/04/2017
 * Time: 20:00
 */

class WeatherData implements Subject
{
    private $observers;

    private $temperature;

    private $humidity;

    private $pressure;

    public function __construct()
    {
        $this->observers = [];
    }

    public function resgisterObserver($observer)
    {
        array_push($this->observers, $observer);
    }

    public function removeObserver($observers)
    {
        $keys = array_keys($observers);

        if (count($keys) >= 0)
        {
            array_pop($this->observers);

        }
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measuramentsChanged()
    {
        self::notifyObservers();
    }

    public function setMeasuraments($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;

        $this->humidity = $humidity;

        $this->pressure = $pressure;

        self::measuramentsChanged();
    }
}