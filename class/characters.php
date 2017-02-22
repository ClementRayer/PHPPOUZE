<?php

class Characters
{
    public $name;
    public $atk;
    public $magic;
    public $def;
    public $life;
    public $stuff;

    public function __construct(array $stats)
    {
        new $this->$name;
        new $this->$atk;
        new $this->$magic;
        new $this->$def;
        new $this->$life;
        new $this->$stuff;
    }
}