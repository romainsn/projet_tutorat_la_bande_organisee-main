<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Repositories;
use Entities\Specialite;

/**
 * Description of SpecialiteRepository
 *
 * @author THOMSS
 */
class SpecialiteRepository {
    //put your code here
       protected $bdd;
    
    public function __construct(\PDO $bdd){
        if(!is_null($bdd))
	    $this->bdd = $bdd;
    }
    
    
    public function getAll() : ? array
{
    $resultSet = NULL;	
    $query = 'SELECT * FROM specialite';
    dump_var($query, DUMP, 'Requête SQL:');


    $rqtResult = $this->bdd->query($query);
 

    if ($rqtResult) {
	$rqtResult->setFetchMode(\PDO::FETCH_ASSOC);
	foreach($rqtResult as $row ) {
	    $resultSet[] = new Specialite($row);
            
	}
    }
    
    return $resultSet;    
}


public function getById( int $id): ?Specialite {
    $resultSet = NULL;
    $query = 'SELECT * FROM Specialite WHERE id_Spe=:id_Spe;';
    
    $reqPrep = $this->bdd->prepare($query);
    
    $res = $reqPrep->execute([':id_Spe' => $id]);
    
    if ($res !== FALSE) {
	$tab = ($tmp = $reqPrep->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
	if(!is_null($tab)) {
	    $resultSet = new Specialite($tab);
	}
    }
    return $resultSet;
}

public function insert(Specialite $entity): ?Specialite {
    $resultSet = NULL;

   
    $query = "INSERT INTO specialite" .
	    " (lib_Spe)"
	    . " VALUES (:lib_Spe)";

    $reqPrep = $this->bdd->prepare($query);
    
    $res = $reqPrep->execute(
	    [':lib_Spe' => $entity->getlib_Spe(),
	    ]
    );

    if ($res !== FALSE) {
	$entity->setid_Spe($this->bdd->lastInsertId());
	$resultSet = $entity;
  }

    return $resultSet;
}


public function update(Specialite $entity): ?Specialite {
   $resultSet = NULL;
 if (is_null($entity->getid_Spe()) || is_null($this->getById($entity->getid_Spe()))) {
	$resultSet = NULL;
    } else {
	//  Entité existante
	$query = "UPDATE specialite"
		. " SET lib_Spe=:lib_Spe, "
		. " WHERE id_Spe = :id_Spe";

	$reqPrep = $this->bdd->prepare($query);
	dump_var($reqPrep, DUMP, '$reqPrep dans update Specialite');
	$res = $reqPrep->execute(
		[':lib_Spe' => $entity->getlib_Spe(),
		     ':id_Spe' => $entity->getid_Spe(),

		]
	);

	if ($res !== FALSE) {
	    $resultSet = $entity;
	}
    }

    return $resultSet;
}

}
