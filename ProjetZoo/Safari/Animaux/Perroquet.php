<?php

namespace Safari\Animaux;

class Perroquet extends Animal{
    public function crier(){
        return "Coco veut un gâteau ! (".$this->getNom()." siffle)"."<br>";
    }

    public function voler(){
        return "le perroquet s'envole"."<br>";
    }
}