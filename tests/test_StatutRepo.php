<?php

//  Permet d'utiliser le typage fort. !! Laisser en première ligne !!
declare(strict_types=1);

//  Pour forcer les dumps pendant les tests
define('DUMP', true);

//  Pour avoir la configuration et les informations de connexion dans $infoBdd
require_once '../config/appConfig.php';
//  Pour utiliser les fonctions
require_once '../src/FonctionsUtiles.php';

$db = connectBdd($infoBdd);
dump_var($db, DUMP, 'Objet PDO:');

if (!is_null($db)) {
    $repo = new Repositories\StatutRepository($db);
     echo '<h1>Liste des Statut</h1>';
    $res = $repo->getAll();
    dump_var($res, DUMP, 'résultat:');
    
      echo '<h1>Statut numéro 2 </h1>';
    $res = $repo->getById(2);
    dump_var($res, DUMP, 'résultat:');
    
      echo '<h1>Ajout Statut </h1>';
      $tab = array (
     'Id_Sta'=>"3",
     'Lib_Sta'=>"Stagiaire"
    );
     $pro = new Entities\Statut($tab);
    $res = $repo->insert($pro);
    dump_var($res, DUMP, 'résultat après insertion :');
    
    $res = $repo->update($pro);
    dump_var($res, DUMP, 'résultat:');
    
    
}