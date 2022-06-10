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

use Entities\Entreprise;

 echo '<h1>Instanciation par défaut</h1>';
    $obj = new Entreprise();
    dump_var($obj, DUMP, 'Bilan par défaut:');
    
 $tab = array(
        
        'Id_Ent' => 2,
        'Lib_Ent' => 'usou',
        'Adr_Ent' => '20 rue privot',
        'Cp_Ent' => '22600',
        'Vil_Ent' => 'malitot',
        'Nom_Mai_App' => 'ludopa',
        'Pre_Mai_App' => 'lucas',
        'Tel_Mai_App' => '0651873157',
       
    );
 echo '<h1>Instanciation avec toutes les infos </h1>';
    $obj = new Entreprise($tab);
    dump_var($obj, DUMP, 'Bilan avec toutes les valeurs:');
    

