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
 
class Bestellung extends MappingObject {
    
    public $Status;
    public $Rechnungsnummer;
    public $Waehrung;
    public $Zahlungsart;
    public $ZahlungsartIstLastschrift;
    public $ZahlungsartIstKreditkarte;
    public $ZahlungDaten;
    public $Versandkosten;
    public $VersandDienstleister;
    public $Gesammtkosten;
    public $Bestelldatum;
    public $Lieferdatum;
    public $Kunde;
    public $Lieferanschrift;          
    public $Artikel                      = array();
    public $Kundenbemerkung;
    public $Händlerbemerkung;
    public $Gutscheine                   = array();
    public $Value;
    public $Send;
    public $Paid;
    public $Canceled;
    public $Finished;
    public $Statistic;
    public $Sendings;
    
    public function __construct() {   
    
 	 		  $this->ZahlungsartIstLastschrift = false;
 	 		  $this->ZahlungsartIstKreditkarte = false;
 	 		  $this->ZahlungDaten              = new ZahlungDaten();
 	 		  $this->Versandkosten             = 0.00;
 	 		  $this->Gesammtkosten             = 0.00;
 	 		  $this->Kunde                     = new Kunde();
 	 		  $this->Lieferanschrift           = new Anschrift();
 	 		  $this->Value                     = 0.00;
 	 		  $this->Send                      = false;
 	 		  $this->Paid                      = false;
 	 		  $this->Canceled                  = false;
 	 		  $this->Finished                  = false;
 	 		  $this->Statistic                 = false;
    } 
	  
    public function __toString() {  
          
        return implode(' ', array($this->WawiId, $this->ShopId, $this->Rechnungsnummer, '{', implode(',', $this->Artikel), '}'));
    }      
}     
?>