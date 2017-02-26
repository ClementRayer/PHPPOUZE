<?php

class Gobelin extends Character
{
    public function __construct($niveau)
    {
        parent::__construct("Gobelin", 10, 0, 10, 100, "./img/ennemy-gobelin.png");
    }
}