<?php

namespace App\Controller;

use App\Modele\Repository\VenteRepository;
use App\Modele\DataObject\Vente;

class ControleurVente extends ControleurGenerique
{
    public static function ajouterVente($id, $heureVente, $prixVente, $lieuVente, $acheteur, $suivisColisVente): void
    {
        $nouvelleVente = new Vente($id, $heureVente, $prixVente, $lieuVente, $acheteur, $suivisColisVente);

        (new VenteRepository())->sauvegarder($nouvelleVente);

        self::redirectionVersURL("?action=afficherListe&controleur=vente");
    }

    public static function supprimerVente($id): void
{

    (new VenteRepository())->supprimer($id);

    self::redirectionVersURL("?action=afficherListe&controleur=vente");
}

public static function modifierVente($id, $heureVente, $prixVente, $lieuVente, $acheteur, $suivisColisVente): void
{
    $venteModifiee = new Vente($id, $heureVente, $prixVente, $lieuVente, $acheteur, $suivisColisVente);

    (new VenteRepository())->modifier($venteModifiee);

    self::redirectionVersURL("?action=afficherListe&controleur=vente");
}

}
