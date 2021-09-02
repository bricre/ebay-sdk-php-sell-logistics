<?php

namespace Ebay\Sell\Logistics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type defines a shipment for a specific package (for example, a box
 * or letter). Shipments are always linked to a purchased shipping label.
 */
class Shipment extends AbstractModel
{
    /**
     * Cancellation status for the package, if one exists.
     *
     * @var \Ebay\Sell\Logistics\Model\ShipmentCancellation
     */
    public $cancellation = null;

    /**
     * The date and time the shipment was created, formatted as an ISO 8601 string,
     * which is based on the 24-hour Coordinated Universal Time (UTC) clock. Format:
     * [YYYY]-[MM]-[DD]T[HH]:[MM]:[SS].[SSS]Z Example: 2018-08-20T07:09:00.000Z.
     *
     * @var string
     */
    public $creationDate = null;

    /**
     * If supported by the selected shipping carrier, this field can contain optional
     * seller text to be printed on the shipping label.
     *
     * @var string
     */
    public $labelCustomMessage = null;

    /**
     * The direct URL the seller can use to download an image of the shipping label. By
     * default, the file format is PDF. See downloadLabelFile for requesting different
     * response file formats.
     *
     * @var string
     */
    public $labelDownloadUrl = null;

    /**
     * The seller's desired label size. The support for multi-sized labels is
     * shipping-carrier specific and if the size requested in the
     * creaateFromShippingQuote call matches a size the carrier supports, the value
     * will be represented here in the shipment. Currently, the only valid value is:
     * 4&quot;x6&quot;.
     *
     * @var string
     */
    public $labelSize = null;

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
     * The weight and dimensions of the package.
     *
     * @var \Ebay\Sell\Logistics\Model\PackageSpecification
     */
    public $packageSpecification = null;

    /**
     * The shipping rate that the seller has chosen to purchase for this shipment. Each
     * rate, identified by a rateId, contains the offered base service, options, and
     * shipping parameters that were selected for the package shipment.
     *
     * @var \Ebay\Sell\Logistics\Model\PurchasedRate
     */
    public $rate = null;

    /**
     * The address and contact details that should be used for item returns. Sellers
     * have the option to define a return address that is different from their shipFrom
     * address. If not specified, the return address defaults to the shipFrom address
     * in the shipping quote.
     *
     * @var \Ebay\Sell\Logistics\Model\Contact
     */
    public $returnTo = null;

    /**
     * The address and contact details for the origin of the package shipment.
     *
     * @var \Ebay\Sell\Logistics\Model\Contact
     */
    public $shipFrom = null;

    /**
     * The unique eBay-assigned ID for the shipment. The ID is generated when the
     * shipment is created by a call to createFromShippingQuote.
     *
     * @var string
     */
    public $shipmentId = null;

    /**
     * A unique carrier-assigned ID string that can be used to track the shipment.
     *
     * @var string
     */
    public $shipmentTrackingNumber = null;

    /**
     * The address and contact details for the destination of the shipment.
     *
     * @var \Ebay\Sell\Logistics\Model\Contact
     */
    public $shipTo = null;
}
