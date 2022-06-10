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

use Entities\Tuteur;

 echo '<h1>Instanciation par défaut</h1>';
    $obj = new Entities\Tuteur();
    dump_var($obj, DUMP, 'tuteur par défaut:');
    
 $tab = array(
        
        'Num_Tut' => 2,
        'Nom_Tut' => 'ber',
        'Pre_Tut' => 'timo',
        'Tel_Tut' => '0645872154',
        'Mai_Tut' => 'mitou@gmail.com',
        'Log_Tut' => 'gus',
        'Mdp_Tut' => '',
        'Cpt_Val' => 'bien',
        'Nb_Etu_Max_3OLE' =>15,
        'Nb_Etu_Max_4OLE' =>15,
        'Nb_Etu_Max_5OLE' =>15,
       
    );
 echo '<h1>Instanciation avec toutes les infos </h1>';
    $obj = new Entities\Tuteur($tab);
    dump_var($obj, DUMP, 'Bilan avec toutes les valeurs:');
    

