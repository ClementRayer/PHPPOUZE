<?php

class Paladin extends Characters
{
    public $paladinAtk->$atk;
    public $paladinMagic->$magic;

    public function attack($target)
    {
        $target->takeDamage($this->$atk);
    }
    public function castSpell($target)
    {
        $target->takeDamage($this->$magic);
    }
}

?>