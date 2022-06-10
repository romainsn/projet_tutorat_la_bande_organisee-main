<?php


namespace Repositories;
use Entities\Tuteur;

/**
 * Description of ProfilRepository
 *
 * @author romavin
 */
class TuteurRepository {
    //put your code here
         protected $bdd;
    
    public function __construct(\PDO $bdd){
        if(!is_null($bdd))
	    $this->bdd = $bdd;
    }
    
    
    public function getAll() : ? array
{
    $resultSet = NULL;	
    $query = 'SELECT * FROM tuteur';
    dump_var($query, DUMP, 'Requête SQL:');


    $rqtResult = $this->bdd->query($query);
 

    if ($rqtResult) {
	$rqtResult->setFetchMode(\PDO::FETCH_ASSOC);
	foreach($rqtResult as $row ) {
	    $resultSet[] = new Tuteur($row);
            
	}
    }
    
    return $resultSet;    
}


public function getById( int $id): ?Tuteur {
    $resultSet = NULL;
    $query = 'SELECT * FROM Tuteur WHERE Num_Tut=:Num_Tut;';
    
    $reqPrep = $this->bdd->prepare($query);
    
    $res = $reqPrep->execute([':Num_Tut' => $id]);
    
    if ($res !== FALSE) {
	$tab = ($tmp = $reqPrep->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
	if(!is_null($tab)) {
	    $resultSet = new Tuteur($tab);
	}
    }
    return $resultSet;
}

public function insert(Profil $entity): ?Tuteur {
    $resultSet = NULL;

   
    $query = "INSERT INTO Etudiant" .
	    " (Num_Tut, Nom_Tut, Pre_Tut, Tel_Tut, Mai_Tut, Log_Tut, Mdp_Tut, Cpt_Val, Nb_Etu_Max_3OLE, Nb_Etu_Max_4OLE , Nb_Etu_Max_5OLE)"
	    . " VALUES (:Num_Tut, :Nom_Tut, , :Pre_Tut, :Tel_Tut, :Mai_Tut, :Log_Tut, :Mdp_Tut, Cpt_Val, :Nb_Etu_Max_3OLE, :Nb_Etu_Max_4OLE, :Nb_Etu_Max_5OLE)";

    $reqPrep = $this->bdd->prepare($query);
    
    $res = $reqPrep->execute(
	    [':Num_Tut' => $entity->getNum_Tut(),
		':Nom_Tut' => $entity->getNom_Tut(),
                ':Pre_Tut' => $entity->getPre_Tut(),
                ':Tel_Tut' => $entity->getTel_Tut(),
		':Mai_Tut' => $entity->getMai_Tut(),
                ':Log_Tut' => $entity->getLog_Tut(),
                ':Mdp_Tut' => $entity->getMdp_Tut(),
                ':Cpt_Val' => $entity->getCpt_Val(),
                ':Nb_Etu_Max_3OLE' => $entity->getNb_Etu_Max_3OLE(),
                ':Nb_Etu_Max_4OLE' => $entity->getEtu_Max_4OLE(),
                ':Nb_Etu_Max_5OLE' => $entity->getEtu_Max_5OLE(),
	    ]
    );

    if ($res !== FALSE) {
	$entity->setNum_Tut($this->bdd->lastInsertId());
	$resultSet = $entity;
  }

    return $resultSet;
}


public function update(Tuteur $entity): ?Tuteur {
   $resultSet = NULL;
 if (is_null($entity->getNum_Etu()) || is_null($this->getById($entity->getNum_Etu()))) {
	$resultSet = NULL;
    } else {
	//  Entité existante
	$query = "UPDATE Tuteur"
		. " SET Num_Tut=:Num_Tut, "
		. " Nom_Tut=:Nom_Tut,"
                . " Pre_Tut = :Pre_Tut,"
                . " Tel_Tut = :Tel_Tut,"
                . " Mai_Tut = :Mai_Tut"
		. " Log_Tut=:Log_Tut,"
                . " Mdp_Tut = :Mdp_Tut,"
		. " Cpt_Val=:Cpt_Val,"
                . " Nb_Etu_Max_3OLE = :Nb_Etu_Max_3OLE,"
		. " Nb_Etu_Max_4OLE=:Nb_Etu_Max_4OLE,"
                . " Nb_Etu_Max_5OLE=:Nb_Etu_Max_5OLE,";
                
                

	$reqPrep = $this->bdd->prepare($query);
	dump_var($reqPrep, DUMP, '$reqPrep dans update Etudiant');
	 $res = $reqPrep->execute(
	    [':Num_Tut' => $entity->getNum_Tut(),
		':Nom_Tut' => $entity->getNom_Tut(),
                ':Pre_Tut' => $entity->getPre_Tut(),
                ':Tel_Tut' => $entity->getTel_Tut(),
		':Mai_Tut' => $entity->getMai_Tut(),
                ':Log_Tut' => $entity->getLog_Tut(),
                ':Mdp_Tut' => $entity->getMdp_Tut(),
                ':Cpt_Val' => $entity->getCpt_Val(),
                ':Nb_Etu_Max_3OLE' => $entity->getNb_Etu_Max_3OLE(),
                ':Nb_Etu_Max_4OLE' => $entity->getEtu_Max_4OLE(),
                ':Nb_Etu_Max_5OLE' => $entity->getEtu_Max_5OLE(),
	    ]
    );

	if ($res !== FALSE) {
	    $resultSet = $entity;
	}
    }

    return $resultSet;
}

}

