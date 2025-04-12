<?php

namespace App\UBL\Xmldsig;

/**
 * Class representing KeyValueType
 *
 *
 * XSD Type: KeyValueType
 */
class KeyValueType
{
    /**
     * @var \UBL\Xmldsig\DSAKeyValue $dSAKeyValue
     */
    private $dSAKeyValue = null;

    /**
     * @var \UBL\Xmldsig\RSAKeyValue $rSAKeyValue
     */
    private $rSAKeyValue = null;

    /**
     * Gets as dSAKeyValue
     *
     * @return \UBL\Xmldsig\DSAKeyValue
     */
    public function getDSAKeyValue()
    {
        return $this->dSAKeyValue;
    }

    /**
     * Sets a new dSAKeyValue
     *
     * @param \UBL\Xmldsig\DSAKeyValue $dSAKeyValue
     * @return self
     */
    public function setDSAKeyValue(?\UBL\Xmldsig\DSAKeyValue $dSAKeyValue = null)
    {
        $this->dSAKeyValue = $dSAKeyValue;
        return $this;
    }

    /**
     * Gets as rSAKeyValue
     *
     * @return \UBL\Xmldsig\RSAKeyValue
     */
    public function getRSAKeyValue()
    {
        return $this->rSAKeyValue;
    }

    /**
     * Sets a new rSAKeyValue
     *
     * @param \UBL\Xmldsig\RSAKeyValue $rSAKeyValue
     * @return self
     */
    public function setRSAKeyValue(?\UBL\Xmldsig\RSAKeyValue $rSAKeyValue = null)
    {
        $this->rSAKeyValue = $rSAKeyValue;
        return $this;
    }
}


