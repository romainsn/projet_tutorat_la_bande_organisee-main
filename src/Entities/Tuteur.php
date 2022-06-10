<?php



namespace Entities;

/**
 * Description of Profil
 *
 * @author romavin
 */
class Tuteur {
  
    protected $Num_Tut;
    protected $Nom_Tut;
    protected $Pre_Tut;
    protected $Tel_Tut;
    protected $Mai_Tut;
    protected $Log_Tut;
    protected $Mdp_Tut;
    protected $Cpt_Val;
    
    
    function getNum_Tut() {
        return $this->Num_Tut;
    }

    function getNom_Tut() {
        return $this->Nom_Tut;
    }

    function getPre_Tut() {
        return $this->Pre_Tut;
    }

    function getTel_Tut() {
        return $this->Tel_Tut;
    }

    function getMai_Tut() {
        return $this->Mai_Tut;
    }

    function getLog_Tut() {
        return $this->Log_Tut;
    }

    function getMdp_Tut() {
        return $this->Mdp_Tut;
    }

    function getCpt_Val() {
        return $this->Cpt_Val;
    }

    function setNum_Tut($Num_Tut): void {
        $this->Num_Tut = $Num_Tut;
    }

    function setNom_Tut($Nom_Tut): void {
        $this->Nom_Tut = $Nom_Tut;
    }

    function setPre_Tut($Pre_Tut): void {
        $this->Pre_Tut = $Pre_Tut;
    }

    function setTel_Tut($Tel_Tut): void {
        $this->Tel_Tut = $Tel_Tut;
    }

    function setMai_Tut($Mai_Tut): void {
        $this->Mai_Tut = $Mai_Tut;
    }

    function setLog_Tut($Log_Tut): void {
        $this->Log_Tut = $Log_Tut;
    }

    function setMdp_Tut($Mdp_Tut): void {
        $this->Mdp_Tut = $Mdp_Tut;
    }

    function setCpt_Val($Cpt_Val): void {
        $this->Cpt_Val = $Cpt_Val;
    }
    function __construct(?array $datas = null) {
        if (!is_null($datas)) {
	    (isset($datas['Num_Tut'])) ? $this->setNum_Tut($datas['Num_Tut']) : $this->Num_Tut=null;
	    (isset($datas['Nom_Tut'])) ? $this->setNom_Tut($datas['Nom_Tut']) : $this->Nom_Tut('');
        (isset($datas['Nom_Tut'])) ? $this->setPre_Tut($datas['Nom_Tut']) : $this->Pre_Tut('');
        (isset($datas['Tel_Tut'])) ? $this->setTel_Tut($datas['Tel_Tut']) : $this->Tel_Tut('');
        (isset($datas['Mai_Tut'])) ? $this->setMai_Tut($datas['Mai_Tut']) : $this->Mai_Tut('');
        (isset($datas['Log_Tut'])) ? $this->setLog_Tut($datas['Log_Tut']) : $this->Log_Tut('');
        (isset($datas['Mdp_Tut'])) ? $this->setMdp_Tut($datas['Mdp_Tut']) : $this->Mdp_Tut('');
        (isset($datas['Cpt_Val'])) ? $this->setCpt_Val($datas['Cpt_Val']) : $this->Cpt_Val('');
	}
        
        
}

}