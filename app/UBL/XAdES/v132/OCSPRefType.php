<?php

namespace App\UBL\XAdES\v132;

/**
 * Class representing OCSPRefType
 *
 *
 * XSD Type: OCSPRefType
 */
class OCSPRefType
{
    /**
     * @var \UBL\XAdES\v132\OCSPIdentifierType $oCSPIdentifier
     */
    private $oCSPIdentifier = null;

    /**
     * @var \UBL\XAdES\v132\DigestAlgAndValueType $digestAlgAndValue
     */
    private $digestAlgAndValue = null;

    /**
     * Gets as oCSPIdentifier
     *
     * @return \UBL\XAdES\v132\OCSPIdentifierType
     */
    public function getOCSPIdentifier()
    {
        return $this->oCSPIdentifier;
    }

    /**
     * Sets a new oCSPIdentifier
     *
     * @param \UBL\XAdES\v132\OCSPIdentifierType $oCSPIdentifier
     * @return self
     */
    public function setOCSPIdentifier(\UBL\XAdES\v132\OCSPIdentifierType $oCSPIdentifier)
    {
        $this->oCSPIdentifier = $oCSPIdentifier;
        return $this;
    }

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
    public function setDigestAlgAndValue(?\UBL\XAdES\v132\DigestAlgAndValueType $digestAlgAndValue = null)
    {
        $this->digestAlgAndValue = $digestAlgAndValue;
        return $this;
    }
}


