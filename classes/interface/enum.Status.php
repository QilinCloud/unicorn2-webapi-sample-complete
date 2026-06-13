<?php
declare(strict_types=1);

/**
 * Mirrors Unicorn2.Common.Enums.Status.
 */
abstract class Status
{
    const Eingegangen = 0;
    const EingegangenUndFreigegeben = 1;
    const WarteAufHändlerbestätigung = 2;
    const InBearbeitung = 3;
    const Versandt = 4;
    const Ausbezahlt = 5;
    const Storniert = 6;
    const Gesperrt = 7;
    const Retourniert = 8;
}
