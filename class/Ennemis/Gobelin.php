<?php

class Gobelin extends Characters
{
    public function __set($stats, $value)
    {
        parent::__construct($stats){
        $this->name = "Gobelin Taquin";
        $this->atk = 17;
        $this->def = 13;
        $this->life = 30;
    }
    }