<?php
namespace App\DesignPattners\Observer;
/**
 * Created by PhpStorm.
 * User: pablicio
 * Date: 08/04/2017
 * Time: 19:58
 */
interface Observer
{
    public function update($temp, $humidity, $pressure);
}