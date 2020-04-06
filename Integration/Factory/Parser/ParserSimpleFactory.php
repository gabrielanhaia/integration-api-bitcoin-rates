<?php

namespace IntegrationBitCoinRates\Factory\Parser;

use IntegrationBitCoinRates\Contract\IParser;
use IntegrationBitCoinRates\Parser\ExchangeRatesParser;

/**
 * Class ParserFactory
 * @package IntegrationBitCoinRates\Factory\Parser
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class ParserSimpleFactory
{
    /**
     * Method responsible for creating and instance new parsers.
     *
     * @param ParserTypeEnum $parserTypeEnum
     * @return ExchangeRatesParser
     * @throws \Exception
     */
    public function make(ParserTypeEnum $parserTypeEnum): IParser
    {
        switch ($parserTypeEnum->value()) {
            case ParserTypeEnum::PARSER_EXCHANGE_RATES:
                return new ExchangeRatesParser;
                break;
            default:
                throw new \Exception('Type of parser not implemented.');
        }
    }
}