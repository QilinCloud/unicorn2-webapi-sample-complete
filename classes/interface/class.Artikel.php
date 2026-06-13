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
 
class Artikel extends ArtikelBase {

    private $_data                            = array(); 
    public  $FunktionsAttribute               = array();
    public  $ArtikelQuerverkaufe              = array();
    public  $ArtikelAttribute                 = array();
    public  $ArtikelMerkmale                  = array();
    public  $Kategorien                       = array();
    public  $KundenGruppen                    = array();
    public  $Menge;
    public  $GesammtPreis;
    public  $Hersteller;
    public  $StockPolicy;
    public  $MindestBestellMenge;
    public  $Staffelung;
    public  $MwSt;
    public  $Homepage;
    public  $Beschreibung;
    public  $KurzBeschreibung;
    public  $Anmerkung;
    public  $ArtikelGewicht;
    public  $Suchbegriffe;
    public  $EAMapping;
    public  $Unverkaeuflich;
    public  $ErscheinungsDatum;
    public  $OrderItemId;
    public  $Hinweis;
    public  $Portal;
    public  $VakoArtikel                      = array();      
    public  $EigenschaftenNamen               = array();  
    public  $FreitextEigenschaften            = array(); 
        
    
    public function __construct() {   	

        $this->Init(null);
        $this->Menge                          = 0;
        $this->GesammtPreis                   = 0.00;
        $this->Hersteller                     = new Hersteller();
        $this->StockPolicy                    = false;
        $this->MindestBestellMenge            = 0.00;
        $this->Staffelung                     = 0.00;
        $this->MwSt                           = Steuer::Undefined();
        $this->Homepage                       = false;
        $this->ArtikelGewicht                 = 0.00;
        $this->Unverkaeuflich                 = false;
        $this->Portal                         = new PortalCategory();
    } 
	  
    public function Init($artikel) {
	  
	      if(!is_null($artikel)) $this->Init($this->Cast('ArtikelBase'), $artikel);   
        
        if(!is_null($artikel)) {
        
            $this->FunktionsAttribute         = $artikel->FunktionsAttribute;
            $this->ArtikelQuerverkaufe        = $artikel->ArtikelQuerverkaufe;
            $this->ArtikelAttribute           = $artikel->ArtikelAttribute;
            $this->ArtikelMerkmale            = $artikel->ArtikelMerkmale;
            $this->Kategorien                 = $artikel->Kategorien;
            $this->KundenGruppen              = $artikel->KundenGruppen;
            
            $this->Menge                      = $artikel->Menge;
            $this->GesammtPreis               = $artikel->Menge * $artikel->Preis;
            $this->Hersteller                 = $artikel->Hersteller;
            $this->StockPolicy                = $artikel->StockPolicy;
            $this->MindestBestellMenge        = $artikel->MindestBestellMenge;
            $this->Staffelung                 = $artikel->Staffelung;
            $this->MwSt                       = $artikel->MwSt;
            $this->Homepage                   = $artikel->Homepage;
            $this->Beschreibung               = $artikel->Beschreibung;
            $this->KurzBeschreibung           = $artikel->KurzBeschreibung;
            $this->Anmerkung                  = $artikel->Anmerkung;
            $this->ArtikelGewicht             = $artikel->ArtikelGewicht;
            $this->Suchbegriffe               = $artikel->Suchbegriffe;
            $this->EAMapping                  = $artikel->EAMapping;
            $this->Unverkaeuflich             = $artikel->Unverkaeuflich;
            $this->OrderItemId                = $artikel->OrderItemId;
            $this->PortalId                   = $artikel->PortalId;
            $this->PortalName                 = $artikel->PortalName;
            $this->Portal                     = $artikel->Portal;
            $this->Hinweis                    = $artikel->Hinweis;  
        }else {
        
            $this->PortalName                 = '';
            $this->StockPolicy                = true;
            $this->MwSt                       = Steuer::Undefined();                    
            $this->Beschreibung               = 'Beschreibung folgt...';
            $this->KurzBeschreibung           = 'Kurzbeschreibung folgt...';
            $this->FunktionsAttribute         = array('key' => 'value');
            $this->ArtikelQuerverkaufe        = array();
            $this->ArtikelAttribute           = array();
            $this->ArtikelMerkmale            = array();
            $this->Kategorien                 = array();
            $this->KundenGruppen              = array();
            $this->PortalId                   = '';
            $this->PortalName                 = '';
            $this->Hinweis                    = ''; 
            
            $hersteller                       = new Hersteller();
            $hersteller->WawiId               = -1;
            
            $this->Hersteller                 = $hersteller;             
        } 
    }
    
    public function __set($name, $value) { 
           
        switch ($name) {
        
            case 'PortalId':
                $this->Portal->ID             = $value;
                break;
            case 'PortalName':
                $this->Portal->Category->Name = $value;
                break;
            default:
                $this->_data[$name]  = $value;
        }
    }
    
    public function __get($name) {
    
        switch ($name) {
        
            case 'PortalId':
                return $this->Portal->ID;
                break;
            case 'PortalName':
                return $this->Portal->Category->Name;
                break;
            case 'IsVako':
                return (count($this->EigenschaftenNamen) > 0 || count($this->VakoArtikel) > 0);
                break;
            case 'VariantDefinitionHash':
                return $this->GetVariantDefinitionHash();
                break;
            case 'HasPrice':
                return $this->GetHasPrice();
                break;
            default:
                return (array_key_exists($name, $this->_data) ? $this->_data[$name] : (property_exists($this, $name) ? $this->$name : null));
        }
    } 
    
    public function __toString() {  
        
        $builder;
        
        if($this->IsVako) {
        
            $first = true;
            $builder .= '(';
            
            foreach ($this->EigenschaftenNamen as $value) {
            
                if (!$first) $builder .= '; ';
                $builder .= $value->Name;
                if ($first) $first = false;
            }
  
            $builder .= ')';
        
        }else{
        
            $builder .= 'Artikel ';
            $builder .= $this->Name;        
        }       
        
        return $builder;
    }  
    
    private function GetHasPrice() {
    
        if ($this->Preis > 0 || $this->PreisReduziert > 0) return true;

        foreach($this->VakoArtikel as $vako) if ($vako->Preis > 0 || $vako->PreisReduziert > 0) return true;
        return false;
    }
    
    private function GetVariantDefinitionHash() {
    
        $hash = null;
        
        if (count($this->EigenschaftenNamen) > 0) {
        
            $nameArray = array();

            for ($i = 0; $i < count($this->EigenschaftenNamen); $i++) array_push($nameArray, $this->EigenschaftenNamen[$i]->Name . '!');

            $hash = $this->CalcHash($nameArray);
        }    
        return $hash;
    } 
    
    private function CalcHash($values) {
    
        $builder = '';
        
        foreach ($values as $value) $builder .= $value;
        
        $bytes = array();
        for($i = 0; $i < strlen($builder); $i++) array_push($bytes, md5(ord($builder[$i])));

        $builder = '';
        for($j = 0; $j < count($bytes); $j++) $builder .= bin2hex($bytes[$j]) . '-';
        $builder = '-' . substr($builder, 0, strlen($builder) - 1); 
        
        return $builder;
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