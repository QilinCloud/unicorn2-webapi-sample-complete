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
 
class WertEigenschaft extends EigenschaftBase {

    public $Wert;

    public function __construct($eigenschaft = null, $wertEW = null) {   	

        $this->Wert       = new Eigenschaftswert();
        
        if(!is_null($eigenschaft)) {
        
            $this->WawiId = $eigenschaft->WawiId; 
            $this->Name   = $eigenschaft->Name;
        }

        if(!is_null($wertEW)) {
        
            $this->Wert   = $wertEW; 
        }
        
        if(is_null($this->WawiId)) $this->WawiId = -1;
    } 
    
    public function __toString() {  
        
        return (!is_null($this->Name) ? $this->Name : '[' . $this->WawiId . ']') . '=' . $this->Wert;
    }    
}     
?>