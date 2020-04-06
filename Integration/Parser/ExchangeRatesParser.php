<?php


namespace IntegrationBitCoinRates\Parser;

use IntegrationBitCoinRates\Contract\IParser;
use IntegrationBitCoinRates\Entity\ExchangeRate;

/**
 * Class ExchangeRatesParser
 * @package IntegrationBitCoinRates\Parser
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class ExchangeRatesParser implements IParser
{
    /**
     * Parse raw data.
     *
     * @param mixed $rawData
     * @return ExchangeRate[]|array
     * @throws \Exception
     */
    public function parse($rawData)
    {
        $arrayRawData = json_decode($rawData, true);

        $exchangeRateEntities = [];

        foreach ($arrayRawData as $currencyName => $value) {
            $exchangeRateEntities[] = (new ExchangeRate)
                ->setName($currencyName)
                ->setBuyRate($value['buy'])
                ->setLastRate($value['last'])
                ->setSellRate($value['sell']);
        }

        return $exchangeRateEntities;
    }
}