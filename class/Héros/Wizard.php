<?php

class Wizard extends Characters {
    public function __construct($stats, $value)
    {
        parent::__construct($stats){
        $this->name = $inputName;
        $this->atk = 0;
        $this->magic = 70;
        $this->def = 30;
        $this->life = 100;
        $this->stuff = $item;
        }
    }
}