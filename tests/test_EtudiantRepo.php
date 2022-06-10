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
    $repo = new Repositories\EtudiantRepository($db);
     echo '<h1>Liste des Etudiants</h1>';
    $res = $repo->getAll();
    dump_var($res, DUMP, 'résultat:');
    
      echo '<h1>Etudiant numéro 2 </h1>';
    $res = $repo->getById(2);
    dump_var($res, DUMP, 'résultat:');
    
      echo '<h1>Ajout etudiant </h1>';
      $tab = array(
        
        'Num_Etu' => 2,
        'Nom_Etu' => 'paqueta',
        'Pre_Etu' => 'lucas',
          'Dat_Nai_Etu' => '1999-02-25',
        'Tel_Etu' => '0645891245',
        'Mai_Etu' => 'gggg@gmail.com',
        'Log_Etu' => 'root',
        'Mdp_Etu' => '',
        'Rem_Etu' => 'bien',
        'Dat_Pnt_Tel_Etu' => 2021-12-25,
        'Suj_Etu' => 'bien',
       
    );
     $pro = new Entities\Etudiant($tab);
    $res = $repo->insert($pro);
    dump_var($res, DUMP, 'résultat après insertion :');
    
    $res = $repo->update($pro);
    dump_var($res, DUMP, 'résultat:');
    
    
}