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

use Entities\Referent;

echo '<h1>Instanciation par défaut</h1>';
$obj = new Referent();
dump_var($obj, DUMP, 'Ref par défaut:');

$tab = array(

    'Num_Ref' => 2,
    'Nom_Ref' => 'Richard',
    'Pre_Ref' => 'Louis',

);
echo '<h1>Instanciation avec toutes les infos </h1>';
$obj = new Entities\Referent($tab);
dump_var($obj, DUMP, 'Bilan avec toutes les valeurs:');


