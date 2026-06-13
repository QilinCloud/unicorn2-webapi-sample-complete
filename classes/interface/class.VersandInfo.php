<?php
declare(strict_types=1);

/**
 * Represents shipment result and tracking information exchanged with ApiWeb.
 */
class VersandInfo extends WawiObject
{
    public $DhlRahmenvertrag = false;
    public $Versanddienstleister = '';
    public $VersanddienstleisterOriginalWawi = '';
    public $VersanddienstMarktplatzLieferservice = '';
    public $TrackingNummer = '';
    public $TrackingUrl = '';
    public $Success = false;
    public $Versanddatum = null;
    public $Ankunftszeit = null;
    public $FulfillmentCenter = '';
    public $Gewicht = 0.0;
    public $Express = false;
    public $VerwiegePflicht = false;
    public $TrackingIDPflicht = false;
    public $Hinweis = '';
    public $Erstelldatum = null;
    public $RetourenTrackingNummer = '';
    public $RetourVersanddienstleiter = null;
    public $RetourenIdCameFromUnicorn = false;
    public $VersandPosInfos = array();
}
