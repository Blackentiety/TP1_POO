<?php

namespace Safari\Animal;

class Perroquet extends Animal{
    public function crier(){
        return "Coco veut un gâteau ! (".$this->getNom()." siffle)";
    }

    public function voler(){
        return "le perroquet s'envole";
    }
}