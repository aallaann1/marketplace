<?php

namespace App\Controllers;

class ControleurGenerique
{
    public static function afficherVue(string $cheminVue, array $parametres = []): void
    {
        // Définir le chemin de la vue à inclure
        $cheminVueBody = $cheminVue . '.php';

        // Extraire les autres paramètres pour utilisation dans la vue
        extract($parametres);

        // Inclure la vue générale
        require __DIR__ . "/../Views/layout/base.php";
    }

    public static function afficherErreur(string $messageErreur): void
    {
        self::afficherVue('erreur.php', [
            'pagetitle' => 'Erreur',
            'messageErreur' => $messageErreur,
            'cheminVueBody' => 'erreur.php'
        ]);
    }

    public static function redirectionVersURL(string $url): void
    {
        header("Location: $url");
        exit();
    }

    protected function render(string $view, array $data = []): void
    {
        // Définir le chemin de la vue à inclure
        $cheminVueBody = $view . '.php';

        // Extraire les autres paramètres pour utilisation dans la vue
        extract($data);

        // Inclure la vue générale
        require __DIR__ . "/../Views/layout/base.php";
    }
}
