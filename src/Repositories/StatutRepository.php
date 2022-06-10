<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Repositories;
use Entities\Statut;

/**
 * Description of StatutRepository
 *
 * @author THOMSS
 */
class StatutRepository {
    //put your code here
         protected $bdd;
    
    public function __construct(\PDO $bdd){
        if(!is_null($bdd))
	    $this->bdd = $bdd;
    }
    
    
    public function getAll() : ? array
{
    $resultSet = NULL;	
    $query = 'SELECT * FROM statut';
    dump_var($query, DUMP, 'Requête SQL:');


    $rqtResult = $this->bdd->query($query);
 

    if ($rqtResult) {
	$rqtResult->setFetchMode(\PDO::FETCH_ASSOC);
	foreach($rqtResult as $row ) {
	    $resultSet[] = new Statut($row);
            
	}
    }
    
    return $resultSet;    
}


public function getById( int $id): ?Statut {
    $resultSet = NULL;
    $query = 'SELECT * FROM Statut WHERE Id_Sta=:Id_Sta;';
    
    $reqPrep = $this->bdd->prepare($query);
    
    $res = $reqPrep->execute([':Id_Sta' => $id]);
    
    if ($res !== FALSE) {
	$tab = ($tmp = $reqPrep->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
	if(!is_null($tab)) {
	    $resultSet = new Statut($tab);
	}
    }
    return $resultSet;
}

public function insert(Statut $entity): ?Statut {
    $resultSet = NULL;

   
    $query = "INSERT INTO Statut" .
	    " (Lib_Sta)"
	    . " VALUES (:Lib_Sta)";

    $reqPrep = $this->bdd->prepare($query);
    
    $res = $reqPrep->execute(
	    [':Lib_Sta' => $entity->getLib_Sta(),
	    ]
    );

    if ($res !== FALSE) {
	$entity->setId_Sta($this->bdd->lastInsertId());
	$resultSet = $entity;
  }

    return $resultSet;
}


public function update(Statut $entity): ?Statut {
   $resultSet = NULL;
 if (is_null($entity->getid_Sta()) || is_null($this->getById($entity->getid_Sta()))) {
	$resultSet = NULL;
    } else {
	//  Entité existante
	$query = "UPDATE Statut"
		. " SET Lib_Sta=:Lib_Sta, "
		. " WHERE id_Sta = :id_Sta";

	$reqPrep = $this->bdd->prepare($query);
	dump_var($reqPrep, DUMP, '$reqPrep dans update Statut');
	$res = $reqPrep->execute(
		[':Lib_Sta' => $entity->getLib_Sta(),
		     ':id_Sta' => $entity->getid_Sta(),

		]
	);

	if ($res !== FALSE) {
	    $resultSet = $entity;
	}
    }

    return $resultSet;
}

}

