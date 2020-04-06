<?php

namespace IntegrationBitCoinRates\Factory\Requester;

use IntegrationBitCoinRates\Requester\GetExchangeRates;
use GuzzleHttp\Client;

/**
 * Class RequesterSimpleFactory
 * @package IntegrationBitCoinRates\Factory\Requester
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class RequesterSimpleFactory
{
    /**
     * Method responsible for creating a requester class.
     *
     * @param RequesterTypeEnum $requesterTypeEnum
     * @return GetExchangeRates
     * @throws \Exception
     */
    public function make(RequesterTypeEnum $requesterTypeEnum)
    {
        switch ($requesterTypeEnum->value()) {
            case RequesterTypeEnum::REQUESTER_GET_RATES:
                return new GetExchangeRates(new Client);
                break;
            default:
                throw new \Exception('Type of requester not implemented.');
        }
    }
}