<?php
/**
 * #############################################################################
 * #                                                                           #
 * # copyright (c) 2014 marcos software, all rights reserved                   #
 * #                                                                           #
 * # this file may not be redistributed in whole or significant part           #
 * # and is subject to the marcos software license.                            #
 * #                                                                           #
 * # @author: marcos software - Marc Costea, <info@marcos-software.de>         #
 * # @copyright: 2014, marcos-software, http://www.marcos-software.de          #
 * #                                                                           #
 * #############################################################################
 */
 
class Kategorie extends MappingObject {

    private $_data                            = array();
    public  $OberKategorie;
    public  $Aktiv;
    public  $Name;
    public  $Beschreibung;
    public  $Layout;
    public  $SortierenNach;
    public  $Sichtbar;
    public  $Position;
    public  $MetaInfo;
    public  $Portalkategorie;
    public  $PortalkategorieName;
    public  $MappingShopkategorieName;
    public  $FunktionsAttribute               = array('key' => 'value');
    public  $Portal;
    public  $loadedValues                     = array();
        
    
    public function __construct($funktionsAttributeArr = array('key' => 'value')) {   	

        $this->Aktiv                          = true;
        $this->FunktionsAttribute             = $funktionsAttributeArr;
        $this->Name                           = '';
        $this->Beschreibung                   = '';
        $this->Layout                         = '';
        $this->SortierenNach                  = '';
        $this->Sichtbar                       = '';
        $this->Position                       = 0;
        $this->MetaInfo                       = '';
        $this->Portalkategorie                = '';
        $this->PortalkategorieName            = '';
        $this->MappingShopkategorieName       = '';
    } 
	      
    public function __set($name, $value) {             

        $this->_data[$name]  = $value;
    }
    
    public function __get($name) {
    
        switch ($name) {
        
            case 'Hash':
                return $this->CalcHash(array($this->Name, $this->Beschreibung, $this->Position, $this->MetaInfo));
                break;
            case 'ParentPortalcategory':
                return $this->FindParentPortalcategory($this);
                break;
            default:
                return (array_key_exists($name, $this->_data) ? $this->_data[$name] : (property_exists($this, $name) ? $this->$name : null));
        }
    } 
    
    public function __toString() {  
        
        return $this->Name;
    } 

    private function FindParentPortalcategory($k) {
        
        $portalCat = '';

        if ($this->HasContent($k->PortalkategorieName))
        {
            $portalCat = $k->PortalkategorieName;
        }
        else
        {
            if (!is_null($k->OberKategorie) && $k->OberKategorie->WawiId != 0)
            {
                $portalCat = $this->FindParentPortalcategory($k->OberKategorie);
            }
        }

        return $portalCat;        
    }
    
    private function HasContent($var) {
    
        if(!is_null($var) && !empty($var) && strlen(trim($var)) > 0) return true;
        return false;
    } 
        
    private function CalcHash($values) {
    
        $builder = '';
        
        foreach ($values as $value) $builder .= $value;
        
        $bytes = array();
        for($i = 0; $i < strlen($builder); $i++) array_push($bytes, md5(ord($builder[$i])));

        $builder = '';
        for($j = 0; $j < count($bytes); $j++) $builder .= bin2hex($bytes[$j]) . '-';
        $builder = '-' . substr($builder, 0, strlen($builder) - 1); 
        
        return $builder;
    }       
}     
?>