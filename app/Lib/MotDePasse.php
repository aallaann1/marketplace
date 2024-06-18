<?php

namespace App\Lib;

class MotDePasse
{
    private static $poivre;

    public static function init()
    {
        if (!defined('PEPPER')) {
            throw new \Exception("PEPPER is not defined in the configuration.");
        }
        self::$poivre = PEPPER;
    }

    public static function hacher(string $mdpClair, string $sel): string
    {
        self::init(); // Initialize the poivre
        $mdpPoivre = hash_hmac("sha256", $mdpClair . $sel, self::$poivre);
        $mdpHache = password_hash($mdpPoivre, PASSWORD_DEFAULT);
        return $mdpHache;
    }

    public static function verifier(string $mdpClair, string $mdpHache, string $sel): bool
    {
        self::init(); // Initialize the poivre
        $mdpPoivre = hash_hmac("sha256", $mdpClair . $sel, self::$poivre);
        return password_verify($mdpPoivre, $mdpHache);
    }

    public static function genererChaineAleatoire(int $nbCaracteres = 22): string
    {
        // 22 caractères par défaut pour avoir au moins 128 bits aléatoires
        $octetsAleatoires = random_bytes(ceil($nbCaracteres * 6 / 8));
        return substr(base64_encode($octetsAleatoires), 0, $nbCaracteres);
    }
}