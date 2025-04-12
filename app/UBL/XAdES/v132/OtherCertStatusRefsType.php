<?php

namespace App\UBL\XAdES\v132;

/**
 * Class representing OtherCertStatusRefsType
 *
 *
 * XSD Type: OtherCertStatusRefsType
 */
class OtherCertStatusRefsType
{
    /**
     * @var \UBL\XAdES\v132\AnyType[] $otherRef
     */
    private $otherRef = [
        
    ];

    /**
     * Adds as otherRef
     *
     * @return self
     * @param \UBL\XAdES\v132\AnyType $otherRef
     */
    public function addToOtherRef(\UBL\XAdES\v132\AnyType $otherRef)
    {
        $this->otherRef[] = $otherRef;
        return $this;
    }

    /**
     * isset otherRef
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherRef($index)
    {
        return isset($this->otherRef[$index]);
    }

    /**
     * unset otherRef
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherRef($index)
    {
        unset($this->otherRef[$index]);
    }

    /**
     * Gets as otherRef
     *
     * @return \UBL\XAdES\v132\AnyType[]
     */
    public function getOtherRef()
    {
        return $this->otherRef;
    }

    /**
     * Sets a new otherRef
     *
     * @param \UBL\XAdES\v132\AnyType[] $otherRef
     * @return self
     */
    public function setOtherRef(array $otherRef)
    {
        $this->otherRef = $otherRef;
        return $this;
    }
}


