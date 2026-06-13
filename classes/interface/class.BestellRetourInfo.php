<?php
declare(strict_types=1);

/**
 * Represents return upload or download information for an ApiWeb order.
 */
class BestellRetourInfo extends BestellungsInfo
{
    public $State = 0;
    public $RMRetoure = 0;
    public $RetoureNr = '';
    public $ExterneNr = '';
    public $GarantieAntrag = '';
    public $IsPrime = false;
    public $Erstellt = null;
    public $Trackings = array();
    public $KommentarExtern = '';
    public $ReturningWarehouseName = '';
    public $AbholAdresse = null;
    public $Artikel = array();
}

/**
 * Represents one returned article inside a return announcement.
 */
class RetourenArtikel extends ApiWebDto
{
    public $Artikel = null;
    public $Status = '';
    public $LieferscheinNr = '';
    public $TageSeitVersand = 0;
    public $Anzahl = 0.0;
    public $AnzahlLieferschein = 0.0;
    public $VersendetAm = null;
    public $Gutgeschrieben = false;
    public $GutschriftsBetrag = 0.0;
    public $ZustandString = '';
    public $ZustandKommentar = '';
    public $Zustand = 0;
    public $Grund = '';
    public $GrundKommentar = '';
}
