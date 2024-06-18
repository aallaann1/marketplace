<?php

namespace App\Modele\DataObject;

class Produit extends AbstractDataObject
{
    private int $id;
    private string $nomArticle;
    private string $marque;
    private string $taille;
    private float $prixAchat;
    private float $prixVenteSouhaite;
    private string $dateAchat;
    private string $statut;
    private string $lieuAchat;
    private string $vendeur;
    private string $suivisColis;

    public function __construct(int $id, string $nomArticle, string $marque, string $taille, float $prixAchat, float $prixVenteSouhaite, string $dateAchat, string $statut, string $lieuAchat, string $vendeur, string $suivisColis)
    {
        $this->id = $id;
        $this->nomArticle = $nomArticle;
        $this->marque = $marque;
        $this->taille = $taille;
        $this->prixAchat = $prixAchat;
        $this->prixVenteSouhaite = $prixVenteSouhaite;
        $this->dateAchat = $dateAchat;
        $this->statut = $statut;
        $this->lieuAchat = $lieuAchat;
        $this->vendeur = $vendeur;
        $this->suivisColis = $suivisColis;
    }

    public static function construireDepuisTableau(array $produitTableau): Produit
    {
        return new Produit(
            $produitTableau['id'],
            $produitTableau['nomArticle'],
            $produitTableau['marque'],
            $produitTableau['taille'],
            $produitTableau['prixAchat'],
            $produitTableau['prixVenteSouhaite'],
            $produitTableau['dateAchat'],
            $produitTableau['statut'],
            $produitTableau['lieuAchat'],
            $produitTableau['vendeur'],
            $produitTableau['suivisColis']
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNomArticle(): string
    {
        return $this->nomArticle;
    }

    public function getMarque(): string
    {
        return $this->marque;
    }

    public function getTaille(): string
    {
        return $this->taille;
    }

    public function getPrixAchat(): float
    {
        return $this->prixAchat;
    }

    public function getPrixVenteSouhaite(): float
    {
        return $this->prixVenteSouhaite;
    }

    public function getDateAchat(): string
    {
        return $this->dateAchat;
    }

    public function getStatut(): string
    {
        return $this->statut;
    }

    public function getLieuAchat(): string
    {
        return $this->lieuAchat;
    }

    public function getVendeur(): string
    {
        return $this->vendeur;
    }

    public function getSuivisColis(): string
    {
        return $this->suivisColis;
    }

    public function setNomArticle(string $nomArticle): void
    {
        $this->nomArticle = $nomArticle;
    }

    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }

    public function setTaille(string $taille): void
    {
        $this->taille = $taille;
    }

    public function setPrixAchat(float $prixAchat): void
    {
        $this->prixAchat = $prixAchat;
    }

    public function setPrixVenteSouhaite(float $prixVenteSouhaite): void
    {
        $this->prixVenteSouhaite = $prixVenteSouhaite;
    }

    public function setDateAchat(string $dateAchat): void
    {
        $this->dateAchat = $dateAchat;
    }

    public function setStatut(string $statut): void
    {
        $this->statut = $statut;
    }

    public function setLieuAchat(string $lieuAchat): void
    {
        $this->lieuAchat = $lieuAchat;
    }

    public function setVendeur(string $vendeur): void
    {
        $this->vendeur = $vendeur;
    }

    public function setSuivisColis(string $suivisColis): void
    {
        $this->suivisColis = $suivisColis;
    }

    public function formatTableau(): array
    {
        return [
            'id' => $this->id,
            'nomArticle' => $this->nomArticle,
            'marque' => $this->marque,
            'taille' => $this->taille,
            'prixAchat' => $this->prixAchat,
            'prixVenteSouhaite' => $this->prixVenteSouhaite,
            'dateAchat' => $this->dateAchat,
            'statut' => $this->statut,
            'lieuAchat' => $this->lieuAchat,
            'vendeur' => $this->vendeur,
            'suivisColis' => $this->suivisColis
        ];
    }
}
