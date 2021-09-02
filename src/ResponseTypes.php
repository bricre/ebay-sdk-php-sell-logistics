<?php

namespace Ebay\Sell\Logistics;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'createShippingQuote' => [
            '201.' => 'Ebay\\Sell\\Logistics\\Model\\ShippingQuote',
        ],
        'getShippingQuote' => [
            '200.' => 'Ebay\\Sell\\Logistics\\Model\\ShippingQuote',
        ],
        'createFromShippingQuote' => [
            '201.' => 'Ebay\\Sell\\Logistics\\Model\\Shipment',
        ],
        'getShipment' => [
            '200.' => 'Ebay\\Sell\\Logistics\\Model\\Shipment',
        ],
        'cancelShipment' => [
            '200.' => 'Ebay\\Sell\\Logistics\\Model\\Shipment',
        ],
    ];
}
