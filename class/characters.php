<?php

class Characters {
    public $atk;
    public $magic;
    public $def;
    public $life;
    public $stuff;
}

class Warrior extends Characters {
    public $warriorAtk->$atk;

    public function attack($target){
        $target->takeDamage($this->$atk);
    }
}

class Wizard extends Characters {
    public $paladinMagic->$magic;

    public function castSpell($target){
        $target->takeDamage($this->$magic);
    }
}

class Paladin extends Characters {
    public $paladinAtk->$atk;
    public $paladinMagic->$magic;
    
    public function attack($target){
        $target->takeDamage($this->$atk);
    }
    public function castSpell($target){
        $target->takeDamage($this->$magic);
    }
}