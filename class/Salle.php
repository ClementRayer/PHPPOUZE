<?php

require_once 'Character.php';
require_once 'Game.php';
require_once "Coffre.php";
require_once "Ennemy.php";
require_once "Ennemis/Dragon.php";
require_once "Ennemis/BlackWizard.php";
require_once "Ennemis/Gobelin.php";

class Salle
{
    private $ennemy;
    private $coffre;
    private $event;
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
        $this->coffre = new Coffre();
        $rand = rand(1, 3);

        switch ($rand) {
            case 1:
                $this->ennemy = new Dragon($number);
                break;
            case 2:
                $this->ennemy = new BlackWizard($number);
                break;
            case 3:
                $this->ennemy = new Gobelin($number);
                break;
        }

        $rand2 = rand(1, 3);
        switch ($rand2) {
            case 1:
                $this->event = "La voie est libre.";
                break;
            case 2:
                $this->event = "Un " . $this->getEnnemy()->getName() . " est apparu.";
                break;
            case 3:
                $this->event = "Un coffre se trouve au milieu de la salle.";
                break;
        }
    }

    public function getEnnemy()
    {
        return $this->ennemy;
    }

    /*public function getEvent()
    {
        return $this->event;
    }*/

    public function setEvent($new)
    {
        $this->event = $new;
    }

    public function getCoffre()
    {
        return $this->coffre;
    }

}