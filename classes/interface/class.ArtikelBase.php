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
 
class ArtikelBase extends MappingObject {

    private $_data                            = array();
    public  $AktivWawi                        = false;
    public  $AktivAttribut                    = false;
    public  $AktivFilter                      = false;
    public  $AktivUser                        = false;
    public  $AktivWawiSet                     = false;
    public  $AktivAttributSet                 = false;
    public  $AktivFilterSet                   = false;
    public  $AktivUserSet                     = false;    
    public  $SchreibschutzAttribut            = false;
    public  $SchreibschutzFilter              = false; 
    public  $SchreibschutzUser                = false; 
    public  $SchreibschutzAttributSet         = false; 
    public  $SchreibschutzFilterSet           = false; 
    public  $SchreibschutzUserSet             = false;      
    public  $Name;
    public  $InternalSchreibschutz            = false;
    public  $ArtikelNummer;
    public  $Preis                            = 0.00;
    public  $PreisReduziert                   = 0.00;
    public  $PreisUvp                         = 0.00;
    public  $Isbn;
    public  $Ean;
    public  $Mpn;
    public  $Asin;
    public  $Grundpreis;
    public  $Lagerbestand                     = 0.00;
    public  $LagerAktiv                       = false;
    public  $VersandKlasse                    = false;
    public  $Lieferzeit                       = 0;
    public  $ArtikelBilder;
    public  $ArtikelLinks;
    public  $LastCheck;
    public  $LastChange;
    public  $KundenGruppe                     = array();
    public  $SupportedLanguages               = array();
    public  $SupportedWaehrungen              = array();
    public  $loadedValues                     = array();
    
    public function __construct() {   	

        $this->AktivWawi                      = false;
        $this->AktivAttribut                  = false;
        $this->AktivFilter                    = false;
        $this->AktivUser                      = false;
        $this->AktivWawiSet                   = false;
        $this->AktivAttributSet               = false;
        $this->AktivFilterSet                 = false;
        $this->AktivUserSet                   = false;        
        $this->SchreibschutzAttribut          = false;
        $this->SchreibschutzFilter            = false;
        $this->SchreibschutzUser              = false;
        $this->SchreibschutzAttributSet       = false;
        $this->SchreibschutzFilterSet         = false;
        $this->SchreibschutzUserSet           = false;        
        $this->InternalSchreibschutz          = false;
        $this->Preis                          = 0.00;
        $this->PreisReduziert                 = 0.00;
        $this->PreisUvp                       = 0.00;
        $this->Grundpreis                     = new Grundpreis();
        $this->Lagerbestand                   = 0.00;
        $this->LagerAktiv                     = false;
        $this->VersandKlasse                  = false;
        $this->Lieferzeit                     = 0;
        
        $this->Init(null);              
    }     
  
    public function __set($name, $value) { 
           
        switch ($name) {
        
            case 'AktivState':
                $this->SetAktivState($value);
                break;
            case 'UserAktiv':
                $this->AktivUser              = $value;
                $this->AktivUserSet           = true;
                break;
            case 'UserInAktiv':
                $this->AktivUser              = !$value;
                $this->AktivUserSet           = true;
                break;
            case 'UserSchreibschutzAktiv':
                $this->SchreibschutzUser      = $value;
                $this->SchreibschutzUserSet   = true;
                break;
            case 'UserSchreibschutzInAktiv':
                $this->SchreibschutzUser      = !$value;
                $this->SchreibschutzUserSet   = true;
                break;
            default:
                $this->_data[$name]            = $value;
        }
    }
    
    public function __get($name) {
    
        switch ($name) {
        
            case 'Aktiv':
                return ($this->AktivUserSet ? $this->AktivUser : $this->AktivDynamic);
                break;
            case 'AktivDynamic':
                return ($this->AktivFilterSet ? $this->AktivFilter : ($this->AktivAttributSet ? $this->AktivAttribut : ($this->AktivWawiSet ? $this->AktivWawi : true)));
                break;    
            case 'AktivState':
                return ($this->AktivUserSet ? ($this->AktivUser ? AktivStates::Aktiv : AktivStates::Inaktiv) : ($this->AktivDynamic ? AktivStates::Aktiv : AktivStates::Inaktiv));
                break; 
            case 'UserAktiv':
                return $this->AktivUserSet && $this->AktivUser;
                break;   
            case 'UserInAktiv':
                return $this->AktivUserSet && !$this->AktivUser;
                break;   
            case 'Schreibschutz':
                return ($this->SchreibschutzUserSet ? $this->SchreibschutzUser : ($this->SchreibschutzFilterSet ? $this->SchreibschutzFilter : ($this->SchreibschutzAttributSet ? $this->SchreibschutzAttribut : false)));
                break; 
            case 'UserSchreibschutzAktiv':
                return $this->SchreibschutzUserSet && $this->SchreibschutzUser;
                break;  
            case 'UserSchreibschutzInAktiv':
                return $this->SchreibschutzUserSet && !$this->SchreibschutzUser;
                break;   
            default:
                return (array_key_exists($name, $this->_data) ? $this->_data[$name] : (property_exists($this, $name) ? $this->$name : null));
        }
    } 
    
    public function Init($artikelBase) {
	  
	      if(!is_null($artikelBase)) $this->Init($this->Cast('MappingObject'), $artikelBase);   
        
        if(!is_null($artikelBase)) {
        
            $this->AktivWawi                  = $artikelBase->AktivWawi;
            $this->AktivAttribut              = $artikelBase->AktivAttribut;
            $this->AktivFilter                = $artikelBase->AktivFilter;
            $this->AktivUser                  = $artikelBase->AktivUser;
            $this->SchreibschutzAttribut      = $artikelBase->SchreibschutzAttribut;
            $this->SchreibschutzFilter        = $artikelBase->SchreibschutzFilter;
            $this->SchreibschutzUser          = $artikelBase->SchreibschutzUser;
            $this->Name                       = $artikelBase->Name;
            $this->ArtikelNummer              = $artikelBase->ArtikelNummer;
            $this->Preis                      = $artikelBase->Preis;
            $this->PreisReduziert             = $artikelBase->PreisReduziert;
            $this->PreisUvp                   = $artikelBase->PreisUvp;
            $this->Isbn                       = $artikelBase->Isbn;
            $this->Ean                        = $artikelBase->Ean;
            $this->Mpn                        = $artikelBase->Mpn;
            $this->Asin                       = $artikelBase->Asin;
            $this->Grundpreis                 = $artikelBase->Grundpreis;
            $this->Lagerbestand               = $artikelBase->Lagerbestand;
            $this->LagerAktiv                 = $artikelBase->LagerAktiv;
            $this->Lieferzeit                 = $artikelBase->Lieferzeit; 
            $this->LastCheck                  = $artikelBase->LastCheck;
            $this->LastChange                 = $artikelBase->LastChange;
            $this->KundenGruppe               = $artikelBase->KundenGruppe;
            $this->InternalSchreibschutz      = $artikelBase->InternalSchreibschutz;
            $this->SupportedLanguages         = $artikelBase->SupportedLanguages;
            $this->SupportedWaehrungen        = $artikelBase->SupportedWaehrungen;
            
            array_push($this->ArtikelBilder,  $artikelBase->ArtikelBilder);
            array_push($this->ArtikelLinks,   $artikelBase->ArtikelLinks);            
        }else {
        
            $this->Preis                      = 0;
            $this->ArtikelNummer              = '';
            $this->Name                       = $this->ShopId . 'Name folgt...';
            $this->ArtikelBilder              = array();
            $this->ArtikelLinks               = array();
            $this->KundenGruppe               = array();
            $this->VersandKlasse              = 0;
            $this->SupportedLanguages         = array();
            $this->SupportedWaehrungen        = array();  
        } 
    }
    
    private function SetAktivState($value) {
    
        switch ($value) {
        
            case AktivStates::Aktiv:
                $this->AktivUser              = true;
                $this->AktivUserSet           = true;
                break;
            case AktivStates::Inaktiv:
                $this->AktivUser              = false;
                $this->AktivUserSet           = true;
                break;
            case AktivStates::PermanentAktiv:
                $this->AktivFilter            = true;
                $this->AktivFilterSet         = true;
                break;
            case AktivStates::PermanentInaktiv:
                $this->AktivFilter            = false;
                $this->AktivFilterSet         = true;
                break;
        }  
    } 
    
    private function Cast($destination, $sourceObject) {
        
        if (is_string($destination)) {
        
            $destination                      = new $destination();
        }
        
        $sourceReflection                     = new ReflectionObject($sourceObject);
        $destinationReflection                = new ReflectionObject($destination);
        $sourceProperties                     = $sourceReflection->getProperties();
        
        foreach ($sourceProperties as $sourceProperty) {
        
            $sourceProperty->setAccessible(true);
            $name = $sourceProperty->getName();
            $value = $sourceProperty->getValue($sourceObject);
            
            if ($destinationReflection->hasProperty($name)) {
            
                $propDest                     = $destinationReflection->getProperty($name);
                $propDest->setAccessible(true);
                $propDest->setValue($destination,$value);
            } else {
            
                $destination->$name           = $value;
            }
        }
        return $destination;
    }        
}     
?>