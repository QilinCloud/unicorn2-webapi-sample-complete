<?php
declare(strict_types=1);

/**
 * Mirrors order cancellation reason values used by Unicorn.
 */
abstract class StornoReason
{
    const LowStock = 0;
    const CancelledByCustomer = 1;
    const PaymentRefused = 2;
    const LitigationSuspicion = 3;
    const FraudSuspicion = 4;
    const RefusedBySeller = 5;
    const NoShipment = 6;
    const NonPickedUpByCustomer = 7;
    const AutomaticCancellation = 8;
    const WrongPrice = 9;
    const WrongProductData = 10;
    const CustomerAgreement = 11;
    const ShippingAddressUndeliverable = 12;
    const CancelledByMarketplace = 13;
    const DelayedInventory = 14;
    const ProductExchange = 15;
    const Undefined = 16;
}
