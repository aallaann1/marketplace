<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../app/Lib/Psr4AutoloaderClass.php';

// Initialisation de l'autoloader
$loader = new \App\Lib\Psr4AutoloaderClass();
$loader->register();

// Ajout des namespaces nécessaires
$loader->addNamespace('App\Controllers', __DIR__ . '/../app/Controllers');

// Définition du contrôleur par défaut
$controleurParDefaut = 'Dashboard';

// Détermination du contrôleur et de l'action à utiliser
$controleur = isset($_GET['controleur']) ? ucfirst($_GET['controleur']) : $controleurParDefaut;
$action = $_GET['action'] ?? 'index';

$controleurAffichage = 'App\Controllers\Controleur' . $controleur;

// Vérification de l'existence de la classe du contrôleur
if (class_exists($controleurAffichage)) {
    $controllerInstance = new $controleurAffichage();

    // Vérification de l'existence de la méthode/action dans le contrôleur
    if (method_exists($controllerInstance, $action)) {
        $controllerInstance->$action();
    } else {
        echo "Action non valide : $action";
    }
} else {
    echo "Contrôleur non implémenté : $controleurAffichage";
}
