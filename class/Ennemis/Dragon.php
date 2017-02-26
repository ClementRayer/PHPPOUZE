<?php

class Dragon extends Character
{
    public function __construct($niveau)
    {
        parent::__construct("Dragon", 30, 0, 40, 100, "./img/ennemy-dragon.png");
    }
}