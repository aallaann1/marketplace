<?php

namespace App\Modele\Repository;

use App\Modele\DataObject\Utilisateur;
use PDO;
use PDOException;

class UtilisateurRepository extends AbstractRepository
{

    protected function getNomTable(): string
    {
        return 'utilisateur';
    }


    /**
     * @param array $ligne
     * @return Utilisateur
     */
    protected function construireDepuisTableau(array $ligne): Utilisateur
    {
        return new Utilisateur(
            $ligne['nomMembre'],
            $ligne['prenomMembre'],
            $ligne['email'],
            $ligne['telephone'],
            $ligne['estAdmin'],
            $ligne['mdpHache'],
            $ligne['sel']
        );

    }

    protected function getNomsColonnes(): array
    {
        return ['nomMembre', 'prenomMembre', 'email', 'telephone', 'estAdmin', 'mdpHache', 'sel'];
    }

    protected function getNomClePrimaire(): string
    {
        return 'email';
    }



}