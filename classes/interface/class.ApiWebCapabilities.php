<?php
declare(strict_types=1);

/**
 * Describes capabilities that the PHP sample endpoint exposes to Unicorn.
 */
class ApiWebCapabilities extends ApiWebDto
{
    public array $SupportedLanguages = array();
    public array $SupportedWaehrungen = array();
    public array $SupportedZahlungsarten = array();
    public array $ShippingProfiles = array();
    public array $Features = array();
    public array $SupportedMethods = array();
}
