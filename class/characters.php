<?php

class Characters extends Game{
    public $name;
    public $atk;
    public $magic;
    public $def;
    public $life;
    public $stuff;

    public function __construct(array $stats) {
        new $this->$name;
        new $this->$atk;
        new $this->$magic;
        new $this->$def;
        new $this->$life;
        new $this->$stuff;
    }
}

class Warrior extends Characters {
    public function __set($stats, $value)
    {
        parent::__construct($inputName, '90', '0', '80', '100', $item);
    }
}

class Wizard extends Characters {
    public function __set($stats, $value)
    {
        parent::__construct($inputName, '0', '90', '30', '80', $item);
        $this->Characters = array($inputName, '0', '90', '30', '80', $item);
    }

}

class Paladin extends Characters {
    public function __set($stats, $value)
    {
        parent::__construct($inputName, '70', '50', '60', '100', $item);
    }

    }
}