<?php
declare(strict_types=1);

/**
 * Represents a refund or credit note downloaded from or uploaded to an ApiWeb endpoint.
 */
class Gutschrift extends Rechnung
{
    public $RechnungsShopId = '';
    public $GutschriftsNr = '';
    public $GutschriftsDateiUrl = '';
    public $GutschriftsDatei = null;
    public $GutschriftsDateiBase64 = '';
    public $GutschriftsDateiFileExtension = 'pdf';
    public $Gutschriftsspositionen = array();
    public $GutschriftsType = 0;
}

/**
 * Represents one refund or credit note line item.
 */
class GutschriftsPosition extends ApiWebDto
{
    public $RechnungsPositionShopId = '';
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
