<?php

namespace IntegrationBitCoinRates\Requester;

use Exception;

/**
 * Class IntegrationBitCoinRates Responsible for getting consumes the endpoint to get the exchange rates updated..
 * @package IntegrationBitCoinRates\Requester
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class GetExchangeRates extends AbstractRequester
{
    /**
     * Method responsible for getting the exchange rates.
     *
     * @return string
     * @throws Exception
     */
    public function getExchangeRates(): string
    {
        $urlApi = "{$this->baseUrlApi}/ticker";

        $response = $this->guzzleClient->get($urlApi);

        // TODO: Create enum for the HTTP status codes.
        if ($response->getStatusCode() !== 200) {
            throw new \Exception('Error getting the exchange rates list.');
        }

        return $response->getBody()
            ->getContents();
    }
}