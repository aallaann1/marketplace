<?php

namespace App\Controllers;

class ControleurSuivis extends ControleurGenerique
{

    public function index()
    {
        $pagetitle = 'Mes suivis';
        $cheminVueBody = '/suivis/suivis.php';
        include __DIR__ . '/../Views/layout/base.php';
    }

}