<?php

require_once __DIR__ . '/../app/Lib/Psr4AutoloaderClass.php';

// Initialisation de l'autoloader
$loader = new App\Lib\Psr4AutoloaderClass();
$loader->register();

// Correction du namespace et du chemin d'ajout
$loader->addNamespace('App', __DIR__ . '/../app');

// Définition du contrôleur par défaut
$controleurParDefaut = 'Dashboard';

// Détermination du contrôleur à utiliser
$controleurAffichage = 'App\Controller\Controleur' . ucfirst($controleurParDefaut);

// Vérification de l'existence de la classe du contrôleur
if (class_exists($controleurAffichage)) {

    // Si une action est spécifiée, on tente de l'exécuter
    if (isset($_GET['action'])) {
        if (isset($_GET['controleur'])) {
            $controleurAffichage = 'App\Controller\Controleur' . ucfirst($_GET['controleur']);
        }
        $action = $_GET['action'];
        $methodes = get_class_methods($controleurAffichage);

        // Exécution de l'action si elle existe
        if (in_array($action, $methodes)) {
            $controleur = new $controleurAffichage();
            $controleur->$action();
        } else {
            echo "Action non valide : $action";
        }
    } else {
        // Par défaut, on appelle la méthode index du contrôleur
        $controleur = new $controleurAffichage();
        $controleur->index();
    }
} else {
    echo "Contrôleur $controleurParDefaut non implémenté";
}
