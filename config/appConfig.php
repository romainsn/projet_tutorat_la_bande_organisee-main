<?php
//  Basculer à TRUE pour activer les affichages de debug, les var_dump ou les dump_var
if(!defined('DUMP')) {
    define('DUMP', false);
}

//  L'url de votre site, sera utile dans les pages en cas de déplacement du site...
define('URL_BASE', "http://localhost/P2022_2SIO_Projet_Tutorat");


//  Vos informations de connexion à la BDD
$infoBdd = array(
		'interface' => 'pdo',	    // "pdo" ou "mysqli"
		'type'   => 'mysql',	    //  mysql ou pgsql
		'host'   => 'localhost',
		'port'   =>  3306,	    // Par défaut: 5432 pour postgreSQL, 3306 pour MySQL
		'charset' => 'UTF8',
    		'dbname' => 'projet_tutorat_bo',
		'user'   => 'root',
		'pass'   => '',
	);


require_once 'globalConfig.php';
// function pour gérer les dump_var
if(!function_exists('dump_var'))
{
    function dump_var($var, $dump=DUMP, $msg=null)
    {
	if($dump) {
	    if($msg)
		echo"<p><strong>$msg</strong></p>";
	    echo '<pre>';
	    var_dump($var);
	    echo '</pre>';
	}
    }
}