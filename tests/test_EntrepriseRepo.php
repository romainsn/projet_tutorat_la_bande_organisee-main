<?php
//
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
    $repo = new Repositories\EntrepriseRepository($db);
     echo '<h1>Liste des Entreprise</h1>';
    $res = $repo->getAll();
    dump_var($res, DUMP, 'résultat:');
    
      echo '<h1>Entreprise numéro 2 </h1>';
    $res = $repo->getById(2);
    dump_var($res, DUMP, 'résultat:');
    
      echo '<h1>Ajout entreprise </h1>';
      $tab = array(
        
        'Id_Ent' => 2,
        'Lib_Ent' => 'ikea',
        'Adr_Ent' => '20 rue de la prouvette',
        'Cp_Ent' => '69008',
        'Vil_Ent' => 'lyon',
        'Nom_Mai_App' => 'gusiton',
        'Pre_Mai_App' => 'robert',
        'Tel_Mai_App' => '0669696969',
       
    );
     $pro = new Entities\Entreprise($tab);
    $res = $repo->insert($pro);
    dump_var($res, DUMP, 'résultat après insertion :');
    
    $res = $repo->update($pro);
    dump_var($res, DUMP, 'résultat:');
    
    
}