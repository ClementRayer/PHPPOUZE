<?php

class Gobelin extends Ennemi
{
    public function __construct($niveau)
    {
        parent::__construct("Gobelin", 10, 0, 10, 100, "./img/ennemy-gobelin.png");
    }
}