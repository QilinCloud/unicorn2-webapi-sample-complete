<?php
declare(strict_types=1);

/**
 * Represents shipment upload information for an ApiWeb order.
 */
class BestellVersandInfo extends BestellungsInfo
{
    public $Complete = false;
    public $LieferscheinVersandInfos = array();
}
