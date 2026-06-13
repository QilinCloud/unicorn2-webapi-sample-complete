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
 
class Adresse {
    
    public $Straße;  
    public $Hausnummer;  
    public $Anmerkung;  
    public $Ort;  
    public $PLZ;  
    public $Bundesland;  
    public $Land;  
	  
    public function __toString() {  
          
        $builder;
        
        $builder .= $this->Straße;
        $builder .= ' ';
        $builder .= $this->Hausnummer;
        $builder .= ' ';
        $builder .= 'in';
        $builder .= ' ';
        $builder .= $this->PLZ;
        $builder .= ' ';
        $builder .= $this->Ort;
        $builder .= ' ';
        $builder .= '(';
        $builder .= $this->Land;
        $builder .= ')';
        
        return $builder;
    }     
    
}     
?>