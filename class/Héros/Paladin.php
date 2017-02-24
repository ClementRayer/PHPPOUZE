<?php

class Paladin extends Characters
{
    public function __construct(array $stats)
    {
        parent::__construct($stats){
        $this->name = $inputName;
        $this->atk = 40;
        $this->magic = 30;
        $this->def = 30;
        $this->life = 100;
        $this->stuff = $item;
    }
}