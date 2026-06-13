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
 
class Anschrift {
    
    public $Firma;  
    public $FirmenZusatz;
    public $Titel;
    public $Anrede;  
    public $Vorname;  
    public $Nachname;  
    public $Geschlecht;
    public $Zhd;
    public $Telefon; 
    public $Mobil;
    public $Fax;
    public $Email;  
    public $Adresse; 
    
    public function __construct() {   	
     
    		$this->Adresse = new Adresse(); 	 		  
    } 
	  
    public function __toString() {  
          
        $builder;
        
        $builder .= $this->Anrede;
        $builder .= ' ';
        $builder .= $this->Vorname;
        $builder .= ' ';
        $builder .= $this->Nachname;
        $builder .= '(';
        $builder .= $this->Geschlecht;
        $builder .= ')';
        $builder .= ' ';
        $builder .= $this->Telefon;
        $builder .= ' ';
        $builder .= $this->Email;
        $builder .= ' ';
        $builder .= $this->Adresse;
        
        return $builder;
    }        
}     
?>