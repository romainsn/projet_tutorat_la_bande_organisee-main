<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Exercice 1 Question 2 : Faire la fonction pour ce connecter à la BDD 
 */
function connectBdd(array $infoBdd): ?\PDO {
    $db = null;

    //6.3 Récupération des informations de votre table infoBdd
   $myport = ($infoBdd['port']);
   $mycharset = ($infoBdd['charset']);
   $hostname = ($infoBdd['host']);
   $mydbname = ($infoBdd['dbname']);
   $myusername = ($infoBdd['user']);
   $mypassword = ($infoBdd['pass']);
    //  Composition du DSN
    $dsn ="mysql:dbname=$mydbname;host=$hostname;port=$myport;charset=$mycharset";
    //  Instanciation de PDO (le \ pour l'espace de nom racine... peut être utile par la suite)
   $db = new \PDO($dsn, $myusername, $mypassword);
    // renvoi de votre object PDO
    return $db;
   
}
function dateSet (){
    date_default_timezone_set('Europe/Paris');
    echo date('d/m/Y H:i:s' );

}


