<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Entities;
/**
 * Description of Profil
 *
 * @author THOMSS
 */
class Profil {
    //put your code here

    private $id_Pro = null;
    private $Lib_Pro;

    function getid_Pro(): int
    {
        return $this->id_Pro;
    }

    function getLib_Pro(): string 
    {
        return $this->Lib_Pro;
    }

    function setid_Pro(int $id_Pro): self
    {
        if ($this->id_Pro == null){
            $this->id_Pro = ($tmp = filter_var($id_Pro, FILTER_VALIDATE_INT)) ? $tmp : null;
        }
        return $this;
    }

    function setLib_Pro(string $Lib_Pro): self
    {
        $this->Lib_Pro = $Lib_Pro;
        return $this;
    }

    function __construct(?array $datas = null)
    {
        $this->id_Pro = $datas['id_Pro'];
        $this->Lib_Pro = $datas['Lib_Pro'];
    }
}


