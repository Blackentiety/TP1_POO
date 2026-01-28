<?php
// Chargement des classes
spl_autoload_register(function ($class) {
    $file = str_replace('\\', "/", $class) . '.php';
    if (file_exists($file)) require $file;
});
use Safari\Animaux\Animal;
use Safari\Animaux\Lion;
use Safari\Animaux\Perroquet;
use Safari\Parc\Enclos;

$enclos = new Enclos(3,"");
$lion = new Lion("Simba", 150);
$perroquet1 = new Perroquet("Rio", 2);
$perroquet2 = new Perroquet("Jago", 3);
$perroquet3 = new Perroquet("Murcia", 4);

