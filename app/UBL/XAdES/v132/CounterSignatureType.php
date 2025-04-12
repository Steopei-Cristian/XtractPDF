<?php

namespace App\UBL\XAdES\v132;

/**
 * Class representing CounterSignatureType
 *
 *
 * XSD Type: CounterSignatureType
 */
class CounterSignatureType
{
    /**
     * @var \App\UBL\Xmldsig\Signature $signature
     */
    private $signature = null;

    /**
     * Gets as signature
     *
     * @return \App\UBL\Xmldsig\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \App\UBL\Xmldsig\Signature $signature
     * @return self
     */
    public function setSignature(\App\UBL\Xmldsig\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }
}

