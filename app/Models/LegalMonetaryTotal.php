<?php

namespace App\Models;

class LegalMonetaryTotal
{
    private float $lineExtensionAmount;
    private float $taxExclusiveAmount;
    private float $taxInclusiveAmount;
    private float $payableAmount;

    public function getLineExtensionAmount(): float
    {
        return $this->lineExtensionAmount;
    }

    public function setLineExtensionAmount(float $lineExtensionAmount): void
    {
        $this->lineExtensionAmount = $lineExtensionAmount;
    }

    public function getTaxExclusiveAmount(): float
    {
        return $this->taxExclusiveAmount;
    }

    public function setTaxExclusiveAmount(float $taxExclusiveAmount): void
    {
        $this->taxExclusiveAmount = $taxExclusiveAmount;
    }

    public function getTaxInclusiveAmount(): float
    {
        return $this->taxInclusiveAmount;
    }

    public function setTaxInclusiveAmount(float $taxInclusiveAmount): void
    {
        $this->taxInclusiveAmount = $taxInclusiveAmount;
    }

    public function getPayableAmount(): float
    {
        return $this->payableAmount;
    }

    public function setPayableAmount(float $payableAmount): void
    {
        $this->payableAmount = $payableAmount;
    }
} 