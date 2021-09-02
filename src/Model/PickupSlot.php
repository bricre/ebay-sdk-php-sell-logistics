<?php

namespace Ebay\Sell\Logistics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type defines a time window for the pickup of a package.
 */
class PickupSlot extends AbstractModel
{
    /**
     * The date and time the pickup slot ends, formatted as an ISO 8601 string, which
     * is based on the 24-hour Coordinated Universal Time (UTC) clock. Format:
     * [YYYY]-[MM]-[DD]T[HH]:[MM]:[SS].[SSS]Z Example: 2018-08-20T07:09:00.000Z.
     *
     * @var string
     */
    public $pickupSlotEndTime = null;

    /**
     * Seller-defined name for the pickup slot.
     *
     * @var string
     */
    public $pickupSlotId = null;

    /**
     * The date and time the pickup slot begins, formatted as an ISO 8601 UTC string.
     *
     * @var string
     */
    public $pickupSlotStartTime = null;

    /**
     * The time zone of the pickup location, returned as Time Zone Database ID (also
     * know as an Olson time zone ID).
     *
     * @var string
     */
    public $pickupSlotTimeZone = null;
}
