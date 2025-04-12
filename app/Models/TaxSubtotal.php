<?php

namespace App\Models;

class TaxSubtotal
{
    private float $taxableAmount;
    private float $taxAmount;
    private string $taxCategory;
    private string $taxPercent;

    public function getTaxableAmount(): float
    {
        return $this->taxableAmount;
    }

    public function setTaxableAmount(float $taxableAmount): void
    {
        $this->taxableAmount = $taxableAmount;
    }

    public function getTaxAmount(): float
    {
        return $this->taxAmount;
    }

    public function setTaxAmount(float $taxAmount): void
    {
        $this->taxAmount = $taxAmount;
    }

    public function getTaxCategory(): string
    {
        return $this->taxCategory;
    }

    public function setTaxCategory(string $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }

    public function getTaxPercent(): string
    {
        return $this->taxPercent;
    }

    public function setTaxPercent(string $taxPercent): void
    {
        $this->taxPercent = $taxPercent;
    }
} 