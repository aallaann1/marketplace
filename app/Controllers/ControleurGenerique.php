<?php

namespace App\Controller;

use App\Lib\MessageFlash;

class ControleurGenerique
{
    // Méthode pour afficher une vue
    public static function afficherVue(string $cheminVue, array $parametres = []): void
    {
        extract($parametres);
        $messagesFlash = MessageFlash::lireTousMessages();
        require __DIR__ . "/../Views/layout/base.php";
    }

    // Méthode pour afficher une erreur
    public static function afficherErreur(string $messageErreur): void
    {
        self::afficherVue('vueGenerale.php', [
            'pagetitle' => 'Erreur',
            'cheminVueBody' => 'erreur.php',
            'messageErreur' => $messageErreur
        ]);
    }

    // Méthode pour rediriger vers une autre URL
    public static function redirectionVersURL(string $url): void
    {
        header("Location: $url");
        exit();
    }

    // Méthode pour render une vue
    protected function render(string $view, array $data = []): void
    {
        extract($data);
        require __DIR__ . "/../Views/layout/base.php";
    }
}
