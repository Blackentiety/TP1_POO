<?php
// Chargement des classes
spl_autoload_register(function ($class) {
    $file = str_replace('\\', "/", $class) . '.php';
    if (file_exists($file)) require $file;
});

use Safari\Animal\Animal;
use Safari\Animal\Lion;
use Safari\Animal\Perroquet;
use Safari\Parc\Enclos;