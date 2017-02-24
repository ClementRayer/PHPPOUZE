<?php

class Gobelin extends Character
{
    public function __construct($stats, $value)
    {
        parent::__construct($stats){
        $this->name = "Gobelin Taquin";
        $this->atk = 17;
        $this->def = 13;
        $this->life = 30;
    }
    }