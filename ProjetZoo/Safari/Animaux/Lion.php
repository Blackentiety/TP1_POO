<?php
namespace Safari\Animal;

class Lion extends Animal {
    public int $niveauAgressivite;

    public function __construct($nom, $poids) {
        parent::__construct($nom, $poids);
        $this->niveauAgressivite = rand(1, 10);
    }

    public function crier(){
        return "ROAAAAR ! " . $this->getNom()." rugit férocement.";
    }

    public function chasser(){
        return "le lion part en chasse";
    }
}