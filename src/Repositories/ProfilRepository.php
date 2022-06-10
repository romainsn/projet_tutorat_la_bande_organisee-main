<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Repositories;
use Entities\Profil;

/**
 * Description of ProfilRepository
 *
 * @author THOMSS
 */
class ProfilRepository {
    //put your code here
         protected $bdd;
    
    public function __construct(\PDO $bdd){
        if(!is_null($bdd))
	    $this->bdd = $bdd;
    }
    
    
    public function getAll() : ? array
{
    $resultSet = NULL;	
    $query = 'SELECT * FROM profil';
    dump_var($query, DUMP, 'Requête SQL:');


    $rqtResult = $this->bdd->query($query);
 

    if ($rqtResult) {
	$rqtResult->setFetchMode(\PDO::FETCH_ASSOC);
	foreach($rqtResult as $row ) {
	    $resultSet[] = new Profil($row);
            
	}
    }
    
    return $resultSet;    
}


public function getById( int $id): ?Profil {
    $resultSet = NULL;
    $query = 'SELECT * FROM Profil WHERE id_Pro=:id_Pro;';
    
    $reqPrep = $this->bdd->prepare($query);
    
    $res = $reqPrep->execute([':id_Pro' => $id]);
    
    if ($res !== FALSE) {
	$tab = ($tmp = $reqPrep->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
	if(!is_null($tab)) {
	    $resultSet = new Profil($tab);
	}
    }
    return $resultSet;
}

public function insert(Profil $entity): ?Profil {
    $resultSet = NULL;

   
    $query = "INSERT INTO Profil" .
	    " (Lib_Pro)"
	    . " VALUES (:Lib_Pro)";

    $reqPrep = $this->bdd->prepare($query);
    
    $res = $reqPrep->execute(
	    [':Lib_Pro' => $entity->getLib_Pro(),
	    ]
    );

    if ($res !== FALSE) {
	$entity->setid_Pro($this->bdd->lastInsertId());
	$resultSet = $entity;
  }

    return $resultSet;
}


public function update(Profil $entity): ?Profil {
   $resultSet = NULL;
 if (is_null($entity->getid_Pro()) || is_null($this->getById($entity->getid_Pro()))) {
	$resultSet = NULL;
    } else {
	//  Entité existante
	$query = "UPDATE profil"
		. " SET Lib_Pro=:Lib_Pro, "
		. " WHERE id_Pro = :id_Pro";

	$reqPrep = $this->bdd->prepare($query);
	dump_var($reqPrep, DUMP, '$reqPrep dans update Profil');
	$res = $reqPrep->execute(
		[':Lib_Pro' => $entity->getLib_Pro(),
		     ':id_Pro' => $entity->getid_Pro(),

		]
	);

	if ($res !== FALSE) {
	    $resultSet = $entity;
	}
    }

    return $resultSet;
}

}

