<?php

namespace App\Models;

class Price
{
    private float $priceAmount;
    private string $currencyID;

    public function getPriceAmount(): float
    {
        return $this->priceAmount;
    }

    public function setPriceAmount(float $priceAmount): void
    {
        $this->priceAmount = $priceAmount;
    }

    public function getCurrencyID(): string
    {
        return $this->currencyID;
    }

    public function setCurrencyID(string $currencyID): void
    {
        $this->currencyID = $currencyID;
    }
} 