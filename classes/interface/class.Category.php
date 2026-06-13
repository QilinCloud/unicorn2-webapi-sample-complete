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
 
class Category {

    public $Id = -1;
    public $Name;
    public $Subcategories = array();    
    
    public function __construct($category = null) {   	

        if(!is_null($category)) {
        
            $this->Id   = $category->Id;
            $this->Name = $category->Name;

            foreach($category->Subcategories as $sub) {
            
                array_push($this->Subcategories, new Category($sub));            
            }
        } 
    } 
    
    public function addSubcategory($category) {
    
        array_push($this->Subcategories, new Category($category));  
    }  	  
}     
?>