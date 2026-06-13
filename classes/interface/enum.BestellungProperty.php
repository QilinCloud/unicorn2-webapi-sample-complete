<?php
declare(strict_types=1);

/**
 * Mirrors Unicorn2.Common.Enums.BestellungProperty.
 */
abstract class BestellungProperty
{
    const Status = 0;
    const Bestellungsnummer = 1;
    const Rechnungsnummer = 2;
    const Waehrung = 3;
    const Zahlungsart = 4;
    const ZahlungsartIstLastschrift = 5;
    const ZahlungsartIstKreditkarte = 6;
    const ZahlungDaten = 7;
    const Versandkosten = 8;
    const Gesammtkosten = 9;
    const Bestelldatum = 10;
    const Lieferdatum = 11;
    const Kunde = 12;
    const Lieferanschrift = 13;
    const Artikel = 14;
    const Kundenbemerkung = 15;
    const Händlerbemerkung = 16;
    const Gutscheine = 17;
}
