<?php


class Movement
{
    public string $currency;
    public float $amount;

    public function __construct(string $currency, float $amount)
    {
        $this->currency = $currency;
        $this->amount = $amount;

        $this->Movement($currency, $amount);
    }

    public function getCurrency(): int
    {
        return $this->currency;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    function Movement(string $currency,float $amount): void
    {
        $this->currency = $currency;
        $this->amount += $amount;
    }
}