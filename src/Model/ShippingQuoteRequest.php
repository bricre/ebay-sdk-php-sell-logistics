<?php

namespace Ebay\Sell\Logistics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type defines the request body for createShippingQuote. Sellers
 * request a quote for a shipment by defining the &quot;To&quot; and
 * &quot;From&quot; addresses for the package, plus the package's size. Carriers
 * respond by offering up a &quot;rate&quot; for the service of theirs that best
 * fits seller's needs.
 */
class ShippingQuoteRequest extends AbstractModel
{
    /**
     * A seller-defined list that contains information about the orders in the package.
     * This allows sellers to include information about the line items in the package
     * with the shipment information. A package can contain any number of line items
     * from one or more orders, providing they all ship in the same package. Maximum
     * list size: 10.
     *
     * @var \Ebay\Sell\Logistics\Model\Order[]
     */
    public $orders = null;

    /**
     * Declares the weight and dimensions of the package.
     *
     * @var \Ebay\Sell\Logistics\Model\PackageSpecification
     */
    public $packageSpecification = null;

    /**
     * The address and contact details pertaining to the origin of the shipment.
     *
     * @var \Ebay\Sell\Logistics\Model\Contact
     */
    public $shipFrom = null;

    /**
     * The address and contact details pertaining to the shipment's destination.
     *
     * @var \Ebay\Sell\Logistics\Model\Contact
     */
    public $shipTo = null;
}
