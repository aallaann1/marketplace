<?php

namespace App\Modele\Repository;

use App\Modele\DataObject\Possede;

class PossedeRepository extends AbstractRepository
{
    protected function getNomTable(): string
    {
        return 'possede';
    }

    protected function construireDepuisTableau(array $ligne): Possede
    {
        return new Possede(
            $ligne['idMembre'],
            $ligne['idProduit'],
            $ligne['quantite']
        );
    }

    protected function getNomsColonnes(): array
    {
        return ['idMembre', 'idProduit', 'quantite'];
    }

    protected function getNomClePrimaire(): string
    {
        return 'idMembre, idProduit'; // Assurez-vous que cette clé primaire composite est gérée correctement
    }
}
