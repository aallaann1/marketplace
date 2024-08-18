<?php

namespace App\Controllers;

class ControleurInventaire extends ControleurGenerique
{
    public function index()
    {
        $pagetitle = 'Inventaire';
        $cheminVueBody = '/inventaire/inventaire.php';
        include __DIR__ . '/../Views/layout/base.php';
    }

}