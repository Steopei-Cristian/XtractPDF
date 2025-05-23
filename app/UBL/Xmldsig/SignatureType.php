<?php

namespace App\UBL\Xmldsig;

/**
 * Class representing SignatureType
 *
 *
 * XSD Type: SignatureType
 */
class SignatureType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \App\UBL\Xmldsig\SignedInfo $signedInfo
     */
    private $signedInfo = null;

    /**
     * @var \App\UBL\Xmldsig\SignatureValue $signatureValue
     */
    private $signatureValue = null;

    /**
     * @var \App\UBL\Xmldsig\KeyInfo $keyInfo
     */
    private $keyInfo = null;

    /**
     * @var \App\UBL\Xmldsig\ObjectXsd[] $object
     */
    private $object = [
        
    ];

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as signedInfo
     *
     * @return \App\UBL\Xmldsig\SignedInfo
     */
    public function getSignedInfo()
    {
        return $this->signedInfo;
    }

    /**
     * Sets a new signedInfo
     *
     * @param \App\UBL\Xmldsig\SignedInfo $signedInfo
     * @return self
     */
    public function setSignedInfo(\App\UBL\Xmldsig\SignedInfo $signedInfo)
    {
        $this->signedInfo = $signedInfo;
        return $this;
    }

    /**
     * Gets as signatureValue
     *
     * @return \App\UBL\Xmldsig\SignatureValue
     */
    public function getSignatureValue()
    {
        return $this->signatureValue;
    }

    /**
     * Sets a new signatureValue
     *
     * @param \App\UBL\Xmldsig\SignatureValue $signatureValue
     * @return self
     */
    public function setSignatureValue(\App\UBL\Xmldsig\SignatureValue $signatureValue)
    {
        $this->signatureValue = $signatureValue;
        return $this;
    }

    /**
     * Gets as keyInfo
     *
     * @return \App\UBL\Xmldsig\KeyInfo
     */
    public function getKeyInfo()
    {
        return $this->keyInfo;
    }

    /**
     * Sets a new keyInfo
     *
     * @param \App\UBL\Xmldsig\KeyInfo $keyInfo
     * @return self
     */
    public function setKeyInfo(?\App\UBL\Xmldsig\KeyInfo $keyInfo = null)
    {
        $this->keyInfo = $keyInfo;
        return $this;
    }

    /**
     * Adds as object
     *
     * @return self
     * @param \App\UBL\Xmldsig\ObjectXsd $object
     */
    public function addToObject(\App\UBL\Xmldsig\ObjectXsd $object)
    {
        $this->object[] = $object;
        return $this;
    }

    /**
     * isset object
     *
     * @param int|string $index
     * @return bool
     */
    public function issetObject($index)
    {
        return isset($this->object[$index]);
    }

    /**
     * unset object
     *
     * @param int|string $index
     * @return void
     */
    public function unsetObject($index)
    {
        unset($this->object[$index]);
    }

    /**
     * Gets as object
     *
     * @return \App\UBL\Xmldsig\ObjectXsd[]
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Sets a new object
     *
     * @param \App\UBL\Xmldsig\ObjectXsd[] $object
     * @return self
     */
    public function setObject(?array $object = null)
    {
        $this->object = $object;
        return $this;
    }
}

