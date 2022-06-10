<?php
namespace Repositories;

use Entities\Entreprise;

/**
 * Description of ActeurRepository
 *
 * @author romavin
 */
class EntrepriseRepository {
    //put your code here
         protected $bdd;
    
    public function __construct(\PDO $bdd){
        if(!is_null($bdd))
	    $this->bdd = $bdd;
    }
    
    
    public function getAll() : ? array
{
    $resultSet = NULL;	
    $query = 'SELECT * FROM Entreprise';
    dump_var($query, DUMP, 'Requête SQL:');


    $rqtResult = $this->bdd->query($query);
 

    if ($rqtResult) {
	$rqtResult->setFetchMode(\PDO::FETCH_ASSOC);
	foreach($rqtResult as $row ) {
	    $resultSet[] = new Entreprise($row);
            
	}
    }
    
    return $resultSet;    
}


public function getById( int $id): ?Entreprise {
    $resultSet = NULL;
    $query = 'SELECT * FROM Entreprise WHERE Id_Ent=:Id_Ent;';
    
    $reqPrep = $this->bdd->prepare($query);
    
    $res = $reqPrep->execute([':Id_Ent' => $id]);
    
    if ($res !== FALSE) {
	$tab = ($tmp = $reqPrep->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
	if(!is_null($tab)) {
	    $resultSet = new Entreprise($tab);
	}
    }
    return $resultSet;
}

public function insert(Entreprise $entity): ?Entreprise {
    $resultSet = NULL;

   
    $query = "INSERT INTO Entreprise" .
	    " (Id_Ent, Lib_Ent, Adr_Ent, Cp_Ent, Vil_Ent, Nom_Mai_App, Pre_Mai_App, Tel_Mai_App)"
	    . " VALUES (:Id_Ent, :Lib_Ent, :Adr_Ent, :Cp_Ent, :Vil_Ent, :Nom_Mai_App, :Pre_Mai_App, :Tel_Mai_App)";

    $reqPrep = $this->bdd->prepare($query);
    
    $res = $reqPrep->execute(
	    [':Id_Ent' => $entity->getId_Ent(),
		':Lib_Ent' => $entity->getLib_Ent(),
                ':Adr_Ent' => $entity->getAdr_Ent(),
                ':Cp_Ent' => $entity->getCp_Ent(),
		':Vil_Ent' => $entity->getVil_Ent(),
                ':Nom_Mai_App' => $entity->getNom_Mai_App(),
                ':Pre_Mai_App' => $entity->getPre_Mai_App(),
                ':Tel_Mai_App' => $entity->getTel_Mai_App(),
	    ]
    );

    if ($res !== FALSE) {
	$entity->setId_Ent($this->bdd->lastInsertId());
	$resultSet = $entity;
  }

    return $resultSet;
}


public function update(Entreprise $entity): ?Entreprise {
   $resultSet = NULL;
 if (is_null($entity->getId_Ent()) || is_null($this->getById($entity->getId_Ent()))) {
	$resultSet = NULL;
    } else {
	//  Entité existante
	$query = "UPDATE Entreprise"
		. " SET Id_Ent=:Id_Ent, "
		. " Lib_Ent=:Lib_Ent,"
                . " Adr_Ent = :Adr_Ent,"
                . " Cp_Ent = :Cp_Ent,"
                . " Vil_Ent = :Vil_Ent"
		. " Nom_Mai_App=:Nom_Mai_App,"
                . " Pre_Mai_App = :Pre_Mai_App,"
		. " Tel_Mai_App=:Tel_Mai_App,";
                

	$reqPrep = $this->bdd->prepare($query);
	dump_var($reqPrep, DUMP, '$reqPrep dans update Bilan');
	$res = $reqPrep->execute(
		[':Id_Ent' => $entity->getId_Ent(),
		':Lib_Ent' => $entity->getLib_Ent(),
                ':Adr_Ent' => $entity->getAdr_Ent(),
                ':Cp_Ent' => $entity->getCp_Ent(),
		':Vil_Ent' => $entity->getVil_Ent(),
                ':Nom_Mai_App' => $entity->getNom_Mai_App(),
                ':Pre_Mai_App' => $entity->getPre_Mai_App(),
                ':Tel_Mai_App' => $entity->getTel_Mai_App(),
	    ]
	);

	if ($res !== FALSE) {
	    $resultSet = $entity;
	}
    }

    return $resultSet;
}

}
