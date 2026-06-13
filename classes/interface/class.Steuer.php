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

class Steuer {

    public $Satz;
    
    
    public static function Undefined()
    {
    	  $steuer       = new Steuer();
    	  $steuer->Satz = -1;
        return $steuer;
    }
        
    public static function NoMwSt()
    {
    	  $steuer       = new Steuer();
    	  $steuer->Satz = 0;
        return $steuer;
    }
    
    public static function MwSt7() {
    
    	  $steuer       = new Steuer();
    	  $steuer->Satz = 7;
        return $steuer;
    }
    
    public static function MwSt8() {
    
    	  $steuer       = new Steuer();
    	  $steuer->Satz = 8;
        return $steuer;
    }
    
    public static function MwSt10() {
    
      	$steuer       = new Steuer();
      	$steuer->Satz = 10;
        return $steuer;
    }
    
    public static function MwSt10P7() {
    
      	$steuer       = new Steuer();
      	$steuer->Satz = 10.7;
       return $steuer;
    }
    
    public static function MwSt12() {
    
    	 $steuer       = new Steuer();
      	$steuer->Satz = 12;
       return $steuer;
    }
    
    public static function MwSt19() {
    
      	$steuer       = new Steuer();
      	$steuer->Satz = 19;
       return $steuer;
    }
    
    public static function MwSt20() {
    
      	$steuer       = new Steuer();
      	$steuer->Satz = 20;
        return $steuer;
    }
}
?> 