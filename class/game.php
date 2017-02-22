<?php

class Game{

    private $isLaunched = false;

    public function newGame(){
        $this->isLaunched = true;
    }
}