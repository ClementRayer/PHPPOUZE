<?php

class BlackWizard extends Characters
{
    public function __construct($stats, $value)
    {
        parent::__construct($stats){
        $this->name = "Magicien Noir";
        $this->atk = 25;
        $this->def = 25;
        $this->life = 80;
    }
    }