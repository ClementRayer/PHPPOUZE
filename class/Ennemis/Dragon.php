<?php

class Dragon extends Characters
{
    public function __construct($stats, $value)
    {
        parent::__construct($stats){
        $this->name = "Dragon";
        $this->atk = 30;
        $this->def = 40;
        $this->life = 160;
    }
    }