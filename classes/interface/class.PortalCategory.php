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
 
class PortalCategory {

    public $Marketplace;
    public $ID;
    public $Category;    
    
    public function __construct($marketplaceStr = '', $portalCategory = null) {   	

        $this->Marketplace     = $marketplaceStr;

        if(!is_null($portalCategory)) {
        
            $this->Marketplace = $portalCategory->Marketplace;
            $this->ID          = $portalCategory->ID;

            if (!is_null($portalCategory->Category)) $this->Category = new Category($portalCategory->Category);
        } 
    }   	  
}     
?>