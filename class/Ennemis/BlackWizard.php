<?php

class BlackWizard extends Ennemi
{
    public function __construct($niveau)
    {
        parent::__construct("Magicien Noir", 25, 0, 25, 100, "./img/ennemy-blackwizard.png");
    }
}