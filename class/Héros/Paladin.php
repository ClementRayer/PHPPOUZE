<?php

class Paladin extends Character{

    public function __construct($inputname)
    {
        parent::__construct($inputname, 40, 30, 30, 100, "./img/hero-paladin.png");
    }
}