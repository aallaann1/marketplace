<?php

namespace App\Controllers;

class ControleurAide extends ControleurGenerique
{

    public function index()
    {
        $pagetitle = 'Aide';
        $cheminVueBody = '/aide/aide.php';
        include __DIR__ . '/../Views/layout/base.php';
    }

}