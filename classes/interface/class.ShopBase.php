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
 
class ShopBase {
    
    public $Id;  
    public $Marketplace;  
    public $Name;  

    public function __construct() {   	

    		$this->Id = 0;
    } 
	  
    public function __toString() {  
          
        return $this->Name . ' (' . $this->Id . ',' . $this->Marketplace . ')'; 
    }       
}     
?>