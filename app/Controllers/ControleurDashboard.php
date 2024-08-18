<?php

namespace App\Controllers;

class ControleurDashboard extends ControleurGenerique
{
    public function index()
    {
        $pagetitle = 'Dashboard';
        $cheminVueBody = '/dashboard/dashboard.php';
        include __DIR__ . '/../Views/layout/base.php';
    }

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
