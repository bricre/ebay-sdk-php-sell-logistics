<?php

namespace Ebay\Sell\Logistics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type describes a &quot;shipping quote,&quot; which contains the
 * parameters for a package shipment. The shipping quote contains a list of
 * &quot;live quotes&quot; or rates for the shipment. Rates are offerd by a carrier
 * for a particular service, of set of services, for shipping the package. Included
 * in the shipping quote are the package specifications, the shipment's origin and
 * destination addresses, and the shipping parameters specified by the seller. Use
 * the rateId value to select the specific service you want when you create a
 * shipment by calling createFromShippingQuote.
 */
class ShippingQuote extends AbstractModel
{
    /**
     * The date and time this quote was created, expressed as an ISO 8601 UTC string.
     *
     * @var string
     */
    public $creationDate = null;

    /**
     * The last date and time that this quote will be honored, expressed as an ISO 8601
     * UTC string. After this time the quote expires and the expressed rates can no
     * longer be purchased.
     *
     * @var string
     */
    public $expirationDate = null;

    /**
     * This list value is optionally assigned by the seller. When present, each element
     * in the returned list contains seller-assigned information about an order (such
     * as an order number). Because a package can contain all or part of one or more
     * orders, this field provides a way for sellers to identify the packages that
     * contain specific orders.
     *
     * @var \Ebay\Sell\Logistics\Model\Order[]
     */
    public $orders = null;

    /**
     * The weight and dimensions of the package covered by this shipping quote.
     *
     * @var \Ebay\Sell\Logistics\Model\PackageSpecification
     */
    public $packageSpecification = null;

    /**
     * A list of rates where each rate, as identified by a rateId, contains information
     * about a specific shipping service offered by a carrier. Rates include shipping
     * carrier and service, the to and from locations, the pickup and delivery windows,
     * the seller's shipping parameters, the service constraints, and the cost for the
     * base service and a list of additional shipping options. Each rate offered is
     * supported by a label service where you can purchase the rate, and associated
     * shipping label, via a call to createFromShippingQuote.
     *
     * @var \Ebay\Sell\Logistics\Model\Rate[]
     */
    public $rates = null;

    /**
     * The address and contact details for the origin of the shipment.
     *
     * @var \Ebay\Sell\Logistics\Model\Contact
     */
    public $shipFrom = null;

    /**
     * The unique eBay-assigned ID for this shipping quote. The value of this field is
     * associated with a specific package, based on its origin, destination, and size.
     *
     * @var string
     */
    public $shippingQuoteId = null;

    /**
     * The address and contact details for the origin of the shipment.
     *
     * @var \Ebay\Sell\Logistics\Model\Contact
     */
    public $shipTo = null;

    /**
     * A list of any warnings triggered by the request.
     *
     * @var \Ebay\Sell\Logistics\Model\Error[]
     */
    public $warnings = null;
}
