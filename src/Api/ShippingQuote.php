<?php

namespace Ebay\Sell\Logistics\Api;

use Ebay\Sell\Logistics\Model\ShippingQuote as ShippingQuoteModel;
use Ebay\Sell\Logistics\Model\ShippingQuoteRequest as ShippingQuoteRequest;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class ShippingQuote extends AbstractAPI
{
    /**
     * The createShippingQuote method returns a shipping quote that contains a list of
     * live &quot;rates.&quot; Each rate represents an offer made by a shipping carrier
     * for a specific service and each offer has a live quote for the base service
     * cost. Rates have a time window in which they are &quot;live,&quot; and rates
     * expire when their purchase window ends. If offered by the carrier, rates can
     * include shipping options (and their associated prices), and users can add any
     * offered shipping option to the base service should they desire. Also, depending
     * on the services required, rates can also include pickup and delivery windows.
     * Each rate is for a single package and is based on the following information: The
     * shipping origin The shipping destination The package size (weight and
     * dimensions) Rates are identified by a unique eBay-assigned rateId and rates are
     * based on price points, pickup and delivery time frames, and other user
     * requirements. Because each rate offered must be compliant with the eBay shipping
     * program, all rates reflect eBay-negotiated prices. The various rates returned in
     * a shipping quote offer the user a choice from which they can choose a shipping
     * service that best fits their needs. Select the rate for your shipment and using
     * the associated rateId, call cerateFromShippingQuote to create a shipment and
     * generate a shipping label that you can use to ship the package.
     *
     * @param ShippingQuoteRequest $Model the request object for createShippingQuote
     *
     * @return ShippingQuoteModel
     */
    public function create(ShippingQuoteRequest $Model): ShippingQuoteModel
    {
        return $this->client->request('createShippingQuote', 'POST', 'shipping_quote',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This method retrieves the complete details of the shipping quote associated with
     * the specified shippingQuoteId value. A &quot;shipping quote&quot; pertains to a
     * single specific package and contains a set of shipping &quot;rates&quot; that
     * quote the cost to ship the package by different shipping carriers and services.
     * The quotes are based on the package's origin, destination, and size. Call
     * createShippingQuote to create a shippingQuoteId.
     *
     * @param string $shippingQuoteId This path parameter specifies the unique
     *                                eBay-assigned ID of the shipping quote you want to retrieve. The shippingQuoteId
     *                                value is generated and returned by a call to createShippingQuote.
     *
     * @return ShippingQuoteModel
     */
    public function get(string $shippingQuoteId): ShippingQuoteModel
    {
        return $this->client->request('getShippingQuote', 'GET', "shipping_quote/{$shippingQuoteId}",
            [
            ]
        );
    }
}
