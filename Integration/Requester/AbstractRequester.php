<?php


namespace IntegrationBitCoinRates\Requester;

use GuzzleHttp\Client as GuzzleClient;

/**
 * Class AbstractRequester
 * @package IntegrationBitCoinRates\Requester
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
abstract class AbstractRequester
{
    /** @var GuzzleClient $guzzleClient */
    protected $guzzleClient;

    /** @var string $baseUrlApi Url default API. */
    protected $baseUrlApi;

    /**
     * constructor.
     * @param GuzzleClient $guzzleClient
     * @throws \Exception
     */
    public function __construct(GuzzleClient $guzzleClient)
    {
        $baseUrl = getenv('API_BITCOIN_RATES');

        if (empty($baseUrl)) {
            throw new \Exception('Base url api must be on the .ENV (API_BITCOIN_RATES)');
        }

        $this->guzzleClient = $guzzleClient;
        $this->baseUrlApi = $baseUrl;
    }
}