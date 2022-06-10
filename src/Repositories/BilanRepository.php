<?php


namespace Repositories;
use Entities\Bilan;

/**
 * Description of ProfilRepository
 *
 * @author THOMSS
 */
class BilanRepository {
    //put your code here
         protected $bdd;
    
    public function __construct(\PDO $bdd){
        if(!is_null($bdd))
	    $this->bdd = $bdd;
    }
    
    
    public function getAll() : ? array
{
    $resultSet = NULL;	
    $query = 'SELECT * FROM bilan';
    dump_var($query, DUMP, 'Requête SQL:');


    $rqtResult = $this->bdd->query($query);
 

    if ($rqtResult) {
	$rqtResult->setFetchMode(\PDO::FETCH_ASSOC);
	foreach($rqtResult as $row ) {
	    $resultSet[] = new Bilan($row);
            
	}
    }
    
    return $resultSet;    
}


public function getById( int $id): ?Bilan {
    $resultSet = NULL;
    $query = 'SELECT * FROM Bilan WHERE Id_Bil=:Id_Bil;';
    
    $reqPrep = $this->bdd->prepare($query);
    
    $res = $reqPrep->execute([':Id_Bil' => $id]);
    
    if ($res !== FALSE) {
	$tab = ($tmp = $reqPrep->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
	if(!is_null($tab)) {
	    $resultSet = new Bilan($tab);
	}
    }
    return $resultSet;
}

public function insert(Profil $entity): ?Profil {
    $resultSet = NULL;

   
    $query = "INSERT INTO Bilan" .
	    " (Id_Bil, Dat_Bil, Not_Ent_Bil, Not_Ora_Bil, Not_Dos_Bil, Not_Ora_Fin_Bil, Not_Dos_Fin_Bil, Rem_Bil)"
	    . " VALUES (:Id_Bil, :Dat_Bil, :Not_Ent_Bil, :Not_Ora_Bil, :Not_Dos_Bil, :Not_Ora_Fin_Bil, :Not_Dos_Fin_Bil, :Rem_Bil)";

    $reqPrep = $this->bdd->prepare($query);
    
    $res = $reqPrep->execute(
	    [':Id_Bil' => $entity->getId_Bil(),
		':Dat_Bil' => $entity->getDat_Bil(),
                ':Not_Ent_Bil' => $entity->getNot_Ent_Bil(),
                ':Not_Ora_Bil' => $entity->getNot_Ora_Bil(),
		':Not_Dos_Bil' => $entity->getNot_Dos_Bil(),
                ':Not_Ora_Fin_Bil' => $entity->getNot_Ora_Fin_Bil(),
                ':Not_Dos_Fin_Bil' => $entity->getNot_Dos_Fin_Bil(),
                ':Rem_Bil' => $entity->getRem_Bil(),
	    ]
    );

    if ($res !== FALSE) {
	$entity->setId_Bil($this->bdd->lastInsertId());
	$resultSet = $entity;
  }

    return $resultSet;
}


public function update(Bilan $entity): ?Bilan {
   $resultSet = NULL;
 if (is_null($entity->getId_Bil()) || is_null($this->getById($entity->getId_Bil()))) {
	$resultSet = NULL;
    } else {
	//  Entité existante
	$query = "UPDATE Bilan"
		. " SET Dat_Bil=:Dat_Bil, "
		. " Not_Ent_Bil=:Not_Ent_Bil,"
                . " Not_Ora_Bil = :Not_Ora_Bil,"
                . " Not_Dos_Bil = :Not_Dos_Bil,"
                . " Not_Ora_Fin_Bil = :Not_Ora_Fin_Bil"
		. " Not_Dos_Fin_Bil=:Not_Dos_Fin_Bil,"
                . " Rem_Bil = :Rem_Bil,"
                . " WHERE Id_Bil = :Id_Bil";

	$reqPrep = $this->bdd->prepare($query);
	dump_var($reqPrep, DUMP, '$reqPrep dans update Bilan');
	$res = $reqPrep->execute(
		[':Id_Bil' => $entity->getId_Bil(),
		':Dat_Bil' => $entity->getDat_Bil(),
                ':Not_Ent_Bil' => $entity->getNot_Ent_Bil(),
                ':Not_Ora_Bil' => $entity->getNot_Ora_Bil(),
		':Not_Dos_Bil' => $entity->getNot_Dos_Bil(),
                ':Not_Ora_Fin_Bil' => $entity->getNot_Ora_Fin_Bil(),
                ':Not_Dos_Fin_Bil' => $entity->getNot_Dos_Fin_Bil(),
                ':Rem_Bil' => $entity->getRem_Bil(),
	    ]
	);

	if ($res !== FALSE) {
	    $resultSet = $entity;
	}
    }

    return $resultSet;
}

}

