<?php

namespace Ebay\Sell\Logistics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type contains live quote information about a shipping service
 * that's available for a given shipping quote request, including the shipping
 * carrier and service, delivery window, shipping cost, and additional shipping
 * options.
 */
class Rate extends AbstractModel
{
    /**
     * Contains service and pricing information for one or more shipping options that
     * are offered by the carrier and can be purchased in addition to the base shipping
     * service provided by this rate. Shipping options can include items such as
     * INSURANCE and SIGNATURE.
     *
     * @var \Ebay\Sell\Logistics\Model\AdditionalOption[]
     */
    public $additionalOptions = null;

    /**
     * A live quote for the cost that the carrier (identified by shippingCarrierCode)
     * is charging for the shipping service being offered (identified by
     * shippingServiceCode), excluding any additional shipping options.
     *
     * @var \Ebay\Sell\Logistics\Model\Amount
     */
    public $baseShippingCost = null;

    /**
     * The name of the time zone region, as defined in the IANA Time Zone Database, to
     * which the package is being shipped. Delivery dates are calculated relative to
     * this time zone. Note: This is different from a Coordinated Universal Time (UTC)
     * offset. For example, the America/Los_Angeles time zone identifies a region with
     * the UTC standard time offset of -08:00, but so do several other time zones,
     * including America/Tijuana,America/Dawson, and Pacific/Pitcairn.
     *
     * @var string
     */
    public $destinationTimeZone = null;

    /**
     * The latest stated date and time the shipment will be delivered at this rate. The
     * time stamp is formatted as an ISO 8601 string, which is based on the 24-hour
     * Coordinated Universal Time (UTC) clock. Format:
     * [YYYY]-[MM]-[DD]T[HH]:[MM]:[SS].[SSS]Z Example: 2018-08-20T07:09:00.000Z.
     *
     * @var string
     */
    public $maxEstimatedDeliveryDate = null;

    /**
     * The estimated earliest date and time the shipment will be delivered at this
     * rate. The time stamp is formatted as an ISO 8601 UTC string.
     *
     * @var string
     */
    public $minEstimatedDeliveryDate = null;

    /**
     * A list of pickup networks compatible with the shipping service.
     *
     * @var string[]
     */
    public $pickupNetworks = null;

    /**
     * A list of available pickup slots for the package.
     *
     * @var \Ebay\Sell\Logistics\Model\PickupSlot[]
     */
    public $pickupSlots = null;

    /**
     * The type of pickup or drop-off service associated with the pickupSlots time
     * frames. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/logistics/types/api:PickupTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $pickupType = null;

    /**
     * The unique eBay-assigned ID for this shipping rate.
     *
     * @var string
     */
    public $rateId = null;

    /**
     * A list of reasons this rate is recommended. Available values are: BUYER_CHOSEN
     * &mdash; The rate meets or exceeds the requirements of the buyer's preferred
     * shipping option. CHEAPEST_ON_TIME &mdash; The rate is the cheapest rate
     * available that will provide delivery within the seller's time frame commitment.
     * EBAY_PLUS_OK &mdash; The rate complies with the shipping requirements of the
     * eBay Plus program. FASTEST_ON_TIME &mdash; The rate has the fastest shipping
     * time, and will provide delivery within the seller's time frame commitment.
     * GUARANTEED_DELIVERY_OK &mdash; The rate complies with the shipping requirements
     * of the eBay Guaranteed Delivery program.
     *
     * @var string[]|For implementation help, refer to <a
     *                   href='https://developer.ebay.com/api-docs/sell/logistics/types/api:RateRecommendationEnum'>eBay
     *                   API documentation</a>[]
     */
    public $rateRecommendation = null;

    /**
     * The code name of the shipping carrier who will provide the service identified by
     * shippingServiceCode.
     *
     * @var string
     */
    public $shippingCarrierCode = null;

    /**
     * The common name of the shipping carrier.
     *
     * @var string
     */
    public $shippingCarrierName = null;

    /**
     * The code name of the shipping service to be provided by the carrier identified
     * by shippingCarrierCode.
     *
     * @var string
     */
    public $shippingServiceCode = null;

    /**
     * The common name of the shipping service.
     *
     * @var string
     */
    public $shippingServiceName = null;
}
