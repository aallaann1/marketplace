<?php

namespace App\Controllers;

use App\Modele\Repository\VenteRepository;
use App\Modele\DataObject\Vente;

class ControleurVente extends ControleurGenerique
{
    public function index()
    {
        $pagetitle = 'Ventes';
        $cheminVueBody = '/vente/vente.php';
        include __DIR__ . '/../Views/layout/base.php';
    }

}
