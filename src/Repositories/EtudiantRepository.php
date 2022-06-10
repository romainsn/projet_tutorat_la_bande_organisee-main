<?php


namespace Repositories;
use Entities\Etudiant;

/**
 * Description of ProfilRepository
 *
 * @author THOMSS
 */
class EtudiantRepository {
    //put your code here
         protected $bdd;
    
    public function __construct(\PDO $bdd){
        if(!is_null($bdd))
	    $this->bdd = $bdd;
    }
    
    
    public function getAll() : ? array
{
    $resultSet = NULL;	
    $query = 'SELECT * FROM etudiant';
    dump_var($query, DUMP, 'Requête SQL:');


    $rqtResult = $this->bdd->query($query);
 

    if ($rqtResult) {
	$rqtResult->setFetchMode(\PDO::FETCH_ASSOC);
	foreach($rqtResult as $row ) {
	    $resultSet[] = new Etudiant($row);
            
	}
    }
    
    return $resultSet;    
}


public function getById( int $id): ?Etudiant {
    $resultSet = NULL;
    $query = 'SELECT * FROM Etudiant WHERE Num_Etu=:Num_Etu;';
    
    $reqPrep = $this->bdd->prepare($query);
    
    $res = $reqPrep->execute([':Num_Etu' => $id]);
    
    if ($res !== FALSE) {
	$tab = ($tmp = $reqPrep->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
	if(!is_null($tab)) {
	    $resultSet = new Etudiant($tab);
	}
    }
    return $resultSet;
}

public function insert(Profil $entity): ?Etudiant {
    $resultSet = NULL;

   
    $query = "INSERT INTO Etudiant" .
	    " (Num_Etu, Nom_Etu, Pre_Etu, Tel_Etu, Mai_Etu, Log_Etu, Mdp_Etu, Rem_Etu, Dat_Pnt_Tel_Etu, Suj_Etu)"
	    . " VALUES (:Num_Etu, :Nom_Etu, , :Pre_Etu, :Tel_Etu, :Mai_Etu, :Log_Etu, :Mdp_Etu, :Rem_Etu, :Dat_Pnt_Tel_Etu, :Suj_Etu)";

    $reqPrep = $this->bdd->prepare($query);
    
    $res = $reqPrep->execute(
	    [':Num_Etu' => $entity->getNum_Etu(),
		':Nom_Etu' => $entity->getNom_Etu(),
                ':Pre_Etu' => $entity->getPre_Etu(),
                ':Tel_Etu' => $entity->getTel_Etu(),
		':Mai_Etu' => $entity->getMai_Etu(),
                ':Log_Etu' => $entity->getLog_Etu(),
                ':Mdp_Etu' => $entity->getMdp_Etu(),
                ':Rem_Etu' => $entity->getRem_Etu(),
                ':Dat_Pnt_Tel_Etu' => $entity->getDat_Pnt_Tel_Etu(),
                ':Suj_Etu' => $entity->getSuj_Etu(),
	    ]
    );

    if ($res !== FALSE) {
	$entity->setid_Pro($this->bdd->lastInsertId());
	$resultSet = $entity;
  }

    return $resultSet;
}


public function update(Etudiant $entity): ?Etudiant {
   $resultSet = NULL;
 if (is_null($entity->getNum_Etu()) || is_null($this->getById($entity->getNum_Etu()))) {
	$resultSet = NULL;
    } else {
	//  Entité existante
	$query = "UPDATE Entreprise"
		. " SET Num_Etu=:Num_Etu, "
		. " Nom_Etu=:Nom_Etu,"
                . " Pre_Etu = :Pre_Etu,"
                . " Tel_Etu = :Tel_Etu,"
                . " Mai_Etu = :Mai_Etu"
		. " Log_Etu=:Log_Etu,"
                . " Mdp_Etu = :Mdp_Etu,"
		. " Rem_Etu=:Rem_Etu,"
                . " Dat_Pnt_Tel_Etu = :Dat_Pnt_Tel_Etu,"
		. " Suj_Etu=:Suj_Etu,";
                
                

	$reqPrep = $this->bdd->prepare($query);
	dump_var($reqPrep, DUMP, '$reqPrep dans update Etudiant');
	$res = $reqPrep->execute(
	    [':Num_Etu' => $entity->getNum_Etu(),
		':Nom_Etu' => $entity->getNom_Etu(),
                ':Pre_Etu' => $entity->getPre_Etu(),
                ':Tel_Etu' => $entity->getTel_Etu(),
		':Mai_Etu' => $entity->getMai_Etu(),
                ':Log_Etu' => $entity->getLog_Etu(),
                ':Mdp_Etu' => $entity->getMdp_Etu(),
                ':Rem_Etu' => $entity->getRem_Etu(),
                ':Dat_Pnt_Tel_Etu' => $entity->getDat_Pnt_Tel_Etu(),
                ':Suj_Etu' => $entity->getSuj_Etu(),
	    ]
    );

	if ($res !== FALSE) {
	    $resultSet = $entity;
	}
    }

    return $resultSet;
}

}

