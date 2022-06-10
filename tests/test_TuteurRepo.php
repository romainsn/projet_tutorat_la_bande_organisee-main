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
    $repo = new Repositories\TuteurRepository($db);
    echo '<h1>Liste des Tuteurs</h1>';
    $res = $repo->getAll();
    dump_var($res, DUMP, 'résultat:');

    echo '<h1>Tuteur numéro 1 </h1>';
    $res = $repo->getById(2);
    dump_var($res, DUMP, 'résultat:');

    
    
    
    echo '<h1>Ajout Tuteur </h1>';
    $tab = array(
        
        'Num_Tut' => 2,
        'Nom_Tut' => 'rudolf',
        'Pre_Tut' => 'strvaaussi',
        'Tel_Tut' => '0656565656',
        'Mai_Tut' => 'tuteur@gmail.com',
        'Log_Tut' => 'root',
        'Mdp_Tut' => 'mdp',
        'Cpt_Val' => 'bien',
        'Nb_Etu_Max_3OLE' => 20,
        'Nb_Etu_Max_4OLE' => 20,
        'Nb_Etu_Max_5OLE' => 20,
       
    );
    $act = new Entities\Tuteur($tab);
    dump_var($act);
    $res = $repo->insert($act);
    dump_var($res, DUMP, 'résultat après insertion :');


    echo '<h1>Modif Tuteur </h1>';
    $act->setPre_Tut('vickstol');
    dump_var($res, DUMP, 'résultat:');
    $res = $repo->update($act);
    dump_var($res, DUMP, 'résultat:');
}




