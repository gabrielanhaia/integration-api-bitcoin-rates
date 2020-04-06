<?php


namespace IntegrationBitCoinRates\Factory\Requester;

use Eloquent\Enumeration\AbstractEnumeration;

/**
 * Class RequesterTypeEnum
 * @package IntegrationBitCoinRates\Factory\Requester
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 * @method static REQUESTER_GET_RATES()
 */
class RequesterTypeEnum extends AbstractEnumeration
{
    /** @var string REQUESTER_MAKE_TRANSACTION Requester responsible for getting exchange rates updated.  */
    const REQUESTER_GET_RATES = 'REQUESTER_GET_RATES';
}