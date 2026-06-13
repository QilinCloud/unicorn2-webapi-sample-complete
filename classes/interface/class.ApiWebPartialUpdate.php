<?php
declare(strict_types=1);

/**
 * Represents a stock update payload sent by Unicorn.
 */
class ApiWebStockUpdate extends ApiWebDto
{
    public string $ShopId = '';
    public string $ArtikelNummer = '';
    public float $Bestand = 0.0;
    public bool $StockPolicy = true;
}

/**
 * Represents a price update payload sent by Unicorn.
 */
class ApiWebPriceUpdate extends ApiWebDto
{
    public string $ShopId = '';
    public string $ArtikelNummer = '';
    public float $Preis = 0.0;
    public int $Waehrung = 0;
}

/**
 * Represents a delivery or processing-time update payload sent by Unicorn.
 */
class ApiWebProcessingTimeUpdate extends ApiWebDto
{
    public string $ShopId = '';
    public string $ArtikelNummer = '';
    public int $ProcessingTimeInDays = 1;
    public string $ShippingProfile = '';
}
