<?php

namespace Ebay\Sell\Logistics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type contains contact information for an individual buyer or
 * seller.
 */
class Contact extends AbstractModel
{
    /**
     * The company name with which the contact is associated.
     *
     * @var string
     */
    public $companyName = null;

    /**
     * The details of the contact's geographical address.
     *
     * @var \Ebay\Sell\Logistics\Model\ContactAddress
     */
    public $contactAddress = null;

    /**
     * The contact's full name.
     *
     * @var string
     */
    public $fullName = null;

    /**
     * The contact's primary telephone number.
     *
     * @var \Ebay\Sell\Logistics\Model\PhoneNumber
     */
    public $primaryPhone = null;
}
