<?php

namespace App\Controller;

use App\Lib\ConnexionUtilisateur;

class ControleurDashboard extends ControleurGenerique
{
    public function index(): void
    {
        // Vérifie si l'utilisateur est connecté
        $utilisateur = ConnexionUtilisateur::getUtilisateurConnecte();
        if ($utilisateur === null) {
            $this->redirectionVersURL('index.php');
        }

        // Affiche la vue du tableau de bord avec les données nécessaires
        $this->afficherVue('dashboard/dashboard', [
            'pagetitle' => 'Dashboard',
            'utilisateur' => $utilisateur
        ]);
    }

    // Méthode de formatage des données pour ChartJS
    private function formaterDonneesPourChartJS(array $ventes): array
    {
        $labels = [];
        $data = [];

        foreach ($ventes as $vente) {
            $labels[] = $vente['dateVente'];
            $data[] = $vente['montant'];
        }

        return ['labels' => $labels, 'data' => $data];
    }
}
