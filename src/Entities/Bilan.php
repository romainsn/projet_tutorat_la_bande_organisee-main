<?php


namespace Entities;

/**
 * Description of Profil
 *
 * @author romavin
 */
class Bilan {
    
    protected $Id_Bil;
    protected $Dat_Bil;
    protected $Not_Ent_Bil;
    protected $Not_Ora_Bil;
    protected $Not_Dos_Bil;
    protected $Not_Ora_Fin_Bil;
    protected $Not_Dos_Fin_Bil;
    protected $Rem_Bil;



function getId_Bil() {
    return $this->Id_Bil;
}

 function getDat_Bil() {
    return $this->Dat_Bil;
}

 function getNot_Ent_Bil() {
    return $this->Not_Ent_Bil;
}

 function getNot_Ora_Bil() {
    return $this->Not_Ora_Bil;
}

 function getNot_Dos_Bil() {
    return $this->Not_Dos_Bil;
}

 function getNot_Ora_Fin_Bil() {
    return $this->Not_Ora_Fin_Bil;
}

 function getNot_Dos_Fin_Bil() {
    return $this->Not_Dos_Fin_Bil;
}

 function getRem_Bil() {
    return $this->Rem_Bil;
}

 function setId_Bil($Id_Bil): void {
    $this->Id_Bil = $Id_Bil;
}

 function setDat_Bil($Dat_Bil): void {
    $this->Dat_Bil = $Dat_Bil;
}

 function setNot_Ent_Bil($Not_Ent_Bil): void {
    $this->Not_Ent_Bil = $Not_Ent_Bil;
}

 function setNot_Ora_Bil($Not_Ora_Bil): void {
    $this->Not_Ora_Bil = $Not_Ora_Bil;
}

 function setNot_Dos_Bil($Not_Dos_Bil): void {
    $this->Not_Dos_Bil = $Not_Dos_Bil;
}

 function setNot_Ora_Fin_Bil($Not_Ora_Fin_Bil): void {
    $this->Not_Ora_Fin_Bil = $Not_Ora_Fin_Bil;
}

 function setNot_Dos_Fin_Bil($Not_Dos_Fin_Bil): void {
    $this->Not_Dos_Fin_Bil = $Not_Dos_Fin_Bil;
}

 function setRem_Bil($Rem_Bil): void {
    $this->Rem_Bil = $Rem_Bil;
}
function __construct(?array $datas = null) {
    if (!is_null($datas)) {
    (isset($datas['Id_Bil'])) ? $this->setNum_Tut($datas['Id_Bil']) : $this->Id_Bil=null;
    (isset($datas['Dat_Bil'])) ? $this->setDat_Bil($datas['Dat_Bil']) : $this->Dat_Bil('');
    (isset($datas['Not_Ent_Bil'])) ? $this->setNot_Ent_Bil($datas['Not_Ent_Bil']) : $this->Not_Ent_Bil('');
    (isset($datas['Not_Ora_Bil'])) ? $this->setNot_Ora_Bil($datas['Not_Ora_Bil']) : $this->Not_Ora_Bil('');
    (isset($datas['Not_Dos_Bil'])) ? $this->setNot_Dos_Bil($datas['Not_Dos_Bil']) : $this->Not_Dos_Bil('');
    (isset($datas['Not_Ora_Fin_Bil'])) ? $this->setNot_Ora_Fin_Bil($datas['Not_Ora_Fin_Bil']) : $this->Not_Ora_Fin_Bil('');
    (isset($datas['Not_Dos_Fin_Bil'])) ? $this->setNot_Dos_Fin_Bil($datas['Not_Dos_Fin_Bil']) : $this->Not_Dos_Fin_Bil('');
    (isset($datas['Rem_Bil'])) ? $this->setRem_Bil($datas['Rem_Bil']) : $this->Rem_Bil('');
}
}
}