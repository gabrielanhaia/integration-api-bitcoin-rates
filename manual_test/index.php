<?php

require_once('../vendor/autoload.php');

putenv('API_BITCOIN_RATES=https://blockchain.info');

$client = new IntegrationBitCoinRates\Client;

try {
    $exchangeRates = $client->getExchangeRates();
} catch (Exception $e) {
    dd($e->getMessage());
}

dd($exchangeRates);