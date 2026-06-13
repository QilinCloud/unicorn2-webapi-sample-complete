<?php
declare(strict_types=1);

/**
 * Mirrors refund type values used by Unicorn invoice and refund data.
 */
abstract class GutschriftType
{
    const Other = 0;
    const Return = 1;
    const Cancellation = 2;
}
