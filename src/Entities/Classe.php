<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Entities;
/**
 * Description of Classe
 *
 * @author THOMSS
 */
class Classe {
    //put your code here

    private $id_Cla = null;
    private $Lib_Cla;

    function getid_Cla(): int
    {
        return $this->id_Cla;
    }

    function getLib_Cla(): string 
    {
        return $this->Lib_Cla;
    }

    function setid_Cla(int $id_Cla): self
    {
        if ($this->id_Cla == null){
            $this->id_Cla = ($tmp = filter_var($id_Cla, FILTER_VALIDATE_INT)) ? $tmp : null;
        }
        return $this;
    }

    function setLib_Cla(string $Lib_Cla): self
    {
        $this->Lib_Cla = $Lib_Cla;
        return $this;
    }

    function __construct(?array $datas = null)
    {
        $this->id_Cla = $datas['id_Cla'];
        $this->Lib_Cla = $datas['Lib_Cla'];
    }
}


