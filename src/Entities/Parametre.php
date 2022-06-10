<?php

namespace Entities;

class Parametre 
{
    private $app_tel_3_ole;  
    private $vis_ent_3_ole; 
    private $app_tel_sta_3_ole;
    private $vis_ent_sta_3_ole;
    private $bil_2_3_ole;
    private $ent_aou_3_ole;
    private $app_tel_4_ole;
    private $bil_1_4_ole; 
    private $poi_mem_4_ole;
    private $bil_2_4_ole;
    private $ent_mai_4_ole;
    private $app_tel_5_ole;
    private $vis_ent_5_ole;
    private $ent_mar_5_ole;
    private $bil_2_5_ole;
    private $ent_jui_5_ole;
    private $ent_aout_5_ole;
    
    
    function getApp_tel_3_ole() : date 
    {
        return $this->App_tel_3_ole;
    }
    
    function getVis_ent_3_ole(): date 
    {
        return $this->vis_ent_3_ole;
    }
    
    function getApp_tel_sta_3_ole() : date 
    {
        return $this ->app_tel_sta_3_ole;
    }
    
    function getVis_ent_sta_3_ole() : date 
    {
        return $this->vis_ent_3_ole;
    }
    
    function getBil_2_3_ole() : date 
    {
        return $this-> bil_2_3_ole;
    }
    
    function getEnt_aou_3_ole() : date 
    {
        return $this-> ent_aou_3_ole;
    }
    
    function getApp_tel_4_ole() : date 
    {
        return $this-> app_tel_4_ole;
    }
    
    function getBil_1_4_ole() : date 
    {
        return $this-> bil_1_4_ole;
    }
    
    function getPoi_mem_4_ole() : date 
    {
        return $this-> poi_mem_4_ole;
    }
    
    function getBil_2_4_ole() : date 
    {
        return $this-> bil_2_4_ole;
    }
    
    function getEnt_mai_4_ole() : date 
    {
        return $this-> ent_mai_4_ole;
    }
    
    function getApp_tel_5_ole() : date 
    {
        return $this-> app_tel_5_ole; 
    }
    
    function getVis_ent_5_ole() : date 
    {
        return $this-> vis_ent_5_ole;
        
    }
    
    function getEnt_mar_5_ole() : date 
    {
        return $this-> ent_mar_5_ole;
    }
    
    function getBil_2_5_ole() : date 
    {
        return $this-> bil_2_5_ole;
    }
    
    function getEnt_jui_5_ole() : date 
    {
        return $this-> ent_jui_5_ole;
    }
    
    function getEnt_aout_5_ole() : date 
    {
        return $this-> ent_aout_5_ole;
    }
    
    function setApp_tel_3_ole()
    {
        $this->App_tel_3_ole = $App_tel_3_ole;
    }
    
    public function setVis_ent_3_ole()
    {
        $this->Vis_ent_3_ole = $Vis_ent_3_ole;
    }
    
    public function setApp_tel_sta_3_ole()
    {
        $this->App_tel_sta_3_ole = $App_tel_sta_3_ole;
    }
    
    public function setVis_ent_sta_3_ole()
    {
        $this->Vis_ent_sta_3_ole = $Vis_ent_sta_3_ole;
    }
    
    public function setBil_2_3_ole()
    {
        $this-> bil_2_3_ole = $bil_2_3_ole;
    }
    
    public function setEnt_aou_3_ole()
    {
        $this-> ent_aou_3_ole = $ent_aou_3_ole;
    }
    
    public function setApp_tel_4_ole()
    {
        $this->App_tel_4_ole = $App_tel_4_ole;
    }
    
    public function setPoi_mem_4_ole()
    {
        $this-> poi_mem_4_ole = $poi_mem_4_ole;
    }
    
    public function setBil_2_4_ole()
    {
        $this->bil_2_4_ole = $bil_2_4_ole; 
    }
    
    public function setEnt_mai_4_ole()
    {
        $this-> ent_mai_4_ole = $ent_mai_4_ole;
    }
    
    public function setApp_tel_5_ole()
    {
        $this-> app_tel_5_ole = $app_tel_5_ole;
    }
    
    public function setVis_ent_5_ole()
    {
        $this-> vis_ent_5_ole = $vis_ent_5_ole;
    }
    
    public function setEnt_mar_5_ole()
    {
        $this-> ent_mar_5_ole = $ent_mar_5_ole;
    }
    
    public function setBil_2_5_ole()
    {
        $this-> bil_2_5_ole = $bil_2_5_ole;
    }
    
    public function setEnt_jui_5_ole()
    {
        $this-> ent_jui_5_ole = $ent_jui_5_ole;
    }
    
    public function setEnt_aout_5_ole()
    {
        $this->Ent_aout_5_ole = $Ent_aout_5_ole;
    }
    
     function __construct($app_tel_3_ole, $vis_ent_3_ole, $app_tel_sta_3_ole, $vis_ent_sta_3_ole, $bil_2_3_ole, $ent_aou_3_ole, $app_tel_4_ole, $poi_mem_4_ole, $bil_2_4_ole, $ent_mai_4_ole, $app_tel_5_ole, $vis_ent_5_ole, $ent_mar_5_ole, $bil_2_5_ole, $ent_jui_5_ole, $ent_aout_5_ole)
    {
        $this->app_tel_3_ole = $app_tel_3_ole;
        $this->vis_ent_3_ole = $vis_ent_3_ole;
        $this->app_tel_sta_3_ole = $app_tel_sta_3_ole;
        $this->vis_ent_sta_3_ole = $vis_ent_sta_3_ole;
        $this->bil_2_3_ole = $bil_2_3_ole;
        $this->ent_aou_3_ole = $ent_aou_3_ole;
        $this->app_tel_4_ole = $app_tel_4_ole;
        $this->poi_mem_4_ole = $poi_mem_4_ole;
        $this->bil_2_4_ole = $bil_2_4_ole;
        $this->ent_mai_4_ole = $ent_mai_4_ole;
        $this->app_tel_5_ole = $app_tel_5_ole;
        $this->vis_ent_5_ole = $vis_ent_5_ole;
        $this->ent_mar_5_ole = $ent_mar_5_ole;
        $this->bil_2_5_ole = $bil_2_5_ole;
        $this->ent_jui_5_ole = $ent_jui_5_ole;
        $this->ent_aout_5_ole = $ent_aout_5_ole;
        
        
        
                
                
                
              
        
    }
    
}