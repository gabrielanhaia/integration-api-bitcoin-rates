<?php

namespace IntegrationBitCoinRates;

use IntegrationBitCoinRates\Entity\ExchangeRate as ExchangeRateEntity;
use IntegrationBitCoinRates\Factory\Parser\ParserSimpleFactory;
use IntegrationBitCoinRates\Factory\Parser\ParserTypeEnum;
use IntegrationBitCoinRates\Factory\Requester\RequesterSimpleFactory;
use IntegrationBitCoinRates\Factory\Requester\RequesterTypeEnum;

/**
 * Class Client (This class is following the Facade pattern).
 * @package IntegrationBitCoinRates\Integration
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class Client
{
    /** @var ParserSimpleFactory $parserFactory Factory for parsers. */
    private $parserFactory;

    /** @var RequesterSimpleFactory $requesterFactory Factory for requesters. */
    private $requesterFactory;

    /**
     * Client constructor.
     *
     * @param ParserSimpleFactory|null $parserFactory
     * @param RequesterSimpleFactory|null $requesterFactory
     */
    public function __construct(
        ParserSimpleFactory $parserFactory = null,
        RequesterSimpleFactory $requesterFactory = null
    )
    {
        $this->parserFactory = $parserFactory ?? (new ParserSimpleFactory);
        $this->requesterFactory = $requesterFactory ?? (new RequesterSimpleFactory);
    }

    /**
     * Method responsible for make a transfer.
     *
     * @return ExchangeRateEntity[]|array
     * @throws \Exception
     */
    public function getExchangeRates(): array
    {
        $parser = $this->parserFactory->make(ParserTypeEnum::PARSER_EXCHANGE_RATES());
        $requester = $this->requesterFactory->make(RequesterTypeEnum::REQUESTER_GET_RATES());

        $rawResponse = $requester->getExchangeRates();
        $exchangeRates = $parser->parse($rawResponse);

        return $exchangeRates;
    }

    /**
     * Another example method.
     * TODO: Implement it in the future.
     *
     * @param string $filter
     */
    public function getSpecificExchangeRate(string $filter)
    {
        // Method created as an example.
    }

    /**
     * Another example method.
     * TODO: Implement it in the future.
     *
     * @param string $currencyName
     * @param float $rate
     */
    public function sendExchangeRate(string $currencyName, float $rate)
    {
        // Method created as an example.
    }
}