<?php

namespace App\Models;

class TaxTotal
{
    private float $taxAmount;
    private array $taxSubtotal;

    public function __construct()
    {
        $this->taxSubtotal = [];
    }

    public function getTaxAmount(): float
    {
        return $this->taxAmount;
    }

    public function setTaxAmount(float $taxAmount): void
    {
        $this->taxAmount = $taxAmount;
    }

    public function getTaxSubtotal(): array
    {
        return $this->taxSubtotal;
    }

    public function addTaxSubtotal(TaxSubtotal $taxSubtotal): void
    {
        $this->taxSubtotal[] = $taxSubtotal;
    }
} 