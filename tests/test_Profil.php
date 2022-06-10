<?php

//  Permet d'utiliser le typage fort. !! Laisser en première ligne !!
declare(strict_types=1);

//  Pour forcer les dumps pendant les tests
define('DUMP', true);

require_once '../config/appConfig.php';

use Entities\Profil;

 echo '<h1>Instanciation par défaut</h1>';
    $obj = new Profil();
    dump_var($obj, DUMP, 'Profil par défaut:');
    
 $tab = array (
     'id_Pro'=>1,
     'Lib_Pro'=>"Professeur",
 );
 echo '<h1>Instanciation avec toutes les infos </h1>';
    $obj = new Profil($tab);
    dump_var($obj, DUMP, 'Profil avec toutes les valeurs:');
    
 echo '<h1>Modification du numéro </h1>';
    $obj->setid_Pro(2);
    dump_var($obj, DUMP, 'Profil modifier:');

