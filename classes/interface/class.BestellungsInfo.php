<?php
declare(strict_types=1);

/**
 * Base order-state DTO used for paid, cancellation, invoice, refund, and return calls.
 */
class BestellungsInfo extends MappingObject
{
    public $Bestellung;
    public $Success = false;

    /**
     * Initializes order-state information with an optional order object.
     *
     * @param mixed $bestellung Optional order mirror object.
     */
    public function __construct($bestellung = null)
    {
        parent::__construct();
        $this->Bestellung = $bestellung ?? new Bestellung();
    }
}
