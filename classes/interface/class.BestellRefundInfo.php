<?php
declare(strict_types=1);

/**
 * Represents structured refund upload data for an ApiWeb order.
 */
class BestellRefundInfo extends BestellungsInfo
{
    public $GutschriftId = 0;
    public $RechnungId = 0;
    public $Erstellt = null;
    public $Anmerkung = '';
    public $WawiStatus = '';
    public $Artikel = array();
    public $GutschriftNr = '';
    public $RechnungNr = '';
}

/**
 * Represents one refunded order article line.
 */
class RefundArtikel extends ApiWebDto
{
    public $Artikel = null;
    public $RefundedMonetaryAmountNet = 0.0;
    public $RefundedMonetaryAmountGross = 0.0;
    public $RefundedMonetaryAmountTax = null;
    public $Anzahl = 0.0;
    public $BestellPos = 0;
    public $GutschriftStueckliste = 0;
    public $Sort = 0;
    public $RechnungPosition = 0;
}
