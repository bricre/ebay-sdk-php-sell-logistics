<?php

namespace Ebay\Sell\Logistics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type defines an order from which a seller is including one or more
 * line items in a single package to be shipped.
 */
class Order extends AbstractModel
{
    /**
     * The e-commerce platform or environment where the order was created. Use the
     * value EBAY to get the rates available for eBay orders.
     *
     * @var string
     */
    public $channel = null;

    /**
     * The unique ID of the order supplied by the channel of origin. For eBay orders,
     * this would be the orderId.
     *
     * @var string
     */
    public $orderId = null;
}
