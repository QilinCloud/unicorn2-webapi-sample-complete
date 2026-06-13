<?php
declare(strict_types=1);

/**
 * Base document DTO for ApiWeb invoice and refund file transfers.
 */
class ApiWebDocument extends ApiWebDto
{
    public string $ShopId = '';
    public string $BestellungShopId = '';
    public string $DocumentNumber = '';
    public string $FileExtension = 'pdf';
    public string $FileBase64 = '';
}

/**
 * Represents an invoice document returned by or uploaded to the ApiWeb endpoint.
 */
class ApiWebInvoice extends ApiWebDocument
{
    public string $RechnungsNr = '';
    public string $RechnungsDateiFileExtension = 'pdf';
    public string $RechnungsDateiBase64 = '';
}

/**
 * Represents a refund document returned by or uploaded to the ApiWeb endpoint.
 */
class ApiWebRefund extends ApiWebDocument
{
    public string $RechnungsShopId = '';
    public string $GutschriftsNr = '';
    public string $GutschriftsDateiFileExtension = 'pdf';
    public string $GutschriftsDateiBase64 = '';
}
