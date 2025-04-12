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
     * @var \UBL\XAdES\v132\DigestAlgAndValueType $digestAlgAndValue
     */
    private $digestAlgAndValue = null;

    /**
     * @var \UBL\XAdES\v132\CRLIdentifierType $cRLIdentifier
     */
    private $cRLIdentifier = null;

    /**
     * Gets as digestAlgAndValue
     *
     * @return \UBL\XAdES\v132\DigestAlgAndValueType
     */
    public function getDigestAlgAndValue()
    {
        return $this->digestAlgAndValue;
    }

    /**
     * Sets a new digestAlgAndValue
     *
     * @param \UBL\XAdES\v132\DigestAlgAndValueType $digestAlgAndValue
     * @return self
     */
    public function setDigestAlgAndValue(\UBL\XAdES\v132\DigestAlgAndValueType $digestAlgAndValue)
    {
        $this->digestAlgAndValue = $digestAlgAndValue;
        return $this;
    }

    /**
     * Gets as cRLIdentifier
     *
     * @return \UBL\XAdES\v132\CRLIdentifierType
     */
    public function getCRLIdentifier()
    {
        return $this->cRLIdentifier;
    }

    /**
     * Sets a new cRLIdentifier
     *
     * @param \UBL\XAdES\v132\CRLIdentifierType $cRLIdentifier
     * @return self
     */
    public function setCRLIdentifier(?\UBL\XAdES\v132\CRLIdentifierType $cRLIdentifier = null)
    {
        $this->cRLIdentifier = $cRLIdentifier;
        return $this;
    }
}


