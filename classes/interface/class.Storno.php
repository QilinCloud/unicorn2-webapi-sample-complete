<?php
declare(strict_types=1);

/**
 * Represents a cancellation upload for an ApiWeb order.
 */
class Storno extends BestellungsInfo
{
    public $StornoBenutzer = 0;
    public $Stornierungsdatum = null;
    public $Reason = 16;
    public $Bemerkung = '';
}
