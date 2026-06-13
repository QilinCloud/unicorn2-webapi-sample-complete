<?php
declare(strict_types=1);

/**
 * Represents a return announcement returned by or uploaded to the ApiWeb endpoint.
 */
class ApiWebReturnAnnouncement extends ApiWebDto
{
    public int $WawiId = 0;
    public string $ShopId = '';
    public string $BestellungShopId = '';
    public string $RetourenDatum = '';
    public array $Artikel = array();
}
