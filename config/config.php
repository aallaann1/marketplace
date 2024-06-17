<?php

// Informations de connexion à la base de données
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'myapp');

// Autres configurations globales
define('APPROOT', dirname(dirname(__FILE__)));
define('URLROOT', 'http://localhost/myapp');
define('SITENAME', 'My App');

// Clé secrète pour le poivre (doit être stockée de manière sécurisée)
define('PEPPER', 'some_secure_random_string');

?>