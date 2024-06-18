<?php

namespace App\Modele\DataObject;

use App\Lib\MotDePasse;

class Utilisateur extends AbstractDataObject
{
    private string $nomMembre;
    private string $prenomMembre;
    private string $email;
    private int $telephone;
    private bool $estAdmin;
    private string $mdpHache;
    private string $sel;

    public function __construct(string $nomMembre, string $prenomMembre, string $mdpHache, bool $estAdmin, string $email, int $telephone, string $sel)
    {
        $this->nomMembre = $nomMembre;
        $this->prenomMembre = $prenomMembre;
        $this->mdpHache = $mdpHache;
        $this->estAdmin = $estAdmin;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->sel = $sel;
    }

    public static function construireDepuisTableau(array $utilisateurTableau): Utilisateur {
        return new Utilisateur(
            $utilisateurTableau['nomMembre'],
            $utilisateurTableau['prenomMembre'],
            $utilisateurTableau['mdpHache'],
            $utilisateurTableau['estAdmin'],
            $utilisateurTableau['email'],
            $utilisateurTableau['telephone'],
            $utilisateurTableau['sel']
        );
    }

    public static function construireDepuisFormulaire(array $donneesFormulaire): Utilisateur
    {
        $sel = MotDePasse::genererChaineAleatoire();
        $mdp = MotDePasse::hacher($donneesFormulaire['mdp'], $sel);

        return new Utilisateur(
            $donneesFormulaire['nomMembre'],
            $donneesFormulaire['prenomMembre'],
            $mdp,
            false,
            $donneesFormulaire['email'],
            $donneesFormulaire['telephone'],
            $sel
        );
    }

    public function getNom(): string
    {
        return $this->nomMembre;
    }

    public function setNom(string $nomMembre): void
    {
        $this->nomMembre = $nomMembre;
    }

    public function getPrenom(): string
    {
        return $this->prenomMembre;
    }

    public function setPrenom(string $prenomMembre): void
    {
        $this->prenomMembre = $prenomMembre;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getTelephone(): int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): void
    {
        $this->telephone = $telephone;
    }

    public function getEstAdmin(): bool
    {
        return $this->estAdmin;
    }

    public function setEstAdmin(bool $estAdmin): void
    {
        $this->estAdmin = $estAdmin;
    }

    public function __toString(): string {
        return "<p> Utilisateur {$this->prenomMembre} {$this->nomMembre} </p>";
    }

    /**
     * @return Utilisateur[]
     */
    public static function getUtilisateurs(): array {
        $pdoStatement = Model::getPdo()->query("SELECT * FROM Membres");

        $utilisateurs = [];
        foreach($pdoStatement as $utilisateurFormatTableau) {
            $utilisateurs[] = Utilisateur::construireDepuisTableau($utilisateurFormatTableau);
        }

        return $utilisateurs;
    }

    public function getMdpHache(): string
    {
        return $this->mdpHache;
    }

    public function setMdpHache(string $mdpHache): void
    {
        $this->mdpHache = $mdpHache;
    }

    public function getSel(): string
    {
        return $this->sel;
    }

    public function formatTableau(): array
    {
        return [
            'nomMembre' => $this->nomMembre,
            'prenomMembre' => $this->prenomMembre,
            'mdpHache' => $this->mdpHache,
            'estAdmin' => $this->estAdmin ? 1 : 0,
            'email' => $this->email,
            'telephone' => $this->telephone,
            'sel' => $this->sel
        ];
    }
}
