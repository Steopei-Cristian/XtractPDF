<?php

namespace App\UBL\XAdES\v132;

/**
 * Class representing CRLRefType
 *
 *
 * XSD Type: CRLRefType
 */
class CRLRefType
{
    /**
     * @var \App\UBL\XAdES\v132\DigestAlgAndValueType $digestAlgAndValue
     */
    private $digestAlgAndValue = null;

    /**
     * @var \App\UBL\XAdES\v132\CRLIdentifierType $cRLIdentifier
     */
    private $cRLIdentifier = null;

    /**
     * Gets as digestAlgAndValue
     *
     * @return \App\UBL\XAdES\v132\DigestAlgAndValueType
     */
    public function getDigestAlgAndValue()
    {
        return $this->digestAlgAndValue;
    }

    /**
     * Sets a new digestAlgAndValue
     *
     * @param \App\UBL\XAdES\v132\DigestAlgAndValueType $digestAlgAndValue
     * @return self
     */
    public function setDigestAlgAndValue(\App\UBL\XAdES\v132\DigestAlgAndValueType $digestAlgAndValue)
    {
        $this->digestAlgAndValue = $digestAlgAndValue;
        return $this;
    }

    /**
     * Gets as cRLIdentifier
     *
     * @return \App\UBL\XAdES\v132\CRLIdentifierType
     */
    public function getCRLIdentifier()
    {
        return $this->cRLIdentifier;
    }

    /**
     * Sets a new cRLIdentifier
     *
     * @param \App\UBL\XAdES\v132\CRLIdentifierType $cRLIdentifier
     * @return self
     */
    public function setCRLIdentifier(?\App\UBL\XAdES\v132\CRLIdentifierType $cRLIdentifier = null)
    {
        $this->cRLIdentifier = $cRLIdentifier;
        return $this;
    }
}

