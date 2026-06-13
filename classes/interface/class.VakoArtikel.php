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
 
class VakoArtikel extends ArtikelBase {

    private $_data                            = array();
    public  $Eigenschaften                    = array();
 
        
    
    public function __construct($wawiId = -1, $eigenschaften = array()) {   	

        $this->Eigenschaften                  = $eigenschaften;
        $this->WawiId                         = $wawiId;
        
        foreach ($eigenschaften as $wertEigenschaft) array_push($this->ArtikelBilder, $wertEigenschaft->Wert->ArtikelBilder);   
    } 
    
    public function __set($name, $value) { 

        $this->_data[$name]  = $value;
    }
    
    public function __get($name) {
    
        switch ($name) {
        
            case 'Aktiv':
                return parent::Aktiv && !$this->GetAktiv();
                break;
            default:
                return (array_key_exists($name, $this->_data) ? $this->_data[$name] : (property_exists($this, $name) ? $this->$name : null));
        }
    } 
        
    private function GetAktiv() {

        foreach($this->Eigenschaften as $eigenschaft) if (!is_null($eigenschaft->Wert) && $eigenschaft->Wert->Aktiv) return true;
        return false;
    }
    
    public function __toString() {  
        
        $builder;
        $min                                  = strlen($this->Name);
        
        foreach ($this->Eigenschaften as $eigenschaft) $builder .= (strlen($builder) <= $min ? ' - '.$eigenschaft->Name.': '.$eigenschaft->Wert : ' / '.$eigenschaft->Name.': '.$eigenschaft->Wert);
        
        return $builder;
    }
}     
?>