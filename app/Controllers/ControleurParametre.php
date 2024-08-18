<?php

namespace App\Controllers;

class ControleurParametre extends ControleurGenerique
{

    public function index()
    {
        $pagetitle = 'Paramètres';
        $cheminVueBody = '/parametre/parametre.php';
        include __DIR__ . '/../Views/layout/base.php';
    }

}