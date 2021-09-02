<?php

namespace Ebay\Sell\Logistics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type specifies the details of a geographical address.
 */
class ContactAddress extends AbstractModel
{
    /**
     * The first line of the street address.
     *
     * @var string
     */
    public $addressLine1 = null;

    /**
     * The second line of the street address. Use this field for additional address
     * information, such as a suite or apartment number.
     *
     * @var string
     */
    public $addressLine2 = null;

    /**
     * The city in which the address is located.
     *
     * @var string
     */
    public $city = null;

    /**
     * The country of the address, represented as two-letter ISO 3166 country code. For
     * example, US represents the United States and DE represents Germany. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/logistics/types/bas:CountryCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $countryCode = null;

    /**
     * The county (not country) in which the address is located. Counties typically
     * contain multiple cities or towns.
     *
     * @var string
     */
    public $county = null;

    /**
     * The postal code of the address.
     *
     * @var string
     */
    public $postalCode = null;

    /**
     * The state or province in which the address is located. States and provinces
     * often contain multiple counties.
     *
     * @var string
     */
    public $stateOrProvince = null;
}
