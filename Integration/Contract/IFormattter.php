<?php


namespace IntegrationBitCoinRates\Contract;

/**
 * Interface IFormattter
 * @package IntegrationBitCoinRates\Contract
 *
 * Default contract for all parsers.
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
interface IFormattter
{
    /**
     * Parse raw data.
     *
     * @param mixed $rawData
     * @return mixed
     */
    public function format($rawData);
}