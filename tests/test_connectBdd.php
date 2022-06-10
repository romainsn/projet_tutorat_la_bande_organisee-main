<?php

//  Permet d'utiliser le typage fort. !! Laisser en première ligne !!
declare(strict_types=1);

//  Pour forcer les dumps pendant les tests
define('DUMP', true);

//  Pour avoir la configuration et les informations de connexion dans $infoBdd
require_once '../config/appConfig.php';
//  Pour utiliser les fonctions
require_once '../src/FonctionsUtiles.php';

//  Etablissement de la connexion à la Bdd en PDO
$db = connectBdd($infoBdd);
dump_var($db, DUMP, 'Objet PDO:');

if (!is_null($db)) {
    //  Instanciation réussie
    $attributes = ["AUTOCOMMIT", "ERRMODE", "CASE", "CLIENT_VERSION",
	"CONNECTION_STATUS", "ORACLE_NULLS", "PERSISTENT",
	"SERVER_INFO", "SERVER_VERSION", "EMULATE_PREPARES",
    ];

    //  Affichage d'attributs de la connexion PDO
    foreach ($attributes as $val) {
	echo "PDO::ATTR_$val: ";
	echo $db->getAttribute(constant("PDO::ATTR_$val")) . '<br/>';
    }
}
else {
    echo '<h1>Erreur de création de la connexion $db</h1>';
}