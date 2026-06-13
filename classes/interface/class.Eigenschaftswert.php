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
 
class Eigenschaftswert extends WawiObject {

    public $Aktiv;
    public $Wert;
    public $Aufpreis;
    public $ArtNr;
    public $Lagerbestand;
    public $Ean;
    public $ArtikelBilder   = array();
        
    
    public function __construct($wawiIdd = -1, $name = null) {   	

        $this->Aktiv        = false;
        $this->Aufpreis     = 0.00;
        $this->Lagerbestand = 0.00; 
        
        $this->WawiId       = $wawiIdd;
        $this->Wert         = $name;       
    } 

    public function __toString() {  
        
        return (!is_null($this->Wert) ? $this->Wert : '[' . $this->WawiId . ']');
    }   
}     
?>