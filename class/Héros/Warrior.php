<?php

class Warrior extends Characters
{
    public $warriorAtk->$atk;

    public function attack($target)
    {
        $target->takeDamage($this->$atk);
    }
}

?>