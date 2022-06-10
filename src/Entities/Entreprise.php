<?php



namespace Entities;

/**
 * Description of Profil
 *
 * @author romavin
 */
class Entreprise {
    
    protected $Id_Ent;
    protected $Lib_Ent;
    protected $Adr_Ent;
    protected $Cp_Ent;
    protected $Vil_Ent;
    protected $Nom_Mai_App;
    protected $Pre_Mai_App;
    protected $Tel_Mai_App;
    



function getId_Ent() {
    return $this->Id_Ent;
}

 function getLib_Ent() {
    return $this->Lib_Ent;
}

 function getAdr_Ent() {
    return $this->Adr_Ent;
}

 function getCp_Ent() {
    return $this->Cp_Ent;
}

 function getVil_Ent() {
    return $this->Vil_Ent;
}

 function getNom_Mai_App() {
    return $this->Nom_Mai_App;
}

 function getPre_Mai_App() {
    return $this->Pre_Mai_App;
}

 function getTel_Mai_App() {
    return $this->Tel_Mai_App;
}

 function setId_Ent($Id_Ent): void {
    $this->Id_Ent = $Id_Ent;
}

 function setLib_Ent($Lib_Ent): void {
    $this->Lib_Ent = $Lib_Ent;
}

 function setAdr_Ent($Adr_Ent): void {
    $this->Adr_Ent = $Adr_Ent;
}

 function setCp_Ent($Cp_Ent): void {
    $this->Cp_Ent = $Cp_Ent;
}

 function setVil_Ent($Vil_Ent): void {
    $this->Vil_Ent = $Vil_Ent;
}

 function setNom_Mai_App($Nom_Mai_App): void {
    $this->Nom_Mai_App = $Nom_Mai_App;
}

 function setPre_Mai_App($Pre_Mai_App): void {
    $this->Pre_Mai_App = $Pre_Mai_App;
}

 function setTel_Mai_App($Tel_Mai_App): void {
    $this->Tel_Mai_App = $Tel_Mai_App;
}
function __construct(?array $datas = null) {
    if (!is_null($datas)) {
    (isset($datas['Id_Ent'])) ? $this->setNum_Tut($datas['Id_Ent']) : $this->Id_Ent=null;
    (isset($datas['Lib_Ent'])) ? $this->setDat_Bil($datas['Lib_Ent']) : $this->Lib_Ent('');
    (isset($datas['Adr_Ent'])) ? $this->setNot_Ent_Bil($datas['Adr_Ent']) : $this->Adr_Ent('');
    (isset($datas['Cp_Ent'])) ? $this->setNot_Ora_Bil($datas['Cp_Ent']) : $this->Cp_Ent('');
    (isset($datas['Vil_Ent'])) ? $this->setNot_Dos_Bil($datas['Vil_Ent']) : $this->Vil_Ent('');
    (isset($datas['Nom_Mai_App'])) ? $this->setNot_Ora_Fin_Bil($datas['Nom_Mai_App']) : $this->Nom_Mai_App('');
    (isset($datas['Pre_Mai_App'])) ? $this->setNot_Dos_Fin_Bil($datas['Pre_Mai_App']) : $this->Pre_Mai_App('');
    (isset($datas['Tel_Mai_App'])) ? $this->setRem_Bil($datas['Tel_Mai_App']) : $this->Tel_Mai_App('');
}
}
}