<?php

namespace App\Configuration;

// Informations de connexion à la base de données
define('DB_HOST_LOCAL', 'localhost');
define('DB_HOST_IUT', 'webinfo');
define('DB_NAME_LOCAL', 'myapp');
define('DB_NAME_IUT', 'terriera');
define('DB_PORT_LOCAL', '3306');
define('DB_PORT_IUT', '3316');
define('DB_USER_LOCAL', 'root');
define('DB_USER_IUT', 'terriera');
define('DB_PASS_LOCAL', '');
define('DB_PASS_IUT', 'apagnan');

// Autres configurations globales
define('APPROOT', dirname(dirname(__FILE__)));
define('URLROOT', 'http://localhost/myapp');
define('SITENAME', 'My App');
define('dureeExpiration', '3600');

// Clé secrète pour le poivre
define('PEPPER', 'some_secure_random_string');


?>