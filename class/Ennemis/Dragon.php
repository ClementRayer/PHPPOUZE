<?php

class Dragon extends Ennemi
{
    public function __construct($niveau)
    {
        parent::__construct("Dragon", 30, 0, 40, 100, "./img/ennemy-dragon.png");
    }
}