<?php

class Character
{
    private $inputname;
    private $atk;
    private $magic;
    private $def;
    private $life;
    private $img;

    public function __construct($inputname, $atk, $magic, $def, $life, $img)
    {
        $this->inputname = $inputname;
        $this->atk = $atk;
        $this->magic = $magic;
        $this->def = $def;
        $this->life = $life;
        $this->img = $img;
    }

    public function getInputName() {
        return $this->inputname;
    }

    public function getInputAtk() {
        return $this->atk;
    }

    public function getInputMag() {
        return $this->magic;
    }

    public function getInputDef() {
        return $this->def;
    }

    public function getInputLife() {
        return $this->life;
    }

    public function getInputImage() {
        return $this->img;
    }
}