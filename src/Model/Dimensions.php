<?php

namespace Ebay\Sell\Logistics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type defines the dimensions of a package to be shipped.
 */
class Dimensions extends AbstractModel
{
    /**
     * The numeric value of the height of the package.
     *
     * @var string
     */
    public $height = null;

    /**
     * The numeric value of the length of the package.
     *
     * @var string
     */
    public $length = null;

    /**
     * The unit of measure used to express the height, length, and width of the
     * package. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/logistics/types/api:LengthUnitOfMeasureEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $unit = null;

    /**
     * The numeric value of the width of the package.
     *
     * @var string
     */
    public $width = null;
}
