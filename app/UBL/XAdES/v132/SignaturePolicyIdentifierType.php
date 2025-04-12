<?php

namespace App\UBL\XAdES\v132;

/**
 * Class representing SignaturePolicyIdentifierType
 *
 *
 * XSD Type: SignaturePolicyIdentifierType
 */
class SignaturePolicyIdentifierType
{
    /**
     * @var \UBL\XAdES\v132\SignaturePolicyIdType $signaturePolicyId
     */
    private $signaturePolicyId = null;

    /**
     * @var mixed $signaturePolicyImplied
     */
    private $signaturePolicyImplied = null;

    /**
     * Gets as signaturePolicyId
     *
     * @return \UBL\XAdES\v132\SignaturePolicyIdType
     */
    public function getSignaturePolicyId()
    {
        return $this->signaturePolicyId;
    }

    /**
     * Sets a new signaturePolicyId
     *
     * @param \UBL\XAdES\v132\SignaturePolicyIdType $signaturePolicyId
     * @return self
     */
    public function setSignaturePolicyId(?\UBL\XAdES\v132\SignaturePolicyIdType $signaturePolicyId = null)
    {
        $this->signaturePolicyId = $signaturePolicyId;
        return $this;
    }

    /**
     * Gets as signaturePolicyImplied
     *
     * @return mixed
     */
    public function getSignaturePolicyImplied()
    {
        return $this->signaturePolicyImplied;
    }

    /**
     * Sets a new signaturePolicyImplied
     *
     * @param mixed $signaturePolicyImplied
     * @return self
     */
    public function setSignaturePolicyImplied($signaturePolicyImplied)
    {
        $this->signaturePolicyImplied = $signaturePolicyImplied;
        return $this;
    }
}


