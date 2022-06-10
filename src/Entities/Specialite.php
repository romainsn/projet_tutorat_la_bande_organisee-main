<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Entities;
/**
 * Description of Specialite
 *
 * @author THOMSS
 */
class Specialite {
    //put your code here

    private $id_Spe = null;
    private $Lib_Spe;
  

    function getid_Spe(): int
    {
        return $this->id_Spe;
    }

    function getLib_Spe(): string 
    {
        return $this->Lib_Spe;
    }


    function setid_Spe(int $id_Spe): self
    {
        if ($this->id_Spe == null){
            $this->id_Spe = ($tmp = filter_var($id_Spe, FILTER_VALIDATE_INT)) ? $tmp : null;
        }
        return $this;
    }

    function setLib_Spe(string $Lib_Spe): self
    {
        $this->Lib_Spe = $Lib_Spe;
        return $this;
    }

    function __construct(?array $datas = null)
    {
        $this->id_Spe = $datas['id_Spe'];
        $this->Lib_Spe = $datas['Lib_Spe'];
    }
}

