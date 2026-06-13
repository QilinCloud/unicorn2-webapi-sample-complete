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
 
class ArtikelBild extends MappingObject {

    public $TimeStamp;
    public $Url;
    public $Image           = array();
    public $DefaultImage;
    public $AutoVisible;
    public $Beschreibung;
    public $LastCheck;
    public $LastChange;
    public $Size;    
    
    public function __construct() {   	

        $this->DefaultImage = false;
        $this->AutoVisible  = false;        
        $this->Size         = 0;            
    }      
}     
?>