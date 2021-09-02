<?php

namespace Ebay\Sell\Logistics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type contains information about a shipping option that can be
 * purchased in addition to the base shipping cost of a recommended rate.
 * Additional options for each rate are defined, named, and offered by the selected
 * shipping carrier. Examples include shipping insurance or the requirement for a
 * recipient signature.
 */
class AdditionalOption extends AbstractModel
{
    /**
     * The monetary cost of the additional shipping option identified by the optionType
     * field.
     *
     * @var \Ebay\Sell\Logistics\Model\Amount
     */
    public $additionalCost = null;

    /**
     * The name of a shipping option that can be purchased in addition to the base
     * shipping cost of this rate. The value supplied in this field must match exactly
     * the option name as supplied by the selected rate.
     *
     * @var string
     */
    public $optionType = null;
}
