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

class Land {

    public $Iso2;
    public $Deutsch;
    public $Englisch;
    public $Eu              = false;
    public $Kontinent;
    public $Franzoesisch;
    public $Iso3;
    public $Englisch2;
    public $Englisch3;
    public $Vorwahl;

    public static function AD() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'AD';
        $land->Deutsch      = 'Andorra';
        $land->Englisch     = 'Andorra';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Andorre';
        $land->Iso3         = 'AND';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00376';
      	
        return $land;
    } 

    public static function AE() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'AE';
        $land->Deutsch      = 'Vereinigte Arabische Emirate';
        $land->Englisch     = 'United Arab Emirates';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Émirats arabes';
        $land->Iso3         = 'ARE';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00971';
      	
        return $land;
    } 

    public static function AF() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'AF';
        $land->Deutsch      = 'Afghanistan';
        $land->Englisch     = 'Afghanistan';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Afghanistan';
        $land->Iso3         = 'AFG';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0093';
      	
        return $land;
    } 

    public static function AG() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'AG';
        $land->Deutsch      = 'Antigua und Barbuda';
        $land->Englisch     = 'Antigua and Barbuda';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Antigua-et-Barbuda';
        $land->Iso3         = 'ATG';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function AI() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'AI';
        $land->Deutsch      = 'Anguilla';
        $land->Englisch     = 'Anquilla';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Anguilla';
        $land->Iso3         = 'AIA';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function AL() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'AL';
        $land->Deutsch      = 'Albanien';
        $land->Englisch     = 'Albania';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Albanie';
        $land->Iso3         = 'ALB';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00355';
      	
        return $land;
    } 

    public static function AM() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'AM';
        $land->Deutsch      = 'Armenien';
        $land->Englisch     = 'Armenia';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Arménie';
        $land->Iso3         = 'ARM';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function AN() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'AN';
        $land->Deutsch      = 'Niederländische Antillen';
        $land->Englisch     = 'Netherlands Antilles';
        $land->Eu           = false;
        $land->Kontinent    = 'Nordamerika';
        $land->Franzoesisch = 'Antilles néerlandaises';
        $land->Iso3         = 'ANT';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function AO() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'AO';
        $land->Deutsch      = 'Angola';
        $land->Englisch     = 'Angola';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Angola';
        $land->Iso3         = 'AGO';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00244';
      	
        return $land;
    } 

    public static function AR() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'AR';
        $land->Deutsch      = 'Argentinien';
        $land->Englisch     = 'Argentine';
        $land->Eu           = false;
        $land->Kontinent    = 'Suedamerika';
        $land->Franzoesisch = 'Argentine';
        $land->Iso3         = 'ARG';
        $land->Englisch2    = 'Argentina';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0054';
      	
        return $land;
    } 

    public static function ASM() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'AS';
        $land->Deutsch      = 'Amerikanisch-Samoa';
        $land->Englisch     = 'American Samoa';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Samoa américaines';
        $land->Iso3         = 'ASM';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function AT() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'AT';
        $land->Deutsch      = 'Österreich';
        $land->Englisch     = 'Austria';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Autriche';
        $land->Iso3         = 'AUT';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0043';
      	
        return $land;
    } 

    public static function AU() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'AU';
        $land->Deutsch      = 'Australien';
        $land->Englisch     = 'Australia';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Australie';
        $land->Iso3         = 'AUS';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0061';
      	
        return $land;
    } 

    public static function AW() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'AW';
        $land->Deutsch      = 'Aruba';
        $land->Englisch     = 'Aruba';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Aruba';
        $land->Iso3         = 'ABW';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function AZ() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'AZ';
        $land->Deutsch      = 'Aserbaidschan';
        $land->Englisch     = 'Azerbaijani';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Azerbaïdjan';
        $land->Iso3         = 'AZE';
        $land->Englisch2    = 'Azerbaijan';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00994';
      	
        return $land;
    } 

    public static function BA() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'BA';
        $land->Deutsch      = 'Bosnien-Herzegowina';
        $land->Englisch     = 'Bosnia and Herzegovina';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Bosnie-Herzégovine';
        $land->Iso3         = 'BIH';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00387';
      	
        return $land;
    } 

    public static function BB() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'BB';
        $land->Deutsch      = 'Barbados';
        $land->Englisch     = 'Barbados';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Barbade';
        $land->Iso3         = 'BRB';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function BD() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'BD';
        $land->Deutsch      = 'Bangladesch';
        $land->Englisch     = 'Bangladesh';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Bangladesh';
        $land->Iso3         = 'BGD';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function BE() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'BE';
        $land->Deutsch      = 'Belgien';
        $land->Englisch     = 'Belgium';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Belgique';
        $land->Iso3         = 'BEL';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0032';
      	
        return $land;
    } 

    public static function BF() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'BF';
        $land->Deutsch      = 'Burkina Faso';
        $land->Englisch     = 'Burkina Faso';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Burkina';
        $land->Iso3         = 'BFA';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function BG() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'BG';
        $land->Deutsch      = 'Bulgarien';
        $land->Englisch     = 'Bulgaria';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Bulgarie';
        $land->Iso3         = 'BGR';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00359';
      	
        return $land;
    } 

    public static function BH() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'BH';
        $land->Deutsch      = 'Bahrain';
        $land->Englisch     = 'Bahrain';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Bahreïn';
        $land->Iso3         = 'BHR';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00973';
      	
        return $land;
    } 

    public static function BI() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'BI';
        $land->Deutsch      = 'Burundi';
        $land->Englisch     = 'Burundi';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Burundi';
        $land->Iso3         = 'BDI';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function BJ() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'BJ';
        $land->Deutsch      = 'Benin';
        $land->Englisch     = 'Benin';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Bénin';
        $land->Iso3         = 'BEN';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function BM() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'BM';
        $land->Deutsch      = 'Bermuda';
        $land->Englisch     = 'Bermuda';
        $land->Eu           = false;
        $land->Kontinent    = 'Nordamerika';
        $land->Franzoesisch = 'Bermudes';
        $land->Iso3         = 'BMU';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function BN() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'BN';
        $land->Deutsch      = 'Brunei';
        $land->Englisch     = 'Brunei';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Brunei';
        $land->Iso3         = 'BRN';
        $land->Englisch2    = 'Brunei Darussalam';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function BO() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'BO';
        $land->Deutsch      = 'Bolivien';
        $land->Englisch     = 'Bolivia';
        $land->Eu           = false;
        $land->Kontinent    = 'Suedamerika';
        $land->Franzoesisch = 'Bolivie';
        $land->Iso3         = 'BOL';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00591';
      	
        return $land;
    } 

    public static function BR() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'BR';
        $land->Deutsch      = 'Brasilien';
        $land->Englisch     = 'Brazil';
        $land->Eu           = false;
        $land->Kontinent    = 'Suedamerika';
        $land->Franzoesisch = 'Brésil';
        $land->Iso3         = 'BRA';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0055';
      	
        return $land;
    } 

    public static function BS() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'BS';
        $land->Deutsch      = 'Bahamas';
        $land->Englisch     = 'Bahamas';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Bahamas';
        $land->Iso3         = 'BHS';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function BT() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'BT';
        $land->Deutsch      = 'Bhutan';
        $land->Englisch     = 'Bhutan';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Bhoutan';
        $land->Iso3         = 'BTN';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function BV() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'BV';
        $land->Deutsch      = 'Bouvetinsel';
        $land->Englisch     = 'Bouvet Island';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Île Bouvet';
        $land->Iso3         = 'BVT';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function BW() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'BW';
        $land->Deutsch      = 'Botsuana';
        $land->Englisch     = 'Botswana';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Botswana';
        $land->Iso3         = 'BWA';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function BY() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'BY';
        $land->Deutsch      = 'Belarus';
        $land->Englisch     = 'Belarus';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Biélorussie';
        $land->Iso3         = 'BLR';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00375';
      	
        return $land;
    } 

    public static function BZ() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'BZ';
        $land->Deutsch      = 'Belize';
        $land->Englisch     = 'Belize';
        $land->Eu           = false;
        $land->Kontinent    = 'Nordamerika';
        $land->Franzoesisch = 'Belize';
        $land->Iso3         = 'BLZ';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function CA() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'CA';
        $land->Deutsch      = 'Kanada';
        $land->Englisch     = 'Canada';
        $land->Eu           = false;
        $land->Kontinent    = 'Nordamerika';
        $land->Franzoesisch = 'Canada';
        $land->Iso3         = 'CAN';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '001';
      	
        return $land;
    } 

    public static function CC() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'CC';
        $land->Deutsch      = 'Kokosinseln';
        $land->Englisch     = 'Cocos Islands';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Îles Cocos';
        $land->Iso3         = 'CCK';
        $land->Englisch2    = 'Cocos (Keeling) Islands';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function CD() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'CD';
        $land->Deutsch      = 'Kongo';
        $land->Englisch     = 'Congo';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Congo-Kinshasa';
        $land->Iso3         = 'COD';
        $land->Englisch2    = 'Congo, The Democratic Republic Of The';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00243';
      	
        return $land;
    } 

    public static function CF() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'CF';
        $land->Deutsch      = 'Zentralafrikanische Republik';
        $land->Englisch     = 'Central African Republic';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Centrafrique';
        $land->Iso3         = 'CAF';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function CG() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'CG';
        $land->Deutsch      = 'Kongo';
        $land->Englisch     = 'Congo';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Congo-Brazzaville';
        $land->Iso3         = 'COG';
        $land->Englisch2    = 'Congo, Republic of the';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00242';
      	
        return $land;
    } 

    public static function CH() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'CH';
        $land->Deutsch      = 'Schweiz';
        $land->Englisch     = 'Switzerland';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Suisse';
        $land->Iso3         = 'CHE';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0041';
      	
        return $land;
    } 

    public static function CI() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'CI';
        $land->Deutsch      = '"Côte d\"Ivoire", "Côte';
        $land->Englisch     = 'Ivoire';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = '"Côte d\"Ivoire", "CIV", "Côte';
        $land->Iso3         = '';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function CK() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'CK';
        $land->Deutsch      = 'Cookinseln';
        $land->Englisch     = 'Cook Islands';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Îles Cook';
        $land->Iso3         = 'COK';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function CL() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'CL';
        $land->Deutsch      = 'Chile';
        $land->Englisch     = 'Chile';
        $land->Eu           = false;
        $land->Kontinent    = 'Suedamerika';
        $land->Franzoesisch = 'Chili';
        $land->Iso3         = 'CHL';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function CM() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'CM';
        $land->Deutsch      = 'Kamerun';
        $land->Englisch     = 'Cameroon';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Cameroun';
        $land->Iso3         = 'CMR';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00237';
      	
        return $land;
    } 

    public static function CN() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'CN';
        $land->Deutsch      = 'China';
        $land->Englisch     = 'China';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Chine';
        $land->Iso3         = 'CHN';
        $land->Englisch2    = 'China, People´s Republic of';
        $land->Englisch3    = 'Taiwan (Republic of China)';
        $land->Vorwahl      = '0086';
      	
        return $land;
    } 

    public static function CO() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'CO';
        $land->Deutsch      = 'Kolumbien';
        $land->Englisch     = 'Colombia';
        $land->Eu           = false;
        $land->Kontinent    = 'Suedamerika';
        $land->Franzoesisch = 'Colombie';
        $land->Iso3         = 'COL';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0057';
      	
        return $land;
    } 

    public static function CR() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'CR';
        $land->Deutsch      = 'Costa Rica';
        $land->Englisch     = 'Costa Rica';
        $land->Eu           = false;
        $land->Kontinent    = 'Nordamerika';
        $land->Franzoesisch = 'Costa Rica';
        $land->Iso3         = 'CRI';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function CU() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'CU';
        $land->Deutsch      = 'Kuba';
        $land->Englisch     = 'Cuba';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Cuba';
        $land->Iso3         = 'CUB';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function CV() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'CV';
        $land->Deutsch      = 'Kap Verde';
        $land->Englisch     = 'Cape Verde';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Cap-Vert';
        $land->Iso3         = 'CPV';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function CX() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'CX';
        $land->Deutsch      = 'Weihnachtsinsel';
        $land->Englisch     = 'Christmas Island';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Île Christmas';
        $land->Iso3         = 'CXR';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function CY() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'CY';
        $land->Deutsch      = 'Zypern';
        $land->Englisch     = 'Cyprus';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Chypre';
        $land->Iso3         = 'CYP';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00357';
      	
        return $land;
    } 

    public static function CZ() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'CZ';
        $land->Deutsch      = 'Tschechische Republik';
        $land->Englisch     = 'Czech Republic';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'République tchèque';
        $land->Iso3         = 'CZE';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00420';
      	
        return $land;
    } 

    public static function DE() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'DE';
        $land->Deutsch      = 'Deutschland';
        $land->Englisch     = 'Germany';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Allemagne';
        $land->Iso3         = 'DEU';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0049';
      	
        return $land;
    } 

    public static function DJ() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'DJ';
        $land->Deutsch      = 'Dschibuti';
        $land->Englisch     = 'Djibouti';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Djibouti';
        $land->Iso3         = 'DJI';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function DK() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'DK';
        $land->Deutsch      = 'Dänemark';
        $land->Englisch     = 'Denmark';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Danemark';
        $land->Iso3         = 'DNK';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0045';
      	
        return $land;
    } 

    public static function DM() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'DM';
        $land->Deutsch      = 'Dominica';
        $land->Englisch     = 'Dominica';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Dominique';
        $land->Iso3         = 'DMA';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function DOM() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'DO';
        $land->Deutsch      = 'Dominikanische Republik';
        $land->Englisch     = 'Dominican Republic';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'République dominicaine';
        $land->Iso3         = 'DOM';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function DZ() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'DZ';
        $land->Deutsch      = 'Algerien';
        $land->Englisch     = 'Algeria';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Algérie';
        $land->Iso3         = 'DZA';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '213';
      	
        return $land;
    } 

    public static function EC() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'EC';
        $land->Deutsch      = 'Ecuador';
        $land->Englisch     = 'Ecuador';
        $land->Eu           = false;
        $land->Kontinent    = 'Suedamerika';
        $land->Franzoesisch = 'Équateur';
        $land->Iso3         = 'ECU';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function EE() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'EE';
        $land->Deutsch      = 'Estland';
        $land->Englisch     = 'Estonia';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Estonie';
        $land->Iso3         = 'EST';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00372';
      	
        return $land;
    } 

    public static function EG() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'EG';
        $land->Deutsch      = 'Ägypten';
        $land->Englisch     = 'Egypt';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Égypte';
        $land->Iso3         = 'EGY';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0020';
      	
        return $land;
    } 

    public static function EH() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'EH';
        $land->Deutsch      = 'Westsahara';
        $land->Englisch     = 'Western Sahara';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Sahara occidental';
        $land->Iso3         = 'ESH';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function ER() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'ER';
        $land->Deutsch      = 'Eritrea';
        $land->Englisch     = 'Eritrea';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Érythrée';
        $land->Iso3         = 'ERI';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function ES() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'ES';
        $land->Deutsch      = 'Spanien';
        $land->Englisch     = 'Spain';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Espagne';
        $land->Iso3         = 'ESP';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0034';
      	
        return $land;
    } 

    public static function ET() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'ET';
        $land->Deutsch      = 'Äthiopien';
        $land->Englisch     = 'Ethiopia';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Éthiopie';
        $land->Iso3         = 'ETH';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00241';
      	
        return $land;
    } 

    public static function FI() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'FI';
        $land->Deutsch      = 'Finnland';
        $land->Englisch     = 'Finland';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Finlande';
        $land->Iso3         = 'FIN';
        $land->Englisch2    = 'Åland Islands';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00358';
      	
        return $land;
    } 

    public static function FJ() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'FJ';
        $land->Deutsch      = 'Fidschi';
        $land->Englisch     = 'Fiji';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Fidji';
        $land->Iso3         = 'FJI';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function FK() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'FK';
        $land->Deutsch      = 'Falklandinseln';
        $land->Englisch     = 'Falkland Islands';
        $land->Eu           = false;
        $land->Kontinent    = 'Suedamerika';
        $land->Franzoesisch = 'Îles Malouines';
        $land->Iso3         = 'FLK';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function FM() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'FM';
        $land->Deutsch      = 'Mikronesien';
        $land->Englisch     = 'Micronesia';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Micronésie';
        $land->Iso3         = 'FSM';
        $land->Englisch2    = 'Micronesia, Federated States of';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function FO() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'FO';
        $land->Deutsch      = 'Färöer';
        $land->Englisch     = 'Faroe Islands';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Îles Féroé';
        $land->Iso3         = 'FRO';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function FR() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'FR';
        $land->Deutsch      = 'Frankreich';
        $land->Englisch     = 'France';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'France';
        $land->Iso3         = 'FRA';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0033';
      	
        return $land;
    } 

    public static function GA() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'GA';
        $land->Deutsch      = 'Gabun';
        $land->Englisch     = 'Gabonese Republic';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Gabon';
        $land->Iso3         = 'GAB';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00241';
      	
        return $land;
    } 

    public static function GB() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'GB';
        $land->Deutsch      = 'Großbritannien';
        $land->Englisch     = 'Great Britain';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Royaume-Uni';
        $land->Iso3         = 'GBR';
        $land->Englisch2    = 'United Kingdom';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0044';
      	
        return $land;
    } 

    public static function GD() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'GD';
        $land->Deutsch      = 'Grenada';
        $land->Englisch     = 'Grenada';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Grenade';
        $land->Iso3         = 'GRD';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function GE() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'GE';
        $land->Deutsch      = 'Georgien';
        $land->Englisch     = 'Georgia';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Géorgie';
        $land->Iso3         = 'GEO';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00995';
      	
        return $land;
    } 

    public static function GF() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'GF';
        $land->Deutsch      = 'Französich-Guayana';
        $land->Englisch     = 'French Guiana';
        $land->Eu           = false;
        $land->Kontinent    = 'Suedamerika';
        $land->Franzoesisch = 'Guyane française';
        $land->Iso3         = 'GUF';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function GG() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'GG';
        $land->Deutsch      = 'Guernsey';
        $land->Englisch     = 'Guernesey';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = '';
        $land->Iso3         = '';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0044';
      	
        return $land;
    } 

    public static function GH() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'GH';
        $land->Deutsch      = 'Ghana';
        $land->Englisch     = 'Ghana';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Ghana';
        $land->Iso3         = 'GHA';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00233';
      	
        return $land;
    } 

    public static function GI() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'GI';
        $land->Deutsch      = 'Gibraltar';
        $land->Englisch     = 'Gibraltar';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Gibraltar';
        $land->Iso3         = 'GIB';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00350';
      	
        return $land;
    } 

    public static function GL() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'GL';
        $land->Deutsch      = 'Grönland';
        $land->Englisch     = 'Greenland';
        $land->Eu           = false;
        $land->Kontinent    = 'Nordamerika';
        $land->Franzoesisch = 'Groenland';
        $land->Iso3         = 'GRL';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function GM() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'GM';
        $land->Deutsch      = 'Gambia';
        $land->Englisch     = 'Gambia';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Gambie';
        $land->Iso3         = 'GMB';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function GN() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'GN';
        $land->Deutsch      = 'Guinea';
        $land->Englisch     = 'Guinea';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Guinée';
        $land->Iso3         = 'GIN';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00224';
      	
        return $land;
    } 

    public static function GP() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'GP';
        $land->Deutsch      = 'Guadeloupe';
        $land->Englisch     = 'Guadeloupe';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Guadeloupe';
        $land->Iso3         = 'GLP';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function GQ() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'GQ';
        $land->Deutsch      = 'Äquatorialguinea';
        $land->Englisch     = 'Equatorial Guinea';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Guinée équatoriale';
        $land->Iso3         = 'GNQ';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function GR() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'GR';
        $land->Deutsch      = 'Griechenland';
        $land->Englisch     = 'Greece';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Grèce';
        $land->Iso3         = 'GRC';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0030';
      	
        return $land;
    } 

    public static function GS() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'GS';
        $land->Deutsch      = 'Südgeorgien und die Südlichen Sandwichinseln';
        $land->Englisch     = 'South Georgia and the South Sandwich Islands';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Géorgie du Sud-et-les Îles Sandwich du Sud';
        $land->Iso3         = 'SGS';
        $land->Englisch2    = 'South Georgia and Sandwich Islands';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function GT() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'GT';
        $land->Deutsch      = 'Guatemala';
        $land->Englisch     = 'Guatemala';
        $land->Eu           = false;
        $land->Kontinent    = 'Nordamerika';
        $land->Franzoesisch = 'Guatemala';
        $land->Iso3         = 'GTM';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function GU() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'GU';
        $land->Deutsch      = 'Guam';
        $land->Englisch     = 'Guam';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Guam';
        $land->Iso3         = 'GUM';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function GW() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'GW';
        $land->Deutsch      = 'Guinea-Bissau';
        $land->Englisch     = 'Guinea-Bissau';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Guinée-Bissau';
        $land->Iso3         = 'GNB';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function GY() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'GY';
        $land->Deutsch      = 'Guyana';
        $land->Englisch     = 'Guyana';
        $land->Eu           = false;
        $land->Kontinent    = 'Suedamerika';
        $land->Franzoesisch = 'Guyana';
        $land->Iso3         = 'GUY';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function HK() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'HK';
        $land->Deutsch      = 'Hongkong';
        $land->Englisch     = 'Hong Kong';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Hong Kong';
        $land->Iso3         = 'HKG';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00852';
      	
        return $land;
    } 

    public static function HM() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'HM';
        $land->Deutsch      = 'Heard und McDonaldinseln';
        $land->Englisch     = 'Heard and the McDonald Islands';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Île Heard et îles McDonald';
        $land->Iso3         = 'HMD';
        $land->Englisch2    = 'Heard Island And Mcdonald Islands';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function HN() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'HN';
        $land->Deutsch      = 'Honduras';
        $land->Englisch     = 'Honduras';
        $land->Eu           = false;
        $land->Kontinent    = 'Nordamerika';
        $land->Franzoesisch = 'Honduras';
        $land->Iso3         = 'HND';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function HR() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'HR';
        $land->Deutsch      = 'Kroatien';
        $land->Englisch     = 'Croatia';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Croatie';
        $land->Iso3         = 'HRV';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00385';
      	
        return $land;
    } 

    public static function HT() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'HT';
        $land->Deutsch      = 'Haiti';
        $land->Englisch     = 'Haiti';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Haïti';
        $land->Iso3         = 'HTI';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function HU() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'HU';
        $land->Deutsch      = 'Ungarn';
        $land->Englisch     = 'Hungary';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Hongrie';
        $land->Iso3         = 'HUN';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0036';
      	
        return $land;
    } 

    public static function ID() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'ID';
        $land->Deutsch      = 'Indonesien';
        $land->Englisch     = 'Indonesia';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Indonésie';
        $land->Iso3         = 'IDN';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0062';
      	
        return $land;
    } 

    public static function IE() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'IE';
        $land->Deutsch      = 'Irland';
        $land->Englisch     = 'Ireland';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Irlande';
        $land->Iso3         = 'IRL';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00353';
      	
        return $land;
    } 

    public static function IL() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'IL';
        $land->Deutsch      = 'Israel';
        $land->Englisch     = 'Israel';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Israël';
        $land->Iso3         = 'ISR';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00972';
      	
        return $land;
    } 

    public static function IM() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'IM';
        $land->Deutsch      = 'Insel Man';
        $land->Englisch     = 'Isle of Man';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Île de Man';
        $land->Iso3         = 'IOM';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0044';
      	
        return $land;
    } 

    public static function IN() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'IN';
        $land->Deutsch      = 'Indien';
        $land->Englisch     = 'India';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Inde';
        $land->Iso3         = 'IND';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0091';
      	
        return $land;
    } 

    public static function IO() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'IO';
        $land->Deutsch      = 'Britisches Territorium im Indischen Ozean';
        $land->Englisch     = 'British Indian Ocean Territory';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Territoire britannique de l\"océan Indien';
        $land->Iso3         = 'IOT';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function IQ() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'IQ';
        $land->Deutsch      = 'Irak';
        $land->Englisch     = 'Iraq';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Irak';
        $land->Iso3         = 'IRQ';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00964';
      	
        return $land;
    } 

    public static function IR() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'IR';
        $land->Deutsch      = 'Iran';
        $land->Englisch     = 'Iran';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Iran';
        $land->Iso3         = 'IRN';
        $land->Englisch2    = 'Iran, Islamic Republic of';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0098';
      	
        return $land;
    } 

    public static function IS() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'IS';
        $land->Deutsch      = 'Island';
        $land->Englisch     = 'Iceland';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Islande';
        $land->Iso3         = 'ISL';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00354';
      	
        return $land;
    } 

    public static function IT() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'IT';
        $land->Deutsch      = 'Italien';
        $land->Englisch     = 'Italy';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Italie';
        $land->Iso3         = 'ITA';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0039';
      	
        return $land;
    } 

    public static function JE() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'JE';
        $land->Deutsch      = 'Jersey';
        $land->Englisch     = 'Jèrri';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = '';
        $land->Iso3         = '';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0044';
      	
        return $land;
    } 

    public static function JM() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'JM';
        $land->Deutsch      = 'Jamaika';
        $land->Englisch     = 'Jamaica';
        $land->Eu           = false;
        $land->Kontinent    = 'Suedamerika';
        $land->Franzoesisch = 'Jamaïque';
        $land->Iso3         = 'JAM';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function JO() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'JO';
        $land->Deutsch      = 'Jordanien';
        $land->Englisch     = 'Jordan';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Jordanie';
        $land->Iso3         = 'JOR';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00962';
      	
        return $land;
    } 

    public static function JP() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'JP';
        $land->Deutsch      = 'Japan';
        $land->Englisch     = 'Japan';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Japon';
        $land->Iso3         = 'JPN';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function KE() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'KE';
        $land->Deutsch      = 'Kenia';
        $land->Englisch     = 'Kenya';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Kenya';
        $land->Iso3         = 'KEN';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00254';
      	
        return $land;
    } 

    public static function KG() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'KG';
        $land->Deutsch      = 'Kirgisistan';
        $land->Englisch     = 'Kyrgyzstan';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Kirghizistan';
        $land->Iso3         = 'KGZ';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function KH() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'KH';
        $land->Deutsch      = 'Kambodscha';
        $land->Englisch     = 'Cambodia';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Cambodge';
        $land->Iso3         = 'KHM';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function KI() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'KI';
        $land->Deutsch      = 'Kiribati';
        $land->Englisch     = 'Kiribati';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Kiribati';
        $land->Iso3         = 'KIR';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function KM() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'KM';
        $land->Deutsch      = 'Komoren';
        $land->Englisch     = 'Comoros';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Comores';
        $land->Iso3         = 'COM';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function KN() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'KN';
        $land->Deutsch      = 'St. Kitts und Nevis';
        $land->Englisch     = 'Saint Kitts and Nevis';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Saint-Christophe-et-Niévès';
        $land->Iso3         = 'KNA';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function KP() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'KP';
        $land->Deutsch      = 'Nord-Korea';
        $land->Englisch     = 'Korea, North';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Corée du Nord';
        $land->Iso3         = 'PRK';
        $land->Englisch2    = 'Korea, Democratic People\'s Republic of';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function KR() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'KR';
        $land->Deutsch      = 'Süd-Korea';
        $land->Englisch     = 'Korea, South';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Corée du Sud';
        $land->Iso3         = 'KOR';
        $land->Englisch2    = 'Korea, Republic of';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function KW() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'KW';
        $land->Deutsch      = 'Kuwait';
        $land->Englisch     = 'Kuwait';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Koweït';
        $land->Iso3         = 'KWT';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00965';
      	
        return $land;
    } 

    public static function KY() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'KY';
        $land->Deutsch      = 'Kaimaninseln';
        $land->Englisch     = 'Cayman Islands';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Îles Caïmans';
        $land->Iso3         = 'CYM';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function KZ() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'KZ';
        $land->Deutsch      = 'Kasachstan';
        $land->Englisch     = 'Kazakhstan';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Kazakhstan';
        $land->Iso3         = 'KAZ';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '007';
      	
        return $land;
    } 

    public static function LA() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'LA';
        $land->Deutsch      = 'Laos';
        $land->Englisch     = 'Laos';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Laos';
        $land->Iso3         = 'LAO';
        $land->Englisch2    = 'Lao People´s Democratic Republic';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function LB() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'LB';
        $land->Deutsch      = 'Libanon';
        $land->Englisch     = 'Lebanon';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Liban';
        $land->Iso3         = 'LBN';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00961';
      	
        return $land;
    } 

    public static function LC() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'LC';
        $land->Deutsch      = 'St. Lucia';
        $land->Englisch     = 'Saint Lucia';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Sainte-Lucie';
        $land->Iso3         = 'LCA';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function LI() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'LI';
        $land->Deutsch      = 'Liechtenstein';
        $land->Englisch     = 'Liechtenstein';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Liechtenstein';
        $land->Iso3         = 'LIE';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00423';
      	
        return $land;
    } 

    public static function LK() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'LK';
        $land->Deutsch      = 'Sri Lanka';
        $land->Englisch     = 'Sri Lanka';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Sri Lanka';
        $land->Iso3         = 'LKA';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0094';
      	
        return $land;
    } 

    public static function LR() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'LR';
        $land->Deutsch      = 'Liberia';
        $land->Englisch     = 'Liberia';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Libéria';
        $land->Iso3         = 'LBR';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function LS() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'LS';
        $land->Deutsch      = 'Lesotho';
        $land->Englisch     = 'Lesotho';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Lesotho';
        $land->Iso3         = 'LSO';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function LT() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'LT';
        $land->Deutsch      = 'Litauen';
        $land->Englisch     = 'Lithuania';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Lituanie';
        $land->Iso3         = 'LTU';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00370';
      	
        return $land;
    } 

    public static function LU() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'LU';
        $land->Deutsch      = 'Luxemburg';
        $land->Englisch     = 'Luxembourg';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Luxembourg';
        $land->Iso3         = 'LUX';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00352';
      	
        return $land;
    } 

    public static function LV() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'LV';
        $land->Deutsch      = 'Lettland';
        $land->Englisch     = 'Latvia';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Lettonie';
        $land->Iso3         = 'LVA';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00371';
      	
        return $land;
    } 

    public static function LY() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'LY';
        $land->Deutsch      = 'Libyen';
        $land->Englisch     = 'Libya';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Libye';
        $land->Iso3         = 'LBY';
        $land->Englisch2    = 'Libyan Arab Jamahiriya';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00218';
      	
        return $land;
    } 

    public static function MA() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'MA';
        $land->Deutsch      = 'Marokko';
        $land->Englisch     = 'Morocco';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Maroc';
        $land->Iso3         = 'MAR';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00212';
      	
        return $land;
    } 

    public static function MC() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'MC';
        $land->Deutsch      = 'Monaco';
        $land->Englisch     = 'Monaco';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Monaco';
        $land->Iso3         = 'MCO';
        $land->Englisch2    = '';
        $land->Englisch3    = '00377';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function MD() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'MD';
        $land->Deutsch      = 'Moldau';
        $land->Englisch     = 'Moldova';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Moldavie';
        $land->Iso3         = 'MDA';
        $land->Englisch2    = 'Moldova, Republic of';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00373';
      	
        return $land;
    } 

    public static function ME() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'ME';
        $land->Deutsch      = 'Montenegro';
        $land->Englisch     = 'Montenegro';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Monténégro';
        $land->Iso3         = 'MNE';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00382';
      	
        return $land;
    } 

    public static function MG() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'MG';
        $land->Deutsch      = 'Madagaskar';
        $land->Englisch     = 'Madagascar';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Madagascar';
        $land->Iso3         = 'MDG';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00261';
      	
        return $land;
    } 

    public static function MH() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'MH';
        $land->Deutsch      = 'Marshallinseln';
        $land->Englisch     = 'Marshall Islands';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Marshall';
        $land->Iso3         = 'MHL';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function MK() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'MK';
        $land->Deutsch      = 'Mazedonien';
        $land->Englisch     = 'Macedonia';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Macédoine';
        $land->Iso3         = 'MKD';
        $land->Englisch2    = 'Macedonia, The Former Yugoslav Republic of';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00389';
      	
        return $land;
    } 

    public static function ML() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'ML';
        $land->Deutsch      = 'Mali';
        $land->Englisch     = 'Mali';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Mali';
        $land->Iso3         = 'MLI';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00223';
      	
        return $land;
    } 

    public static function MM() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'MM';
        $land->Deutsch      = 'Myanmar';
        $land->Englisch     = 'Myanmar';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Birmanie';
        $land->Iso3         = 'MMR';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00976';
      	
        return $land;
    } 

    public static function MN() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'MN';
        $land->Deutsch      = 'Mongolei';
        $land->Englisch     = 'Mongolia';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Mongolie';
        $land->Iso3         = 'MNG';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function MO() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'MO';
        $land->Deutsch      = 'Macau';
        $land->Englisch     = 'Macau';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Macao';
        $land->Iso3         = 'MAC';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function MP() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'MP';
        $land->Deutsch      = 'Marianen';
        $land->Englisch     = 'Mariana Islands';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Îles Mariannes du Nord';
        $land->Iso3         = 'MNP';
        $land->Englisch2    = 'Northern Mariana Islands';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function MQ() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'MQ';
        $land->Deutsch      = 'Martinique';
        $land->Englisch     = 'Martinique';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Martinique';
        $land->Iso3         = 'MTQ';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function MR() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'MR';
        $land->Deutsch      = 'Mauretanien';
        $land->Englisch     = 'Mauritania';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Mauritanie';
        $land->Iso3         = 'MRT';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00222';
      	
        return $land;
    } 

    public static function MS() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'MS';
        $land->Deutsch      = 'Montserrat';
        $land->Englisch     = 'Montserrat';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Montserrat';
        $land->Iso3         = 'MSR';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function MT() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'MT';
        $land->Deutsch      = 'Malta';
        $land->Englisch     = 'Malta';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Malte';
        $land->Iso3         = 'MLT';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00356';
      	
        return $land;
    } 

    public static function MU() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'MU';
        $land->Deutsch      = 'Mauritius';
        $land->Englisch     = 'Mauritius';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Maurice';
        $land->Iso3         = 'MUS';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00230';
      	
        return $land;
    } 

    public static function MV() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'MV';
        $land->Deutsch      = 'Malediven';
        $land->Englisch     = 'Maldives';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Maldives';
        $land->Iso3         = 'MDV';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function MW() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'MW';
        $land->Deutsch      = 'Malawi';
        $land->Englisch     = 'Malawi';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Malawi';
        $land->Iso3         = 'MWI';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function MX() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'MX';
        $land->Deutsch      = 'Mexiko';
        $land->Englisch     = 'Mexico';
        $land->Eu           = false;
        $land->Kontinent    = 'Nordamerika';
        $land->Franzoesisch = 'Mexique';
        $land->Iso3         = 'MEX';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0052';
      	
        return $land;
    } 

    public static function MY() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'MY';
        $land->Deutsch      = 'Malaysia';
        $land->Englisch     = 'Malaysia';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Malaisie';
        $land->Iso3         = 'MYS';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0060';
      	
        return $land;
    } 

    public static function MZ() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'MZ';
        $land->Deutsch      = 'Mosambik';
        $land->Englisch     = 'Mozambique';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Mozambique';
        $land->Iso3         = 'MOZ';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00258';
      	
        return $land;
    } 

    public static function NA() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'NA';
        $land->Deutsch      = 'Namibia';
        $land->Englisch     = 'Namibia';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Namibie';
        $land->Iso3         = 'NAM';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00364';
      	
        return $land;
    } 

    public static function NC() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'NC';
        $land->Deutsch      = 'Neukaledonien';
        $land->Englisch     = 'New Caledonia';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Nouvelle-Calédonie';
        $land->Iso3         = 'NCL';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function NE() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'NE';
        $land->Deutsch      = 'Niger';
        $land->Englisch     = 'Niger';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Niger';
        $land->Iso3         = 'NER';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00227';
      	
        return $land;
    } 

    public static function NF() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'NF';
        $land->Deutsch      = 'Norfolkinsel';
        $land->Englisch     = 'Norfolk Island';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Norfolk';
        $land->Iso3         = 'NFK';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function NG() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'NG';
        $land->Deutsch      = 'Nigeria';
        $land->Englisch     = 'Nigeria';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Nigeria';
        $land->Iso3         = 'NGA';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00234';
      	
        return $land;
    } 

    public static function NI() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'NI';
        $land->Deutsch      = 'Nicaragua';
        $land->Englisch     = 'Nicaragua';
        $land->Eu           = false;
        $land->Kontinent    = 'Nordamerika';
        $land->Franzoesisch = 'Nicaragua';
        $land->Iso3         = 'NIC';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function NL() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'NL';
        $land->Deutsch      = 'Niederlande';
        $land->Englisch     = 'Netherlands';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Pays-Bas';
        $land->Iso3         = 'NLD';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0031';
      	
        return $land;
    } 

    public static function NO() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'NO';
        $land->Deutsch      = 'Norwegen';
        $land->Englisch     = 'Norway';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Norvège';
        $land->Iso3         = 'NOR';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0047';
      	
        return $land;
    } 

    public static function NP() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'NP';
        $land->Deutsch      = 'Nepal';
        $land->Englisch     = 'Nepal';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Népal';
        $land->Iso3         = 'NPL';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function NR() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'NR';
        $land->Deutsch      = 'Nauru';
        $land->Englisch     = 'Nauru';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Nauru';
        $land->Iso3         = 'NRU';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function NU() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'NU';
        $land->Deutsch      = 'Niue';
        $land->Englisch     = 'Niue';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Niué';
        $land->Iso3         = 'NIU';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function NZ() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'NZ';
        $land->Deutsch      = 'Neuseeland';
        $land->Englisch     = 'New Zealand';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Nouvelle-Zélande';
        $land->Iso3         = 'NZL';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0064';
      	
        return $land;
    } 

    public static function OM() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'OM';
        $land->Deutsch      = 'Oman';
        $land->Englisch     = 'Oman';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Oman';
        $land->Iso3         = 'OMN';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00968';
      	
        return $land;
    } 

    public static function PA() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'PA';
        $land->Deutsch      = 'Panama';
        $land->Englisch     = 'Panama';
        $land->Eu           = false;
        $land->Kontinent    = 'Nordamerika';
        $land->Franzoesisch = 'Panamá';
        $land->Iso3         = 'PAN';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function PE() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'PE';
        $land->Deutsch      = 'Peru';
        $land->Englisch     = 'Peru';
        $land->Eu           = false;
        $land->Kontinent    = 'Suedamerika';
        $land->Franzoesisch = 'Pérou';
        $land->Iso3         = 'PER';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0051';
      	
        return $land;
    } 

    public static function PF() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'PF';
        $land->Deutsch      = 'Französisch-Polynesien';
        $land->Englisch     = 'French Polynesia';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Polynésie française';
        $land->Iso3         = 'PYF';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function PG() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'PG';
        $land->Deutsch      = 'Papua-Neuguinea';
        $land->Englisch     = 'Papua New Guinea';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Papouasie-Nouvelle-Guinée';
        $land->Iso3         = 'PNG';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00675';
      	
        return $land;
    } 

    public static function PH() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'PH';
        $land->Deutsch      = 'Philippinen';
        $land->Englisch     = 'Philippines';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Philippines';
        $land->Iso3         = 'PHL';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0063';
      	
        return $land;
    } 

    public static function PK() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'PK';
        $land->Deutsch      = 'Pakistan';
        $land->Englisch     = 'Pakistan';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Pakistan';
        $land->Iso3         = 'PAK';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0092';
      	
        return $land;
    } 

    public static function PL() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'PL';
        $land->Deutsch      = 'Polen';
        $land->Englisch     = 'Poland';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Pologne';
        $land->Iso3         = 'POL';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0048';
      	
        return $land;
    } 

    public static function PM() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'PM';
        $land->Deutsch      = 'St. Pierre und Miquelon';
        $land->Englisch     = 'Saint Pierre and Miquelon';
        $land->Eu           = false;
        $land->Kontinent    = 'Nordamerika';
        $land->Franzoesisch = 'Saint-Pierre-et-Miquelon';
        $land->Iso3         = 'SPM';
        $land->Englisch2    = 'Saint-Pierre and Miquelon';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function PN() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'PN';
        $land->Deutsch      = 'Pitcairninseln';
        $land->Englisch     = 'Pitcairn Islands Group';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Pitcairn';
        $land->Iso3         = 'PCN';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function PR() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'PR';
        $land->Deutsch      = 'Puerto Rico';
        $land->Englisch     = 'Puerto Rico';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Porto Rico';
        $land->Iso3         = 'PRI';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function PS() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'PS';
        $land->Deutsch      = 'Palästina';
        $land->Englisch     = 'Palestinian territories';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Palestine';
        $land->Iso3         = 'PSE';
        $land->Englisch2    = 'Palestinian Territory, Occupied';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function PT() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'PT';
        $land->Deutsch      = 'Portugal';
        $land->Englisch     = 'Portugal';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Portugal';
        $land->Iso3         = 'PRT';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00351';
      	
        return $land;
    } 

    public static function PW() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'PW';
        $land->Deutsch      = 'Palau';
        $land->Englisch     = 'Palau';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Palaos';
        $land->Iso3         = 'PLW';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function PY() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'PY';
        $land->Deutsch      = 'Paraguay';
        $land->Englisch     = 'Paraguay';
        $land->Eu           = false;
        $land->Kontinent    = 'Suedamerika';
        $land->Franzoesisch = 'Paraguay';
        $land->Iso3         = 'PRY';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00595';
      	
        return $land;
    } 

    public static function QA() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'QA';
        $land->Deutsch      = 'Katar';
        $land->Englisch     = 'Qatar';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Qatar';
        $land->Iso3         = 'QAT';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00974';
      	
        return $land;
    } 

    public static function RE() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'RE';
        $land->Deutsch      = 'Réunion';
        $land->Englisch     = 'Réunion';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Reunion La Réunion';
        $land->Iso3         = 'REU';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00262';
      	
        return $land;
    } 

    public static function RO() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'RO';
        $land->Deutsch      = 'Rumänien';
        $land->Englisch     = 'Romania';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Roumanie';
        $land->Iso3         = 'ROU';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0040';
      	
        return $land;
    } 

    public static function RS() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'RS';
        $land->Deutsch      = 'Serbien';
        $land->Englisch     = 'Serbia';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Serbie';
        $land->Iso3         = 'SRB';
        $land->Englisch2    = 'Serbia and Montenegro';
        $land->Englisch3    = 'Kosovo';
        $land->Vorwahl      = '00381';
      	
        return $land;
    } 

    public static function RU() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'RU';
        $land->Deutsch      = 'Rußland';
        $land->Englisch     = 'Russian Federation';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Russie';
        $land->Iso3         = 'RUS';
        $land->Englisch2    = 'Russland';
        $land->Englisch3    = '';
        $land->Vorwahl      = '007';
      	
        return $land;
    } 

    public static function RW() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'RW';
        $land->Deutsch      = 'Ruanda';
        $land->Englisch     = 'Rwanda';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Rwanda';
        $land->Iso3         = 'RWA';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function SA() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'SA';
        $land->Deutsch      = 'Saudi-Arabien';
        $land->Englisch     = 'Saudi Arabia';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Arabie saoudite';
        $land->Iso3         = 'SAU';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00966';
      	
        return $land;
    } 

    public static function SB() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'SB';
        $land->Deutsch      = 'Salomonen';
        $land->Englisch     = 'Solomon Islands';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Salomon';
        $land->Iso3         = 'SLB';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function SC() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'SC';
        $land->Deutsch      = 'Seychellen';
        $land->Englisch     = 'Seychelles';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Seychelles';
        $land->Iso3         = 'SYC';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function SD() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'SD';
        $land->Deutsch      = 'Sudan';
        $land->Englisch     = 'Sudan';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Soudan';
        $land->Iso3         = 'SDN';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00249';
      	
        return $land;
    } 

    public static function SE() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'SE';
        $land->Deutsch      = 'Schweden';
        $land->Englisch     = 'Sweden';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Suède';
        $land->Iso3         = 'SWE';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0046';
      	
        return $land;
    } 

    public static function SG() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'SG';
        $land->Deutsch      = 'Singapur';
        $land->Englisch     = 'Singapore';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Singapour';
        $land->Iso3         = 'SGP';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0065';
      	
        return $land;
    } 

    public static function SH() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'SH';
        $land->Deutsch      = 'St. Helena';
        $land->Englisch     = 'St. Helena';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Sainte-Hélène';
        $land->Iso3         = 'SHN';
        $land->Englisch2    = 'Saint Helena';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function SI() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'SI';
        $land->Deutsch      = 'Slowenien';
        $land->Englisch     = 'Slovenia';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Slovenie';
        $land->Iso3         = 'SVN';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00386';
      	
        return $land;
    } 

    public static function SJ() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'SJ';
        $land->Deutsch      = 'Svalbard und Jan Mayen';
        $land->Englisch     = 'Svalbard and Jan Mayen Islands';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Svalbard et île Jan Mayen';
        $land->Iso3         = 'SJM';
        $land->Englisch2    = 'Svalbard and Jan Mayen';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function SK() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'SK';
        $land->Deutsch      = 'Slowakei';
        $land->Englisch     = 'Slovakia';
        $land->Eu           = true;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Slovaquie';
        $land->Iso3         = 'SVK';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00421';
      	
        return $land;
    } 

    public static function SL() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'SL';
        $land->Deutsch      = 'Sierra Leone';
        $land->Englisch     = 'Sierra Leone';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Sierra Leone';
        $land->Iso3         = 'SLE';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00232';
      	
        return $land;
    } 

    public static function SM() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'SM';
        $land->Deutsch      = 'San Marino';
        $land->Englisch     = 'San Marino';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Saint-Marin';
        $land->Iso3         = 'SMR';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00378';
      	
        return $land;
    } 

    public static function SN() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'SN';
        $land->Deutsch      = 'Senegal';
        $land->Englisch     = 'Senegal';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Sénégal';
        $land->Iso3         = 'SEN';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00221';
      	
        return $land;
    } 

    public static function SO() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'SO';
        $land->Deutsch      = 'Somalia';
        $land->Englisch     = 'Somalia';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Somalie';
        $land->Iso3         = 'SOM';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00252';
      	
        return $land;
    } 

    public static function SR() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'SR';
        $land->Deutsch      = 'Suriname';
        $land->Englisch     = 'Suriname';
        $land->Eu           = false;
        $land->Kontinent    = 'Suedamerika';
        $land->Franzoesisch = 'Suriname';
        $land->Iso3         = 'SUR';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function ST() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'ST';
        $land->Deutsch      = 'Sao Tomé und Principe';
        $land->Englisch     = 'Sao Tome and Principe';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Sao Tomé-et-Principe';
        $land->Iso3         = 'STP';
        $land->Englisch2    = 'São Tomé and Príncipe';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function SV() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'SV';
        $land->Deutsch      = 'El Salvador';
        $land->Englisch     = 'El Salvador';
        $land->Eu           = false;
        $land->Kontinent    = 'Nordamerika';
        $land->Franzoesisch = 'Salvador';
        $land->Iso3         = 'SLV';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function SY() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'SY';
        $land->Deutsch      = 'Syrien';
        $land->Englisch     = 'Syria';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Syrie';
        $land->Iso3         = 'SYR';
        $land->Englisch2    = 'Syrian Arab Republic';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00963';
      	
        return $land;
    } 

    public static function SZ() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'SZ';
        $land->Deutsch      = 'Swasiland';
        $land->Englisch     = 'Swaziland';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Swaziland';
        $land->Iso3         = 'SWZ';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function TC() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'TC';
        $land->Deutsch      = 'Turks- und Caicosinseln';
        $land->Englisch     = 'Turks and Caicos Islands';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Îles Turques-et-Caïques';
        $land->Iso3         = 'TCA';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function TD() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'TD';
        $land->Deutsch      = 'Tschad';
        $land->Englisch     = 'Chad';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Tchad';
        $land->Iso3         = 'TCD';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00235';
      	
        return $land;
    } 

    public static function TG() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'TG';
        $land->Deutsch      = 'Togo';
        $land->Englisch     = 'Togo';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Togo';
        $land->Iso3         = 'TGO';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function TH() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'TH';
        $land->Deutsch      = 'Thailand';
        $land->Englisch     = 'Thailand';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Thaïlande';
        $land->Iso3         = 'THA';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function TJ() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'TJ';
        $land->Deutsch      = 'Tadschikistan';
        $land->Englisch     = 'Tajikistan';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Tadjikistan';
        $land->Iso3         = 'TJK';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function TK() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'TK';
        $land->Deutsch      = 'Tokelau';
        $land->Englisch     = 'Tokelau';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Tokelau';
        $land->Iso3         = 'TKL';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function TL() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'TL';
        $land->Deutsch      = 'Timor-Leste';
        $land->Englisch     = 'Timor-Leste';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Timor oriental';
        $land->Iso3         = 'TLS';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function TM() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'TM';
        $land->Deutsch      = 'Turkmenistan';
        $land->Englisch     = 'Turkmenistan';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Turkménistan';
        $land->Iso3         = 'TKM';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00993';
      	
        return $land;
    } 

    public static function TN() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'TN';
        $land->Deutsch      = 'Tunesien';
        $land->Englisch     = 'Tunisia';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Tunisie';
        $land->Iso3         = 'TUN';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00216';
      	
        return $land;
    } 

    public static function TO() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'TO';
        $land->Deutsch      = 'Tonga';
        $land->Englisch     = 'Tonga';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Tonga';
        $land->Iso3         = 'TON';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function TR() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'TR';
        $land->Deutsch      = 'Türkei';
        $land->Englisch     = 'Turkey';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Turquie';
        $land->Iso3         = 'TUR';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0090';
      	
        return $land;
    } 

    public static function TT() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'TT';
        $land->Deutsch      = 'Trinidad und Tobago';
        $land->Englisch     = 'Trinidad and Tobago';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Trinité-et-Tobago';
        $land->Iso3         = 'TTO';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function TV() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'TV';
        $land->Deutsch      = 'Tuvalu';
        $land->Englisch     = 'Tuvalu';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Tuvalu';
        $land->Iso3         = 'TUV';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function TW() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'TW';
        $land->Deutsch      = 'China';
        $land->Englisch     = 'Republic of China';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Taïwan';
        $land->Iso3         = 'TWN';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function TZ() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'TZ';
        $land->Deutsch      = 'Tansania';
        $land->Englisch     = 'Tanzania';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Tanzanie';
        $land->Iso3         = 'TZA';
        $land->Englisch2    = 'Tanzania, United Republic Of';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function UA() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'UA';
        $land->Deutsch      = 'Ukraine';
        $land->Englisch     = 'Ukraine';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Ukraine';
        $land->Iso3         = 'UKR';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00380';
      	
        return $land;
    } 

    public static function UG() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'UG';
        $land->Deutsch      = 'Uganda';
        $land->Englisch     = 'Uganda';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Ouganda';
        $land->Iso3         = 'UGA';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function US() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'US';
        $land->Deutsch      = 'Vereinigte Staaten';
        $land->Englisch     = 'United States';
        $land->Eu           = false;
        $land->Kontinent    = 'Nordamerika';
        $land->Franzoesisch = 'États-Unis';
        $land->Iso3         = 'USA';
        $land->Englisch2    = 'United States Minor Outlying Islands';
        $land->Englisch3    = '';
        $land->Vorwahl      = '001';
      	
        return $land;
    } 

    public static function UY() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'UY';
        $land->Deutsch      = 'Uruguay';
        $land->Englisch     = 'Uruguay';
        $land->Eu           = false;
        $land->Kontinent    = 'Suedamerika';
        $land->Franzoesisch = 'Uruguay';
        $land->Iso3         = 'URY';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function UZ() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'UZ';
        $land->Deutsch      = 'Usbekistan';
        $land->Englisch     = 'Uzbekistan';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Ouzbékistan';
        $land->Iso3         = 'UZB';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function VA() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'VA';
        $land->Deutsch      = 'Vatikanstadt';
        $land->Englisch     = 'Vatican City State';
        $land->Eu           = false;
        $land->Kontinent    = 'Europa';
        $land->Franzoesisch = 'Vatican/(Saint-Siège)';
        $land->Iso3         = 'VAT';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00379';
      	
        return $land;
    } 

    public static function VC() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'VC';
        $land->Deutsch      = 'St. Vincent und die Grenadinen';
        $land->Englisch     = 'Saint Vincent and the Grenadines';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Saint-Vincent-et-les Grenadines';
        $land->Iso3         = 'VCT';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function VE() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'VE';
        $land->Deutsch      = 'Venezuela';
        $land->Englisch     = 'Venezuela';
        $land->Eu           = false;
        $land->Kontinent    = 'Suedamerika';
        $land->Franzoesisch = 'Venezuela';
        $land->Iso3         = 'VEN';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0058';
      	
        return $land;
    } 

    public static function VG() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'VG';
        $land->Deutsch      = 'die Britischen Jungferninseln';
        $land->Englisch     = 'British Virgin Islands';
        $land->Eu           = false;
        $land->Kontinent    = 'Nordamerika';
        $land->Franzoesisch = 'Îles Vierges britanniques';
        $land->Iso3         = 'VGB';
        $land->Englisch2    = 'Virgin Islands (British)';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function VI() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'VI';
        $land->Deutsch      = 'die Amerikanischen Jungferninseln';
        $land->Englisch     = 'Virgin Islands of the United States';
        $land->Eu           = false;
        $land->Kontinent    = 'Nordamerika';
        $land->Franzoesisch = 'Îles Vierges américaines';
        $land->Iso3         = 'VIR';
        $land->Englisch2    = 'Virgin Islands (U.S.)';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function VN() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'VN';
        $land->Deutsch      = 'Vietnam';
        $land->Englisch     = 'Viet Nam';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Viêt';
        $land->Iso3         = 'VNM';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function VU() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'VU';
        $land->Deutsch      = 'Vanuatu';
        $land->Englisch     = 'Vanuatu';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Vanuatu';
        $land->Iso3         = 'VUT';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function WF() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'WF';
        $land->Deutsch      = 'Wallis und Futuna';
        $land->Englisch     = 'Wallis and Futuna';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Wallis-et-Futuna';
        $land->Iso3         = 'WLF';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function WS() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'WS';
        $land->Deutsch      = 'Samoa';
        $land->Englisch     = 'Western Samoa';
        $land->Eu           = false;
        $land->Kontinent    = 'Ozeanien';
        $land->Franzoesisch = 'Samoa';
        $land->Iso3         = 'WSM';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function YE() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'YE';
        $land->Deutsch      = 'Jemen';
        $land->Englisch     = 'Yemen';
        $land->Eu           = false;
        $land->Kontinent    = 'Asien';
        $land->Franzoesisch = 'Yémen';
        $land->Iso3         = 'YEM';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '00967';
      	
        return $land;
    } 

    public static function YT() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'YT';
        $land->Deutsch      = 'Mayotte';
        $land->Englisch     = 'Mayotte';
        $land->Eu           = false;
        $land->Kontinent    = '';
        $land->Franzoesisch = 'Mayotte';
        $land->Iso3         = 'MYT';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function ZA() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'ZA';
        $land->Deutsch      = 'SüdAfrika';
        $land->Englisch     = 'South Africa';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Afrique du Sud';
        $land->Iso3         = 'ZAF';
        $land->Englisch2    = 'Südafrika';
        $land->Englisch3    = '';
        $land->Vorwahl      = '0027';
      	
        return $land;
    } 

    public static function ZM() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'ZM';
        $land->Deutsch      = 'Sambia';
        $land->Englisch     = 'Zambia';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Zambie';
        $land->Iso3         = 'ZMB';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function ZW() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'ZW';
        $land->Deutsch      = 'Simbabwe';
        $land->Englisch     = 'Zimbabwe';
        $land->Eu           = false;
        $land->Kontinent    = 'Afrika';
        $land->Franzoesisch = 'Zimbabwe';
        $land->Iso3         = 'ZWE';
        $land->Englisch2    = '';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    } 

    public static function TF() {
    
        $land               = new Land();
      	
        $land->Iso2         = 'TF';
        $land->Deutsch      = 'Französisches Süd- und Antarktisgebiete';
        $land->Englisch     = 'French Southern Territories';
        $land->Eu           = false;
        $land->Kontinent    = 'Antarktis';
        $land->Franzoesisch = 'Antarctica';
        $land->Iso3         = 'TAAF';
        $land->Englisch2    = 'Antarctica';
        $land->Englisch3    = '';
        $land->Vorwahl      = '';
      	
        return $land;
    }    
}
?> 