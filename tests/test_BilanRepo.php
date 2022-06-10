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
    $repo = new Repositories\BilanRepository($db);
    echo '<h1>Liste des Bilans</h1>';
    $res = $repo->getAll();
    dump_var($res, DUMP, 'résultat:');

    echo '<h1>Bilan numéro 1 </h1>';
    $res = $repo->getById(2);
    dump_var($res, DUMP, 'résultat:');

    
    
    
    echo '<h1>Ajout Bilan </h1>';
    $tab = array(
        
        'Id_Bil' => 2,
        'Dat_Bil' => 2021-15-25,
        'Not_Ent_Bil' => 20,
        'Not_Ora_Bil' => 20,
        'Not_Dos_Bil' => 20,
        'Not_Ora_Fin_Bil' => 20,
        'Not_Dos_Fin_Bil' => 20,
        'Rem_Bil' => 'bien',
       
    );
    $act = new Entities\Bilan($tab);
    dump_var($act);
    $res = $repo->insert($act);
    dump_var($res, DUMP, 'résultat après insertion :');


    echo '<h1>Modif Bilan </h1>';
    $act->setNot_Ent_Bil(18);
    dump_var($res, DUMP, 'résultat:');
    $res = $repo->update($act);
    dump_var($res, DUMP, 'résultat:');
}



