<?php
declare(strict_types=1);

/**
 * Represents an invoice downloaded from or uploaded to an ApiWeb endpoint.
 */
class Rechnung extends ApiWebDto
{
    public $ShopId = '';
    public $BestellungShopId = '';
    public $RechnungsNr = '';
    public $Erstellt = null;
    public $Valuta = null;
    public $Leistungsdatum = null;
    public $IstDropshipping = false;
    public $RechnungsDateiUrl = '';
    public $RechnungsDatei = null;
    public $RechnungsDateiBase64 = '';
    public $RechnungsDateiFileExtension = 'pdf';
    public $Rechnungsadresse = null;
    public $Lieferadresse = null;
    public $Rechnungspositionen = array();
    public $Versandpositionen = array();
    public $Zahlungsart = 0;
    public $GesamtSummeBrutto = 0.0;
    public $Anmerkung = '';
    public $ZahlungSetzen = false;
}

/**
 * Represents one invoice line item.
 */
class RechnungsPosition extends ApiWebDto
{
    public $ShopId = '';
    public $WawiIdArtikel = 0;
    public $ArtikelNummer = '';
    public $Ean = '';
    public $Mpn = '';
    public $Hersteller = '';
    public $Name = '';
    public $Rabattcode = '';
    public $Menge = 0.0;
    public $Steuer = null;
    public $PreisPerUnitNetto = 0.0;
    public $RabattPerUnitPercentage = 0.0;
    public $Hinweis = '';
}

/**
 * Represents one invoice shipping line item.
 */
class VersandPosition extends ApiWebDto
{
    public $Name = '';
    public $Menge = 0.0;
    public $Steuer = null;
    public $PositionsTyp = null;
    public $PreisPerUnitNetto = 0.0;
    public $RabattPerUnitNetto = 0.0;
}
