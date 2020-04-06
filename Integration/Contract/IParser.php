<?php


namespace IntegrationBitCoinRates\Contract;

/**
 * Interface IParser
 * @package IntegrationBitCoinRates\Contract
 *
 * Default contract for all parsers.
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
interface IParser
{
    /**
     * Parse raw data.
     *
     * @param mixed $rawData
     * @return mixed
     */
    public function parse($rawData);
}