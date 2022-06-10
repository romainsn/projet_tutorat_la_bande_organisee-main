<?php




declare(strict_types=1);

//  Pour forcer les dumps pendant les tests
define('DUMP', true);

require_once '../config/appConfig.php';

use Entities\Bilan;

 echo '<h1>Instanciation par défaut</h1>';
    $obj = new Bilan();
    dump_var($obj, DUMP, 'Bilan par défaut:');
    
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
 echo '<h1>Instanciation avec toutes les infos </h1>';
    $obj = new Bilan($tab);
    dump_var($obj, DUMP, 'Bilan avec toutes les valeurs:');
    

