<?php

class Character
{
    public $stats = array();

    public function __construct($inputname, $atk, $magic, $def, $life)
    {
        $this->$inputname;
        $this->$atk;
        $this->$magic;
        $this->$def;
        $this->$life;
    }
}