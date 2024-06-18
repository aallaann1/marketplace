<?php

namespace App\Modele\DataObject;

class Possede
{
    private int $idMembre;
    private int $idProduit;
    private int $quantite;

    public function __construct(int $idMembre, int $idProduit, int $quantite)
    {
        $this->idMembre = $idMembre;
        $this->idProduit = $idProduit;
        $this->quantite = $quantite;
    }

    public static function construireDepuisTableau(array $possedeTableau): Possede
    {
        return new Possede(
            $possedeTableau['idMembre'],
            $possedeTableau['idProduit'],
            $possedeTableau['quantite']
        );
    }

    public function getIdMembre(): int
    {
        return $this->idMembre;
    }

    public function getIdProduit(): int
    {
        return $this->idProduit;
    }

    public function getQuantite(): int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): void
    {
        $this->quantite = $quantite;
    }
}
