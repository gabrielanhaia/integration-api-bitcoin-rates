<?php


namespace IntegrationBitCoinRates\Entity;

/**
 * Class ExchangeRate
 * @package IntegrationBitCoinRates\Entity
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class ExchangeRate
{
    /** @var string $name Name of the currency. */
    protected $name;

    /** @var float $lastRate Last exchange rate. */
    protected $lastRate;

    /** @var float $buyRate Exchange rate to buy. */
    protected $buyRate;

    /** @var float $sellRate Exchange rate to sell. */
    protected $sellRate;

    /** @var string $symbol Currency symbol. */
    protected $symbol;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ExchangeRate
     */
    public function setName(string $name): ExchangeRate
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getLastRate(): float
    {
        return $this->lastRate;
    }

    /**
     * @param float $lastRate
     * @return ExchangeRate
     */
    public function setLastRate(float $lastRate): ExchangeRate
    {
        $this->lastRate = $lastRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getBuyRate(): float
    {
        return $this->buyRate;
    }

    /**
     * @param float $buyRate
     * @return ExchangeRate
     */
    public function setBuyRate(float $buyRate): ExchangeRate
    {
        $this->buyRate = $buyRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getSellRate(): float
    {
        return $this->sellRate;
    }

    /**
     * @param float $sellRate
     * @return ExchangeRate
     */
    public function setSellRate(float $sellRate): ExchangeRate
    {
        $this->sellRate = $sellRate;
        return $this;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return ExchangeRate
     */
    public function setSymbol(string $symbol): ExchangeRate
    {
        $this->symbol = $symbol;
        return $this;
    }
}