<?php

class Coffre {
    private $character;
    private $contenu;

    public function __construct()
    {
        $this->genererContenu();
    }

    public function genererContenu(){

        $this->contenu = rand(1,4);
        switch ($this->contenu) {
            case 1:
                $this->character->addLife(10);
                break;
            case 2:
                $this->character->addLife(25);
                break;
            case 3:
                $this->character->addAtk(10);
                break;
            case 4:
                $this->character->addMagie();
                break;
        }

        return $this->contenu;
    }
}