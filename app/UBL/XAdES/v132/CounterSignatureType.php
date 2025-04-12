<?php

namespace UBL\XAdES\v132;

/**
 * Class representing CounterSignatureType
 *
 *
 * XSD Type: CounterSignatureType
 */
class CounterSignatureType
{
    /**
     * @var \UBL\Xmldsig\Signature $signature
     */
    private $signature = null;

    /**
     * Gets as signature
     *
     * @return \UBL\Xmldsig\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \UBL\Xmldsig\Signature $signature
     * @return self
     */
    public function setSignature(\UBL\Xmldsig\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }
}

