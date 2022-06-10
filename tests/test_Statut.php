<?php

//  Permet d'utiliser le typage fort. !! Laisser en première ligne !!
declare(strict_types=1);

//  Pour forcer les dumps pendant les tests
define('DUMP', true);

require_once '../config/appConfig.php';

use Entities\Statut;

 echo '<h1>Instanciation par défaut</h1>';
    $obj = new Statut();
    dump_var($obj, DUMP, 'Statut par défaut:');
    
 $tab = array (
     'Id_Sta'=>1,
     'Lib_Sta'=>"Alternant",
 );
 echo '<h1>Instanciation avec toutes les infos </h1>';
    $obj = new Statut($tab);
    dump_var($obj, DUMP, 'Statut avec toutes les valeurs:');
    
 echo '<h1>Modification du numéro </h1>';
    $obj->setid_Sta(2);
    dump_var($obj, DUMP, 'Statut modifier:');

