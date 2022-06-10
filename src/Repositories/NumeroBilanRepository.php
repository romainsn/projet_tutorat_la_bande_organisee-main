<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Repositories;
use Entities\Numero_Bilan;

/**
 * Description of Numero_BilanRepository
 *
 * @author THOMSS
 */
class Numero_BilanRepository {
    //put your code here
         protected $bdd;
    
    public function __construct(\PDO $bdd){
        if(!is_null($bdd))
	    $this->bdd = $bdd;
    }
    
    
    public function getAll() : ? array
{
    $resultSet = NULL;	
    $query = 'SELECT * FROM numero_bilan';
    dump_var($query, DUMP, 'Requête SQL:');


    $rqtResult = $this->bdd->query($query);
 

    if ($rqtResult) {
	$rqtResult->setFetchMode(\PDO::FETCH_ASSOC);
	foreach($rqtResult as $row ) {
	    $resultSet[] = new numero_bilan($row);
            
	}
    }
    
    return $resultSet;    
}


public function getById( int $id): ?Profil {
    $resultSet = NULL;
    $query = 'SELECT * FROM Numero_Bilan WHERE Num_Bil=:Num_Bil;';
    
    $reqPrep = $this->bdd->prepare($query);
    
    $res = $reqPrep->execute([':Num_Bil' => $id]);
    
    if ($res !== FALSE) {
	$tab = ($tmp = $reqPrep->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
	if(!is_null($tab)) {
	    $resultSet = new Numero_Bilan($tab);
	}
    }
    return $resultSet;
}

public function insert(Numero_Bilan $entity): ?Numero_Bilan {
    $resultSet = NULL;

   
    $query = "INSERT INTO Numero_Bilan" .
	    " (Lib_Bil)"
	    . " VALUES (:Lib_Bil)";

    $reqPrep = $this->bdd->prepare($query);
    
    $res = $reqPrep->execute(
	    [':Lib_Bil' => $entity->getLib_Bil(),
	    ]
    );

    if ($res !== FALSE) {
	$entity->setNum_Bil($this->bdd->lastInsertId());
	$resultSet = $entity;
  }

    return $resultSet;
}


public function update(Numero_Bilan $entity): ?Numero_Bilan {
   $resultSet = NULL;
 if (is_null($entity->getNum_Bil()) || is_null($this->getById($entity->getNum_Bil()))) {
	$resultSet = NULL;
    } else {
	//  Entité existante
	$query = "UPDATE Numero_Bilan"
		. " SET Lib_Bil=:Lib_Bil, "
		. " WHERE Num_Bil = :Num_Bil";

	$reqPrep = $this->bdd->prepare($query);
	dump_var($reqPrep, DUMP, '$reqPrep dans update Numero_Bilan');
	$res = $reqPrep->execute(
		[':Lib_Bil' => $entity->getLib_Bil(),
		     ':Num_Bil' => $entity->getNum_Bil(),

		]
	);

	if ($res !== FALSE) {
	    $resultSet = $entity;
	}
    }

    return $resultSet;
}

}

