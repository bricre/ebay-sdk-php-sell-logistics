<?php

namespace Ebay\Sell\Logistics\Api;

use Ebay\Sell\Logistics\Model\CreateShipmentFromQuoteRequest as CreateShipmentFromQuoteRequest;
use Ebay\Sell\Logistics\Model\Shipment as ShipmentModel;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Shipment extends AbstractAPI
{
    /**
     * This method creates a &quot;shipment&quot; based on the shippingQuoteId and
     * rateId values supplied in the request. The rate identified by the rateId value
     * specifies the carrier and service for the package shipment, and the rate ID must
     * be contained in the shipping quote identified by the shippingQuoteId value. Call
     * createShippingQuote to retrieve a set of live shipping rates. When you create a
     * shipment, eBay generates a shipping label that you can download and use to ship
     * your package. In a createFromShippingQuote request, sellers can include a list
     * of shipping options they want to add to the base service quoted in the selected
     * rate. The list of available shipping options is specific to each quoted rate and
     * if available, the options are listed in the rate container of the of the
     * shipping quote. In addition to a configurable return-to location and other
     * details about the shipment, the response to this method includes: The shipping
     * carrier and service to be used for the package shipment A list of selected
     * shipping options, if any The shipment tracking number The total shipping cost
     * (the sum cost of the base shipping service and any added options) When you
     * create a shipment, your billing agreement account is charged the sum of the
     * baseShippingCost and the total cost of any additional shipping options you might
     * have selected. Use the URL returned in labelDownloadUrl field, or call
     * downloadLabelFile with the shipmentId value from the response, to download a
     * shipping label for your package. Important! Sellers must set up their payment
     * method with eBay before they can use this method to create a shipment and the
     * associated shipping label.
     *
     * @param CreateShipmentFromQuoteRequest $Model the create shipment from quote
     *                                              request
     *
     * @return ShipmentModel
     */
    public function createFromShippingQuote(CreateShipmentFromQuoteRequest $Model): ShipmentModel
    {
        return $this->client->request('createFromShippingQuote', 'POST', 'shipment/create_from_shipping_quote',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This method retrieves the shipment details for the specified shipment ID. Call
     * createFromShippingQuote to generate a shipment ID.
     *
     * @param string $shipmentId This path parameter specifies the unique eBay-assigned
     *                           ID of the shipment you want to retrieve. The shipmentId value is generated and
     *                           returned by a call to createFromShippingQuote.
     *
     * @return ShipmentModel
     */
    public function get(string $shipmentId): ShipmentModel
    {
        return $this->client->request('getShipment', 'GET', "shipment/{$shipmentId}",
            [
            ]
        );
    }

    /**
     * This method returns the shipping label file that was generated for the
     * shipmentId value specified in the request. Call createFromShippingQuote to
     * generate a shipment ID. Use the Accept HTTP header to specify the format of the
     * returned file. The default file format is a PDF file.
     *
     * @param string $shipmentId This path parameter specifies the unique eBay-assigned
     *                           ID of the shipment associated with the shipping label you want to download. The
     *                           shipmentId value is generated and returned by a call to createFromShippingQuote.
     *
     * @return mixed
     */
    public function downloadLabelFile(string $shipmentId)
    {
        return $this->client->request('downloadLabelFile', 'GET', "shipment/{$shipmentId}/download_label_file",
            [
            ]
        );
    }

    /**
     * This method cancels the shipment associated with the specified shipment ID and
     * the associated shipping label is deleted. When you cancel a shipment, the
     * totalShippingCost of the canceled shipment is refunded to the account
     * established by the user's billing agreement. Note that you cannot cancel a
     * shipment if you have used the associated shipping label.
     *
     * @param string $shipmentId This path parameter specifies the unique eBay-assigned
     *                           ID of the shipment to be canceled. The shipmentId value is generated and
     *                           returned by a call to createFromShippingQuote.
     *
     * @return ShipmentModel
     */
    public function cancel(string $shipmentId): ShipmentModel
    {
        return $this->client->request('cancelShipment', 'POST', "shipment/{$shipmentId}/cancel",
            [
            ]
        );
    }
}
