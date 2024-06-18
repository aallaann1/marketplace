<?php

namespace App\Controller;

use App\Lib\MessageFlash;
use App\Lib\VerificationEmail;
use App\Lib\ConnexionUtilisateur;
use App\Lib\MotDePasse;
use App\Modele\DataObject\Utilisateur;
use App\Modele\Repository\UtilisateurRepository;

class ControleurDashboard extends ControleurGenerique
{

    public static function afficherDashboard(): void
    {
        $utilisateur = ConnexionUtilisateur::getUtilisateurConnecte();
        if ($utilisateur === null) {
            ControleurGenerique::redirectionVersURL('index.php');
        }
        ControleurGenerique::afficherVue('dashboard.php', ['pagetitle' => 'Dashboard', 'utilisateur' => $utilisateur]);
    }


}