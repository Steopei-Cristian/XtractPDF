<?php

namespace App\UBL\XAdES\v132;

/**
 * Class representing UnsignedPropertiesType
 *
 *
 * XSD Type: UnsignedPropertiesType
 */
class UnsignedPropertiesType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \App\UBL\XAdES\v132\UnsignedSignaturePropertiesType $unsignedSignatureProperties
     */
    private $unsignedSignatureProperties = null;

    /**
     * @var \App\UBL\XAdES\v132\UnsignedDataObjectPropertiesType $unsignedDataObjectProperties
     */
    private $unsignedDataObjectProperties = null;

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
     * Gets as unsignedSignatureProperties
     *
     * @return \App\UBL\XAdES\v132\UnsignedSignaturePropertiesType
     */
    public function getUnsignedSignatureProperties()
    {
        return $this->unsignedSignatureProperties;
    }

    /**
     * Sets a new unsignedSignatureProperties
     *
     * @param \App\UBL\XAdES\v132\UnsignedSignaturePropertiesType $unsignedSignatureProperties
     * @return self
     */
    public function setUnsignedSignatureProperties(?\App\UBL\XAdES\v132\UnsignedSignaturePropertiesType $unsignedSignatureProperties = null)
    {
        $this->unsignedSignatureProperties = $unsignedSignatureProperties;
        return $this;
    }

    /**
     * Gets as unsignedDataObjectProperties
     *
     * @return \App\UBL\XAdES\v132\UnsignedDataObjectPropertiesType
     */
    public function getUnsignedDataObjectProperties()
    {
        return $this->unsignedDataObjectProperties;
    }

    /**
     * Sets a new unsignedDataObjectProperties
     *
     * @param \App\UBL\XAdES\v132\UnsignedDataObjectPropertiesType $unsignedDataObjectProperties
     * @return self
     */
    public function setUnsignedDataObjectProperties(?\App\UBL\XAdES\v132\UnsignedDataObjectPropertiesType $unsignedDataObjectProperties = null)
    {
        $this->unsignedDataObjectProperties = $unsignedDataObjectProperties;
        return $this;
    }
}

