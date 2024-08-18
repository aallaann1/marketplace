<?php

namespace App\Controllers;

class ControleurProduits extends ControleurGenerique
{

    public function index()
    {
        $pagetitle = 'Produits';
        $cheminVueBody = '/produits/produits.php';
        include __DIR__ . '/../Views/layout/base.php';
    }


}