<?php

namespace Ebay\Sell\Logistics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines a shipment cancellation by the date and time the cancellation
 * request was made and the current status of the request.
 */
class ShipmentCancellation extends AbstractModel
{
    /**
     * The time and date the request was made to cancel the shipment, formatted as an
     * ISO 8601 UTC string.
     *
     * @var string
     */
    public $cancellationRequestedDate = null;

    /**
     * This enum specifies the current cancellation status of a shipment, if a
     * cancellation request has been made. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/logistics/types/api:ShipmentCancellationStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $cancellationStatus = null;
}
