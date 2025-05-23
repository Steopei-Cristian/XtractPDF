<?php

namespace App\UBL\XAdES\v132;

/**
 * Class representing CertificateValuesType
 *
 *
 * XSD Type: CertificateValuesType
 */
class CertificateValuesType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \App\UBL\XAdES\v132\EncapsulatedPKIDataType[] $encapsulatedX509Certificate
     */
    private $encapsulatedX509Certificate = [
        
    ];

    /**
     * @var \App\UBL\XAdES\v132\AnyType[] $otherCertificate
     */
    private $otherCertificate = [
        
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
     * Adds as encapsulatedX509Certificate
     *
     * @return self
     * @param \App\UBL\XAdES\v132\EncapsulatedPKIDataType $encapsulatedX509Certificate
     */
    public function addToEncapsulatedX509Certificate(\App\UBL\XAdES\v132\EncapsulatedPKIDataType $encapsulatedX509Certificate)
    {
        $this->encapsulatedX509Certificate[] = $encapsulatedX509Certificate;
        return $this;
    }

    /**
     * isset encapsulatedX509Certificate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEncapsulatedX509Certificate($index)
    {
        return isset($this->encapsulatedX509Certificate[$index]);
    }

    /**
     * unset encapsulatedX509Certificate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEncapsulatedX509Certificate($index)
    {
        unset($this->encapsulatedX509Certificate[$index]);
    }

    /**
     * Gets as encapsulatedX509Certificate
     *
     * @return \App\UBL\XAdES\v132\EncapsulatedPKIDataType[]
     */
    public function getEncapsulatedX509Certificate()
    {
        return $this->encapsulatedX509Certificate;
    }

    /**
     * Sets a new encapsulatedX509Certificate
     *
     * @param \App\UBL\XAdES\v132\EncapsulatedPKIDataType[] $encapsulatedX509Certificate
     * @return self
     */
    public function setEncapsulatedX509Certificate(?array $encapsulatedX509Certificate = null)
    {
        $this->encapsulatedX509Certificate = $encapsulatedX509Certificate;
        return $this;
    }

    /**
     * Adds as otherCertificate
     *
     * @return self
     * @param \App\UBL\XAdES\v132\AnyType $otherCertificate
     */
    public function addToOtherCertificate(\App\UBL\XAdES\v132\AnyType $otherCertificate)
    {
        $this->otherCertificate[] = $otherCertificate;
        return $this;
    }

    /**
     * isset otherCertificate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherCertificate($index)
    {
        return isset($this->otherCertificate[$index]);
    }

    /**
     * unset otherCertificate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherCertificate($index)
    {
        unset($this->otherCertificate[$index]);
    }

    /**
     * Gets as otherCertificate
     *
     * @return \App\UBL\XAdES\v132\AnyType[]
     */
    public function getOtherCertificate()
    {
        return $this->otherCertificate;
    }

    /**
     * Sets a new otherCertificate
     *
     * @param \App\UBL\XAdES\v132\AnyType[] $otherCertificate
     * @return self
     */
    public function setOtherCertificate(?array $otherCertificate = null)
    {
        $this->otherCertificate = $otherCertificate;
        return $this;
    }
}

