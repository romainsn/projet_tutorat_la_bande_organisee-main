<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Entities;

class Numero_Bilan {
    //put your code here

    private $Num_Bil = null;
    private $Lib_Bil;

    function getNum_Bil(): int
    {
        return $this->Num_Bil;
    }

    function getLib_Bil(): string 
    {
        return $this->Lib_Bil;
    }

    function setNum_Bil(int $Num_Bil): self
    {
        if ($this->Num_Bil == null){
            $this->Num_Bil = ($tmp = filter_var($Num_Bil, FILTER_VALIDATE_INT)) ? $tmp : null;
        }
        return $this;
    }

    function setLib_Bil(string $Lib_Bil): self
    {
        $this->Lib_Bil = $Lib_Bil;
        return $this;
    }

    function __construct(?array $datas = null)
    {
        $this->Num_Bil = $datas['Num_Bil'];
        $this->Lib_Bil = $datas['Lib_Bil'];
    }
}


