<?php

class Warrior extends Character{

    public function __construct($inputname)
    {
        parent::__construct($inputname, 50, 0, 50, 100);
    }
}