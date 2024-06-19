<?php

namespace App\Modele\Repository;

use App\Modele\DataObject\Produit;

class ProduitRepository extends AbstractRepository
{
    protected function getNomTable(): string
    {
        return 'Produits';
    }

    protected function construireDepuisTableau(array $ligne): Produit
    {
        return new Produit(
            $ligne['id'],
            $ligne['nomArticle'],
            $ligne['marque'],
            $ligne['taille'],
            $ligne['prixAchat'],
            $ligne['prixVenteSouhaite'],
            $ligne['dateAchat'],
            $ligne['statut'],
            $ligne['lieuAchat'],
            $ligne['vendeur'],
            $ligne['suivisColis']
        );
    }

    protected function getNomsColonnes(): array
    {
        return ['id', 'nomArticle', 'marque', 'taille', 'prixAchat', 'prixVenteSouhaite', 'dateAchat', 'statut', 'lieuAchat', 'vendeur', 'suivisColis'];
    }

    protected function getNomClePrimaire(): string
    {
        return 'id';
    }
}
