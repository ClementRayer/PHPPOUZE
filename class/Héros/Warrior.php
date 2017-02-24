<?php

class Warrior extends Characters {
    public function __construct($stats, $value)
    {
        parent::__construct($stats){
        $this->name = $inputName;
        $this->atk = 50;
        $this->magic = 0;
        $this->def = 50;
        $this->life = 100;
        $this->stuff = $item;
    }
}