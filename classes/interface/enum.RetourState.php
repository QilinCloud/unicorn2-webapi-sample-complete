<?php
declare(strict_types=1);

/**
 * Mirrors return-announcement state values used by Unicorn returns.
 */
abstract class RetourState
{
    const Unknown = 0;
    const Announced = 1;
    const Shipped = 2;
    const Arrived = 3;
    const UnderReview = 4;
    const Completed = 5;
}
