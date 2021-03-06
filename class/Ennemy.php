<?php

class Ennemi
{
    private $name;
    private $number;
    private $life;
    private $def;
    private $atk;
    private $img;

    public function __construct($name, $life, $magie, $def, $atk, $img)
    {
        $this->name = $name;
        $this->magie = $magie;
        $this->life = 7 + (12 * $number);
        $this->def = $def + (7 * $this->number);
        $this->atk = $atk + (7 * $this->number);
        $this->img = $img;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLife()
    {
        return $this->life;
    }

    public function getAtk()
    {
        return $this->atk;
    }

    public function getDef()
    {
        return $this->def;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function lessLife($life)
    {
        $this->life -= $life;
    }
}
