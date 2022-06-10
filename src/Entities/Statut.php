<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Entities;
/**
 * Description of Statut
 *
 * @author THOMSS
 */
class Statut {
    //put your code here

    private $Id_Sta = null;
    private $Lib_Sta;
  

    function getId_Sta(): int
    {
        return $this->Id_Sta;
    }

    function getLib_Sta(): string 
    {
        return $this->Lib_Sta;
    }


    function setId_Sta(int $Id_Sta): self
    {
        if ($this->Id_Sta == null){
            $this->Id_Sta = ($tmp = filter_var($Id_Sta, FILTER_VALIDATE_INT)) ? $tmp : null;
        }
        return $this;
    }

    function setLib_Sta(string $Lib_Sta): self
    {
        $this->Lib_Sta = $Lib_Sta;
        return $this;
    }

    function __construct(?array $datas = null)
    {
        $this->Id_Sta = $datas['Id_Sta'];
        $this->Lib_Sta = $datas['Lib_Sta'];
    }
}

