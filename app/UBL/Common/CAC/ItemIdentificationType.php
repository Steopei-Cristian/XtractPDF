<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing ItemIdentificationType
 *
 * ABIE
 *  Item Identification. Details
 *  A class for assigning identifying information to an item.
 *  Item Identification
 * XSD Type: ItemIdentificationType
 */
class ItemIdentificationType
{
    /**
     * BBIE
     *  Item Identification. Identifier
     *  An identifier for the item.
     *  1
     *  Item Identification
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  CUST001 3333-44-123
     *
     * @var \App\UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Item Identification. Extended_ Identifier. Identifier
     *  An extended identifier for the item that identifies the item with specific properties, e.g., Item 123 = Chair / Item 123 Ext 45 = brown chair. Two chairs can have the same item number, but one is brown. The other is white.
     *  0..1
     *  Item Identification
     *  Extended
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \App\UBL\Common\CBC\ExtendedID $extendedID
     */
    private $extendedID = null;

    /**
     * BBIE
     *  Item Identification. Barcode_ Symbology Identifier. Identifier
     *  An identifier for a system of barcodes.
     *  0..1
     *  Item Identification
     *  Barcode
     *  Symbology Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \App\UBL\Common\CBC\BarcodeSymbologyID $barcodeSymbologyID
     */
    private $barcodeSymbologyID = null;

    /**
     * ASBIE
     *  Item Identification. Physical Attribute
     *  A physical attribute of the item.
     *  0..n
     *  Item Identification
     *  Physical Attribute
     *  Physical Attribute
     *  Physical Attribute
     *
     * @var \App\UBL\Common\CAC\PhysicalAttribute[] $physicalAttribute
     */
    private $physicalAttribute = [
        
    ];

    /**
     * ASBIE
     *  Item Identification. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of the item.
     *  0..n
     *  Item Identification
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @var \App\UBL\Common\CAC\MeasurementDimension[] $measurementDimension
     */
    private $measurementDimension = [
        
    ];

    /**
     * ASBIE
     *  Item Identification. Issuer_ Party. Party
     *  The party that issued this item identification.
     *  0..1
     *  Item Identification
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @var \App\UBL\Common\CAC\IssuerParty $issuerParty
     */
    private $issuerParty = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Item Identification. Identifier
     *  An identifier for the item.
     *  1
     *  Item Identification
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  CUST001 3333-44-123
     *
     * @return \App\UBL\Common\CBC\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Item Identification. Identifier
     *  An identifier for the item.
     *  1
     *  Item Identification
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  CUST001 3333-44-123
     *
     * @param \App\UBL\Common\CBC\ID $iD
     * @return self
     */
    public function setID(\App\UBL\Common\CBC\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as extendedID
     *
     * BBIE
     *  Item Identification. Extended_ Identifier. Identifier
     *  An extended identifier for the item that identifies the item with specific properties, e.g., Item 123 = Chair / Item 123 Ext 45 = brown chair. Two chairs can have the same item number, but one is brown. The other is white.
     *  0..1
     *  Item Identification
     *  Extended
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \App\UBL\Common\CBC\ExtendedID
     */
    public function getExtendedID()
    {
        return $this->extendedID;
    }

    /**
     * Sets a new extendedID
     *
     * BBIE
     *  Item Identification. Extended_ Identifier. Identifier
     *  An extended identifier for the item that identifies the item with specific properties, e.g., Item 123 = Chair / Item 123 Ext 45 = brown chair. Two chairs can have the same item number, but one is brown. The other is white.
     *  0..1
     *  Item Identification
     *  Extended
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \App\UBL\Common\CBC\ExtendedID $extendedID
     * @return self
     */
    public function setExtendedID(?\App\UBL\Common\CBC\ExtendedID $extendedID = null)
    {
        $this->extendedID = $extendedID;
        return $this;
    }

    /**
     * Gets as barcodeSymbologyID
     *
     * BBIE
     *  Item Identification. Barcode_ Symbology Identifier. Identifier
     *  An identifier for a system of barcodes.
     *  0..1
     *  Item Identification
     *  Barcode
     *  Symbology Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \App\UBL\Common\CBC\BarcodeSymbologyID
     */
    public function getBarcodeSymbologyID()
    {
        return $this->barcodeSymbologyID;
    }

    /**
     * Sets a new barcodeSymbologyID
     *
     * BBIE
     *  Item Identification. Barcode_ Symbology Identifier. Identifier
     *  An identifier for a system of barcodes.
     *  0..1
     *  Item Identification
     *  Barcode
     *  Symbology Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \App\UBL\Common\CBC\BarcodeSymbologyID $barcodeSymbologyID
     * @return self
     */
    public function setBarcodeSymbologyID(?\App\UBL\Common\CBC\BarcodeSymbologyID $barcodeSymbologyID = null)
    {
        $this->barcodeSymbologyID = $barcodeSymbologyID;
        return $this;
    }

    /**
     * Adds as physicalAttribute
     *
     * ASBIE
     *  Item Identification. Physical Attribute
     *  A physical attribute of the item.
     *  0..n
     *  Item Identification
     *  Physical Attribute
     *  Physical Attribute
     *  Physical Attribute
     *
     * @return self
     * @param \App\UBL\Common\CAC\PhysicalAttribute $physicalAttribute
     */
    public function addToPhysicalAttribute(\App\UBL\Common\CAC\PhysicalAttribute $physicalAttribute)
    {
        $this->physicalAttribute[] = $physicalAttribute;
        return $this;
    }

    /**
     * isset physicalAttribute
     *
     * ASBIE
     *  Item Identification. Physical Attribute
     *  A physical attribute of the item.
     *  0..n
     *  Item Identification
     *  Physical Attribute
     *  Physical Attribute
     *  Physical Attribute
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPhysicalAttribute($index)
    {
        return isset($this->physicalAttribute[$index]);
    }

    /**
     * unset physicalAttribute
     *
     * ASBIE
     *  Item Identification. Physical Attribute
     *  A physical attribute of the item.
     *  0..n
     *  Item Identification
     *  Physical Attribute
     *  Physical Attribute
     *  Physical Attribute
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPhysicalAttribute($index)
    {
        unset($this->physicalAttribute[$index]);
    }

    /**
     * Gets as physicalAttribute
     *
     * ASBIE
     *  Item Identification. Physical Attribute
     *  A physical attribute of the item.
     *  0..n
     *  Item Identification
     *  Physical Attribute
     *  Physical Attribute
     *  Physical Attribute
     *
     * @return \App\UBL\Common\CAC\PhysicalAttribute[]
     */
    public function getPhysicalAttribute()
    {
        return $this->physicalAttribute;
    }

    /**
     * Sets a new physicalAttribute
     *
     * ASBIE
     *  Item Identification. Physical Attribute
     *  A physical attribute of the item.
     *  0..n
     *  Item Identification
     *  Physical Attribute
     *  Physical Attribute
     *  Physical Attribute
     *
     * @param \App\UBL\Common\CAC\PhysicalAttribute[] $physicalAttribute
     * @return self
     */
    public function setPhysicalAttribute(?array $physicalAttribute = null)
    {
        $this->physicalAttribute = $physicalAttribute;
        return $this;
    }

    /**
     * Adds as measurementDimension
     *
     * ASBIE
     *  Item Identification. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of the item.
     *  0..n
     *  Item Identification
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @return self
     * @param \App\UBL\Common\CAC\MeasurementDimension $measurementDimension
     */
    public function addToMeasurementDimension(\App\UBL\Common\CAC\MeasurementDimension $measurementDimension)
    {
        $this->measurementDimension[] = $measurementDimension;
        return $this;
    }

    /**
     * isset measurementDimension
     *
     * ASBIE
     *  Item Identification. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of the item.
     *  0..n
     *  Item Identification
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeasurementDimension($index)
    {
        return isset($this->measurementDimension[$index]);
    }

    /**
     * unset measurementDimension
     *
     * ASBIE
     *  Item Identification. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of the item.
     *  0..n
     *  Item Identification
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeasurementDimension($index)
    {
        unset($this->measurementDimension[$index]);
    }

    /**
     * Gets as measurementDimension
     *
     * ASBIE
     *  Item Identification. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of the item.
     *  0..n
     *  Item Identification
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @return \App\UBL\Common\CAC\MeasurementDimension[]
     */
    public function getMeasurementDimension()
    {
        return $this->measurementDimension;
    }

    /**
     * Sets a new measurementDimension
     *
     * ASBIE
     *  Item Identification. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of the item.
     *  0..n
     *  Item Identification
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param \App\UBL\Common\CAC\MeasurementDimension[] $measurementDimension
     * @return self
     */
    public function setMeasurementDimension(?array $measurementDimension = null)
    {
        $this->measurementDimension = $measurementDimension;
        return $this;
    }

    /**
     * Gets as issuerParty
     *
     * ASBIE
     *  Item Identification. Issuer_ Party. Party
     *  The party that issued this item identification.
     *  0..1
     *  Item Identification
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @return \App\UBL\Common\CAC\IssuerParty
     */
    public function getIssuerParty()
    {
        return $this->issuerParty;
    }

    /**
     * Sets a new issuerParty
     *
     * ASBIE
     *  Item Identification. Issuer_ Party. Party
     *  The party that issued this item identification.
     *  0..1
     *  Item Identification
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @param \App\UBL\Common\CAC\IssuerParty $issuerParty
     * @return self
     */
    public function setIssuerParty(?\App\UBL\Common\CAC\IssuerParty $issuerParty = null)
    {
        $this->issuerParty = $issuerParty;
        return $this;
    }
}

