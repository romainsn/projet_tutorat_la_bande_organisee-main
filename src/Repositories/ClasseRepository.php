<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Repositories;
use Entities\Classe;

/**
 * Description of ClasseRepository
 *
 * @author THOMSS
 */
class ClasseRepository {
    //put your code here
         protected $bdd;
    
    public function __construct(\PDO $bdd){
        if(!is_null($bdd))
	    $this->bdd = $bdd;
    }
    
    
    public function getAll() : ? array
{
    $resultSet = NULL;	
    $query = 'SELECT * FROM Classe';
    dump_var($query, DUMP, 'Requête SQL:');


    $rqtResult = $this->bdd->query($query);
 

    if ($rqtResult) {
	$rqtResult->setFetchMode(\PDO::FETCH_ASSOC);
	foreach($rqtResult as $row ) {
	    $resultSet[] = new Classe($row);
            
	}
    }
    
    return $resultSet;    
}


public function getById( int $id): ?Classe {
    $resultSet = NULL;
    $query = 'SELECT * FROM Classe WHERE id_Cla=:id_Cla;';
    
    $reqPrep = $this->bdd->prepare($query);
    
    $res = $reqPrep->execute([':id_Cla' => $id]);
    
    if ($res !== FALSE) {
	$tab = ($tmp = $reqPrep->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
	if(!is_null($tab)) {
	    $resultSet = new Classe($tab);
	}
    }
    return $resultSet;
}

public function insert(Classe $entity): ?Classe {
    $resultSet = NULL;

   
    $query = "INSERT INTO Classe" .
	    " (Lib_Cla)"
	    . " VALUES (:Lib_Cla)";

    $reqPrep = $this->bdd->prepare($query);
    
    $res = $reqPrep->execute(
	    [':Lib_Cla' => $entity->getLib_Cla(),
	    ]
    );

    if ($res !== FALSE) {
	$entity->setid_Pro($this->bdd->lastInsertId());
	$resultSet = $entity;
  }

    return $resultSet;
}


public function update(Classe $entity): ?Classe {
   $resultSet = NULL;
 if (is_null($entity->getid_Cla()) || is_null($this->getById($entity->getid_Cla()))) {
	$resultSet = NULL;
    } else {
	//  Entité existante
	$query = "UPDATE Classe"
		. " SET Lib_Cla=:Lib_Cla, "
		. " WHERE id_Cla = :id_Cla";

	$reqPrep = $this->bdd->prepare($query);
	dump_var($reqPrep, DUMP, '$reqPrep dans update Classe');
	$res = $reqPrep->execute(
		[':Lib_Cla' => $entity->getLib_Cla(),
		     ':id_Cla' => $entity->getid_Cla(),

		]
	);

	if ($res !== FALSE) {
	    $resultSet = $entity;
	}
    }

    return $resultSet;
}

}

