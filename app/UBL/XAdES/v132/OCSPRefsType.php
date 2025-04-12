<?php

namespace App\UBL\XAdES\v132;

/**
 * Class representing OCSPRefsType
 *
 *
 * XSD Type: OCSPRefsType
 */
class OCSPRefsType
{
    /**
     * @var \App\UBL\XAdES\v132\OCSPRefType[] $oCSPRef
     */
    private $oCSPRef = [
        
    ];

    /**
     * Adds as oCSPRef
     *
     * @return self
     * @param \App\UBL\XAdES\v132\OCSPRefType $oCSPRef
     */
    public function addToOCSPRef(\App\UBL\XAdES\v132\OCSPRefType $oCSPRef)
    {
        $this->oCSPRef[] = $oCSPRef;
        return $this;
    }

    /**
     * isset oCSPRef
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOCSPRef($index)
    {
        return isset($this->oCSPRef[$index]);
    }

    /**
     * unset oCSPRef
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOCSPRef($index)
    {
        unset($this->oCSPRef[$index]);
    }

    /**
     * Gets as oCSPRef
     *
     * @return \App\UBL\XAdES\v132\OCSPRefType[]
     */
    public function getOCSPRef()
    {
        return $this->oCSPRef;
    }

    /**
     * Sets a new oCSPRef
     *
     * @param \App\UBL\XAdES\v132\OCSPRefType[] $oCSPRef
     * @return self
     */
    public function setOCSPRef(array $oCSPRef)
    {
        $this->oCSPRef = $oCSPRef;
        return $this;
    }
}

