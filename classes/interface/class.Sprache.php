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

class Sprache extends WawiObject{

    public $Name;
    public $Iso;
    public $Iso2;
    public $Standard     = false;
        
    public static function Daenisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 1;
      	$sprache->Name   = 'Dänisch';
      	$sprache->Iso    = 'dan';
      	$sprache->Iso2   = 'da';
      	
        return $sprache;
    } 
    
    public static function Deutsch() {
    
      	$sprache           = new Sprache();
      	
      	$sprache->WawiId   = 2;
      	$sprache->Name     = 'Deutsch';
      	$sprache->Iso      = 'ger';
      	$sprache->Iso2     = 'de';
      	$sprache->Standard = true;
        return $sprache;
    } 
    
    public static function Englisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 3;
      	$sprache->Name   = 'Englisch';
      	$sprache->Iso    = 'eng';
      	$sprache->Iso2   = 'en';
      	
        return $sprache;
    } 
    
    public static function Finnisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 4;
      	$sprache->Name   = 'Finnisch';
      	$sprache->Iso    = 'fin';
      	$sprache->Iso2   = 'fi';
      	
        return $sprache;
    } 
    
    public static function Franzoesisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 5;
      	$sprache->Name   = 'Französisch';
      	$sprache->Iso    = 'fre';
      	$sprache->Iso2   = 'fr';
      	
        return $sprache;
    } 
    
    public static function Georgisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 6;
      	$sprache->Name   = 'Georgisch';
      	$sprache->Iso    = 'geo';
      	$sprache->Iso2   = 'ka';
      	
        return $sprache;
    } 
    
    public static function Griechisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 7;
      	$sprache->Name   = 'Griechisch';
      	$sprache->Iso    = 'gre';
      	$sprache->Iso2   = 'el';
      	
        return $sprache;
    } 
    
    public static function Irisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 8;
      	$sprache->Name   = 'Irisch';
      	$sprache->Iso    = 'gle';
      	$sprache->Iso2   = 'ga';
      	
        return $sprache;
    } 
    
    public static function Islaendisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 9;
      	$sprache->Name   = 'Isländisch';
      	$sprache->Iso    = 'ice';
      	$sprache->Iso2   = 'is';
      	
        return $sprache;
    } 
    
    public static function Italienisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 10;
      	$sprache->Name   = 'Italienisch';
      	$sprache->Iso    = 'ita';
      	$sprache->Iso2   = 'it';
      	
        return $sprache;
    } 
    
    public static function Kroatisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 11;
      	$sprache->Name   = 'Kroatisch';
      	$sprache->Iso    = 'scr';
      	$sprache->Iso2   = 'hr';
      	
        return $sprache;
    } 
    
    public static function Niederlaendisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 12;
      	$sprache->Name   = 'Niederländisch';
      	$sprache->Iso    = 'dut';
      	$sprache->Iso2   = 'nl';
      	
        return $sprache;
    } 
    
    public static function Norwegisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 13;
      	$sprache->Name   = 'Norwegisch';
      	$sprache->Iso    = 'nor';
      	$sprache->Iso2   = 'no';
      	
        return $sprache;
    } 
    
    public static function Polnisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 14;
      	$sprache->Name   = 'Polnisch';
      	$sprache->Iso    = 'pol';
      	$sprache->Iso2   = 'pl';
      	
        return $sprache;
    } 
    
    public static function Portugiesisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 15;
      	$sprache->Name   = 'Portugiesisch';
      	$sprache->Iso    = 'por';
      	$sprache->Iso2   = 'pt';
      	
        return $sprache;
    } 
    
    public static function Russisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 16;
      	$sprache->Name   = 'Russisch';
      	$sprache->Iso    = 'rus';
      	$sprache->Iso2   = 'ru';
      	
        return $sprache;
    } 
    
    public static function Schwedisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 17;
      	$sprache->Name   = 'Schwedisch';
      	$sprache->Iso    = 'swe';
      	$sprache->Iso2   = 'sv';
      	
        return $sprache;
    } 
    
    public static function Slowakisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 18;
      	$sprache->Name   = 'Slowakisch';
      	$sprache->Iso    = 'slo';
      	$sprache->Iso2   = 'sk';
      	
        return $sprache;
    } 
    
    public static function Slowenisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 19;
      	$sprache->Name   = 'Slowenisch';
      	$sprache->Iso    = 'slv';
      	$sprache->Iso2   = 'sl';
      	
        return $sprache;
    } 
    
    public static function Spanisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 20;
      	$sprache->Name   = 'Spanisch';
      	$sprache->Iso    = 'spa';
      	$sprache->Iso2   = 'es';
      	
        return $sprache;
    } 
    
    public static function Tschechisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 21;
      	$sprache->Name   = 'Tschechisch';
      	$sprache->Iso    = 'cze';
      	$sprache->Iso2   = 'cs';
      	
        return $sprache;
    } 
    
    public static function Tuerkisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 22;
      	$sprache->Name   = 'Türkisch';
      	$sprache->Iso    = 'tur';
      	$sprache->Iso2   = 'tr';
      	
        return $sprache;
    } 
    
    public static function Ukrainisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 23;
      	$sprache->Name   = 'Ukrainisch';
      	$sprache->Iso    = 'ukr';
      	$sprache->Iso2   = 'uk';
      	
        return $sprache;
    } 
    
    public static function Ungarisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 24;
      	$sprache->Name   = 'Ungarisch';
      	$sprache->Iso    = 'hun';
      	$sprache->Iso2   = 'hu';
      	
        return $sprache;
    } 
    
    public static function Weissrussisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 25;
      	$sprache->Name   = 'Weißrussisch';
      	$sprache->Iso    = 'bel';
      	$sprache->Iso2   = 'be';
      	
        return $sprache;
    } 
    
    public static function Rumaenisch() {
    
      	$sprache         = new Sprache();
      	
      	$sprache->WawiId = 26;
      	$sprache->Name   = 'Rumänisch';
      	$sprache->Iso    = 'rum';
      	$sprache->Iso2   = 'ro';
      	
        return $sprache;
    }        
}
?> 