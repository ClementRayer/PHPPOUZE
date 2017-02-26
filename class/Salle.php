<?php

require_once 'Character.php';
require_once 'Game.php';
require_once "Coffre.php";
require_once "Ennemis/Dragon.php";
require_once "Ennemis/BlackWizard.php";
require_once "Ennemis/Gobelin.php";

class Salle
{
    private $monstre;
    private $coffre;
    private $event;

    public function __construct($number)
    {
        $this->number = $number;
        $this->coffre = new Coffre();
        $rand = rand(1, 3);
        switch ($rand) {
            case 1:
                $this->monstre = new Dragon();
                break;
            case 2:
                $this->monstre = new BlackWizard();

                break;
            case 3:
                $this->monstre = new Gobelin();

                break;
        }

        $rand2 = rand(1, 4);
        switch ($rand2) {
            case 1:
                $this->evenement = "La voie est libre.";
                break;
            case 2:
                $this->evenement = "Un monstre " . $this->getMonstre()->getName() . " est apparu.";
                break;
            case 3:
                $this->evenement = "Il y a un coffre devant vous.";
                break;
            case 4:
                $this->evenement = "Il y a une porte devant vous.";
                break;
        }
    }

    public function getMonstre()
    {
        return $this->monstre;
    }

    public function getEvent()
    {
        return $this->event;
    }

    public function setEvent($new)
    {
        $this->event = $new;
    }

    public function getCoffre(){
        return $this->coffre;
    }
}