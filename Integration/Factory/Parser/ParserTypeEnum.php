<?php


namespace IntegrationBitCoinRates\Factory\Parser;

use Eloquent\Enumeration\AbstractEnumeration;

/**
 * Class ParserTypeEnum
 * @package IntegrationBitCoinRates\Factory\Parser
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 * @method static PARSER_EXCHANGE_RATES()
 */
class ParserTypeEnum extends AbstractEnumeration
{
    /** @var string PARSER_TRANSACTION Type of parser exchange rates (list) response from the API. */
    const PARSER_EXCHANGE_RATES = 'PARSER_EXCHANGE_RATES';
}