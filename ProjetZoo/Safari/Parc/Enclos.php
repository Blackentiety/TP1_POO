<?php

namespace Safari\Parc;

class Enclos {
    private $animaux = [];
    private int $capaciteMax;
    private string $proprete;

    public function __construct($capaciterMax, $proprete) {
        $this->setCapaciteMax($capaciterMax);
        $this->setProprete($proprete);
    }

    public function getCapaciteMax() {
        return $this->capaciteMax;
    }

    public function getProprete() {
        return $this->proprete;
    }

    public function setCapaciteMax($capaciteMax) {
        $this->capaciteMax = $capaciteMax;
    }

    public function setProprete($etat) {
        if ($etat === "Propre" || $etat === "Sale") {
            $this->proprete = $etat;
        } else {
            echo " Erreur : L'état '$etat' n'est pas valide. Mis à 'Sale' par défaut.<br>";
            $this->proprete = "Sale";
        }
    }

    public function getAnimaux() {
        return $this->animaux;
    }

    public function ajouterAnimaux($nouvelleAnimal) {
        $nbAnimaux = count($this->getAnimaux());
        if($this->getCapaciteMax() == $nbAnimaux) {
            return "Erreur : Enclos plein !";
        } else {
            $this->animaux[] = $nouvelleAnimal;
            return "Bienvenue à".$nouvelleAnimal->getNom();
        }
    }

    public function entretenir(){
        $this->setProprete("Propre");
        return "Nettoyage en cours...";
    }

    public function visiteGuidee(){
        $message = "Voici les animaux de l'enclos : <br>"
        foreach($this->animaux as $animal){
            $message .=$animal->crier()."<br>";
        }
        return $message;
    }
}