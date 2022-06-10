<?php
//
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//  Permet d'utiliser le typage fort. !! Laisser en première ligne !!
declare(strict_types=1);

//  Pour forcer les dumps pendant les tests
define('DUMP', true);

require_once '../config/appConfig.php';

use Entities\Etudiant;

 echo '<h1>Instanciation par défaut</h1>';
    $obj = new Etudiant();
    dump_var($obj, DUMP, 'Bilan par défaut:');
    
 $tab = array(
        
        'Num_Etu' => 2,
        'Nom_Etu' => 'ber',
        'Pre_Etu' => 'bury',
        'Dat_Nai_Etu' => '1999-02-25',
        'Tel_Etu' => '0645872154',
        'Mai_Etu' => 'mitou@gmail.com',
        'Log_Etu' => 'gus',
        'Mdp_Etu' => '',
        'Rem_Etu' => 'bien',
        'Dat_Pnt_Tel_Etu' =>2021-12-25,
        'Suj_Etu' => 'bien',
       
    );
 echo '<h1>Instanciation avec toutes les infos </h1>';
    $obj = new Entities\Etudiant($tab);
    dump_var($obj, DUMP, 'Bilan avec toutes les valeurs:');
    

