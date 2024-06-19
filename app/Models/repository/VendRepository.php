<?php

namespace App\Modele\Repository;

use App\Modele\DataObject\Vend;

class VendRepository extends AbstractRepository
{
    protected function getNomTable(): string
    {
        return 'vend';
    }

    protected function construireDepuisTableau(array $ligne): Vend
    {
        return new Vend(
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
