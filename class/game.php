<?php

require_once 'Character.php';
require_once 'Héros/Warrior.php';
require_once 'Héros/Wizard.php';
require_once 'Héros/Paladin.php';

class Game
{
    private $character;

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
}