<?php
namespace Safari\Animaux;
class Animal {
    protected string $nom;
    protected int $poids;
    protected bool $estMalade = false;

    public function __construct($nom, $poids){
        $this->nom = $nom;
        $this->poids = $poids;
    }

    public function getNom() {
        return $this->nom;
    }
    public function getPoids() {
        return $this->poids;
    }
    public function getEstMalade() {
        return $this->estMalade;
    }
    public function setEstMalade() {
        $this->estMalade = true;
    }

    public function manger(){
        return "L'animal mange"."<br>";
    }

    public function  seSoigner(){
        $this->estMalade = false;
    }

    public function crier(){
        return "GRR"."<br>";
    }
}