<?php

namespace Ebay\Sell\Logistics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type specifies the dimensions and weight of a package.
 */
class PackageSpecification extends AbstractModel
{
    /**
     * Declares the height, length, width, and unit of measure for the package to be
     * shipped.
     *
     * @var \Ebay\Sell\Logistics\Model\Dimensions
     */
    public $dimensions = null;

    /**
     * Declares the weight of the package.
     *
     * @var \Ebay\Sell\Logistics\Model\Weight
     */
    public $weight = null;
}
