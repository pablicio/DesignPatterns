<?php
namespace App\DesignPattners\Observer;
/**
 * Created by PhpStorm.
 * User: pablicio
 * Date: 08/04/2017
 * Time: 19:51
 */
interface Subject
{
    public function resgisterObserver($observer);

    public function removeObserver($observer);

    public function notifyObservers();
}