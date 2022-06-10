<?php

namespace Entities;


class Referent
{
    protected $Num_Ref;
    protected $Nom_Ref;
    protected $Pre_Ref;


    function getNum_Ref() {
        return $this->Num_Ref;}

    function getNom_Ref() {
        return $this->Nom_Ref;}

    function getPre_Ref() {
        return $this->Pre_Ref;}


    function setNum_Ref($Num_Ref): void {
        $this->Num_Ref = $Num_Ref;}

    function setNom_Ref($Nom_Ref): void {
        $this->Nom_Ref = $Nom_Ref;}

    function setPre_Ref($Pre_Ref): void {
        $this->Pre_Ref = $Pre_Ref;}

    function __construct(?array $datas = null) {
        if (!is_null($datas)) {
            (isset($datas['Num_Ref'])) ? $this->setNum_Ref($datas['Num_Ref']) : $this->Num_Ref = null;
            (isset($datas['Nom_Ref'])) ? $this->setNom_Ref($datas['Nom_Ref']) : $this->Nom_Ref('');
            (isset($datas['Pre_Ref'])) ? $this->setPre_Ref($datas['Pre_Ref']) : $this->Pre_Ref('');
        }
}