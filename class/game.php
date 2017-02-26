<?php
require_once 'Character.php';
require_once 'Coffre.php';
require_once 'Salle.php';
require_once 'Héros/Warrior.php';
require_once 'Héros/Wizard.php';
require_once 'Héros/Paladin.php';
require_once 'Ennemis/Dragon.php';
require_once 'Ennemis/BlackWizard.php';
require_once 'Ennemis/Gobelin.php';

class Game
{
    private $character;
    private $number;
    private $salle;

    public function newCharacter($classe_joueur, $inputname){

        switch ($classe_joueur) {
            case 0:
                $this->character = new Warrior($inputname);
                break;
            case 1:
                $this->character = new Wizard($inputname);
                break;
            case 2:
                $this->character = new Paladin($inputname);
                break;
        }
    }

    public function getCharacter(){
        return $this->character;
    }

    public function initNumber(){
        $this->number = 1;
        $this->salle = new Salle($this->number);
    }

    public function nextNumber(){
        $this->number = $this->number + 1;
        $this->salle = new Salle($this->number);
    }

    public function getSalle(){
        return $this->salle;
    }

    public function getNumber(){
        return $this->number;
    }

    public function flee(){
        $this->number = $this->number - 1;
        $this->character->lessLife(10);
    }
}