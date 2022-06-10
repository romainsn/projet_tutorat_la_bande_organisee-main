<?php



namespace Entities;

/**
 * Description of Profil
 *
 * @author romavin
 */
class Etudiant {
    protected $Num_Etu;
    protected $Nom_Etu;
    protected $Pre_Etu;
    protected $Dat_Nai_Etu;
    protected $Tel_Etu;
    protected $Mai_Etu;
    protected $Log_Etu;
    protected $Mdp_Etu;
    protected $Rem_Etu;
    protected $Dat_Pnt_Tel_Etu;
    protected $Suj_Etu;



function getNum_Etu() {
    return $this->Num_Etu;
}

 function getNom_Etu() {
    return $this->Nom_Etu;
}

 function getPre_Etu() {
    return $this->Pre_Etu;
}

 function getDat_Nai_Etu()
 {
     return $this->Dat_Nai_Etu;
 }

 function getTel_Etu() {
    return $this->Tel_Etu;
}

 function getMai_Etu() {
    return $this->Mai_Etu;
}

 function getLog_Etu() {
    return $this->Log_Etu;
}

 function getMdp_Etu() {
    return $this->Mdp_Etu;
}

 function getRem_Etu() {
    return $this->Rem_Etu;
}

 function getDat_Pnt_Tel_Etu() {
    return $this->Dat_Pnt_Tel_Etu;
}

 function getSuj_Etu() {
    return $this->Suj_Etu;
}

 function setNum_Etu($Num_Etu): void {
    $this->Num_Etu = $Num_Etu;
}

 function setNom_Etu($Nom_Etu): void {
    $this->Nom_Etu = $Nom_Etu;
}

 function setPre_Etu($Pre_Etu): void {
    $this->Pre_Etu = $Pre_Etu;
}

 function setDat_Nai_Etu($Dat_Nai_Etu): void {
    $this->Dat_Nai_Etu = $Dat_Nai_Etu;
}

 function setTel_Etu($Tel_Etu): void {
    $this->Tel_Etu = $Tel_Etu;
}

 function setMai_Etu($Mai_Etu): void {
    $this->Mai_Etu = $Mai_Etu;
}

 function setLog_Etu($Log_Etu): void {
    $this->Log_Etu = $Log_Etu;
}

 function setMdp_Etu($Mdp_Etu): void {
    $this->Mdp_Etu = $Mdp_Etu;
}

 function setRem_Etu($Rem_Etu): void {
    $this->Rem_Etu = $Rem_Etu;
}

 function setDat_Pnt_Tel_Etu($Dat_Pnt_Tel_Etu): void {
    $this->Dat_Pnt_Tel_Etu = $Dat_Pnt_Tel_Etu;
}

 function setSuj_Etu($Suj_Etu): void {
    $this->Suj_Etu = $Suj_Etu;
}


function __construct(?array $datas = null) {
    if (!is_null($datas)) {
    (isset($datas['Num_Etu'])) ? $this->setNum_Tut($datas['Num_Etu']) : $this->Num_Etu=null;
    (isset($datas['Nom_Etu'])) ? $this->setNom_Tut($datas['Nom_Etu']) : $this->Nom_Etu('');
    (isset($datas['Pre_Etu'])) ? $this->setPre_Tut($datas['Pre_Etu']) : $this->Pre_Etu('');
    (isset($datas['Dat_Nai_Etu'])) ? $this->setDat_Nai_Etu($datas['Dat_Nai_Etu']) : $this->Dat_Nai_Etu('');
    (isset($datas['Tel_Etu'])) ? $this->setTel_Tut($datas['Tel_Etu']) : $this->Tel_Etu('');
    (isset($datas['Mai_Etu'])) ? $this->setMai_Tut($datas['Mai_Etu']) : $this->Mai_Etu('');
    (isset($datas['Log_Etu'])) ? $this->setLog_Tut($datas['Log_Etu']) : $this->Log_Etu('');
    (isset($datas['Mdp_Etu'])) ? $this->setMdp_Tut($datas['Mdp_Etu']) : $this->Mdp_Etu('');
    (isset($datas['Rem_Etu'])) ? $this->setCpt_Val($datas['Rem_Etu']) : $this->Rem_Etu('');
    (isset($datas['Dat_Pnt_Tel_Etu'])) ? $this->setDat_Pnt_Tel_Etu($datas['Dat_Pnt_Tel_Etu']) : $this->Dat_Pnt_Tel_Etu('');
    (isset($datas['Suj_Etu'])) ? $this->setSuj_Etu($datas['Suj_Etu']) : $this->Suj_Etu('');
}
}
}