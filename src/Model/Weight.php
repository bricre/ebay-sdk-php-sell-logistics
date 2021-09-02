<?php

namespace Ebay\Sell\Logistics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type contains information about the weight of an object such as a
 * shipping package.
 */
class Weight extends AbstractModel
{
    /**
     * The unit of measurement used to specify the weight of a shipping package. Both
     * the unit and value fields are required if the weight container is used. If the
     * English system of measurement is being used, the applicable values for weight
     * units are POUND and OUNCE. If the metric system of measurement is being used,
     * the applicable values for weight units are KILOGRAM and GRAM. The metric system
     * is used by most countries outside of the US. For implementation help, refer to
     * <a
     * href='https://developer.ebay.com/api-docs/sell/logistics/types/api:WeightUnitOfMeasureEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $unit = null;

    /**
     * The numeric value of the weight of the package, as measured by the value of
     * unit.
     *
     * @var string
     */
    public $value = null;
}
