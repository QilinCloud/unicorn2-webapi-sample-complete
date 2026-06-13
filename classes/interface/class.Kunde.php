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
 
class Kunde extends Anschrift {
    
    private $_data          = array();
    public  $Kundennummer;  
    public  $Geburtstag;  
    public  $UStId;  
    
    public function __set($name, $value) { 
           
        $this->_data[$name] = $value;
    }
    
    public function __get($name) {
    
        switch ($name) {
        
            case 'GuiName':
                return $this->GetGuiName();
                break;
            default:
                return (array_key_exists($name, $this->_data) ? $this->_data[$name] : (property_exists($this, $name) ? $this->$name : null));
        }
    }
    
    private function GetGuiName() {
    
        $GuiName;
        
        if($this->HasContent($this->Vorname)) $GuiName = substr($this->Vorname, 0, 1 ) . '. ';        
        $GuiName .= $this->Nachname;        
        if($this->HasContent($this->Firma)) $GuiName .= ' (' . $this->Firma . ') ';
        
        return $GuiName;    
    }   
    
    private function HasContent($var) {
    
        if(!is_null($var) && !empty($var) && strlen(trim($var)) > 0) return true;
        return false;
    } 
}     
?>