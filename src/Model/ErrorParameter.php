<?php

namespace Ebay\Sell\Logistics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Container for an error parameter.
 */
class ErrorParameter extends AbstractModel
{
    /**
     * Name of the entity that threw the error.
     *
     * @var string
     */
    public $name = null;

    /**
     * A description of the error.
     *
     * @var string
     */
    public $value = null;
}
