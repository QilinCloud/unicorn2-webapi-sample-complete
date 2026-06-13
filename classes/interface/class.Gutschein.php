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
 
class Gutschein {
    
    public $GutscheinNummer;  
    public $Rabatt;  
    public $Code;  
    public $Bemerkung;  
    
    public function __construct() {   	

        $this->Rabatt = 0.00;     	 		  
    } 
	  
    public function __toString() {  
          
        $builder;
        
        $builder .= 'Gutschein';
        $builder .= ' ';
        $builder .= $this->GutscheinNummer;
        $builder .= ' ';
        $builder .= '(';
        $builder .= $this->Code;
        $builder .= ')';
        $builder .= ' ';
        $builder .= $this->Rabatt;
        $builder .= ' ';
        $builder .= $this->Bemerkung;
        
        return $builder;
    }        
}     
?>