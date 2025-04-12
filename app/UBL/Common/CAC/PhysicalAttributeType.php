<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing PhysicalAttributeType
 *
 * ABIE
 *  Physical Attribute. Details
 *  A class to describe a physical attribute.
 *  Physical Attribute
 * XSD Type: PhysicalAttributeType
 */
class PhysicalAttributeType
{
    /**
     * BBIE
     *  Physical Attribute. Attribute Identifier. Identifier
     *  An identifier for this physical attribute.
     *  1
     *  Physical Attribute
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *  colour style
     *
     * @var \App\UBL\Common\CBC\AttributeID $attributeID
     */
    private $attributeID = null;

    /**
     * BBIE
     *  Physical Attribute. Position Code. Code
     *  A code signifying the position of this physical attribute.
     *  0..1
     *  Physical Attribute
     *  Position Code
     *  Code
     *  Code. Type
     *
     * @var \App\UBL\Common\CBC\PositionCode $positionCode
     */
    private $positionCode = null;

    /**
     * BBIE
     *  Physical Attribute. Description Code. Code
     *  A description of the physical attribute, expressed as a code.
     *  0..1
     *  Physical Attribute
     *  Description Code
     *  Code
     *  Code. Type
     *  XXL , Small
     *
     * @var \App\UBL\Common\CBC\DescriptionCode $descriptionCode
     */
    private $descriptionCode = null;

    /**
     * BBIE
     *  Physical Attribute. Description. Text
     *  A description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as attributeID
     *
     * BBIE
     *  Physical Attribute. Attribute Identifier. Identifier
     *  An identifier for this physical attribute.
     *  1
     *  Physical Attribute
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *  colour style
     *
     * @return \App\UBL\Common\CBC\AttributeID
     */
    public function getAttributeID()
    {
        return $this->attributeID;
    }

    /**
     * Sets a new attributeID
     *
     * BBIE
     *  Physical Attribute. Attribute Identifier. Identifier
     *  An identifier for this physical attribute.
     *  1
     *  Physical Attribute
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *  colour style
     *
     * @param \App\UBL\Common\CBC\AttributeID $attributeID
     * @return self
     */
    public function setAttributeID(\App\UBL\Common\CBC\AttributeID $attributeID)
    {
        $this->attributeID = $attributeID;
        return $this;
    }

    /**
     * Gets as positionCode
     *
     * BBIE
     *  Physical Attribute. Position Code. Code
     *  A code signifying the position of this physical attribute.
     *  0..1
     *  Physical Attribute
     *  Position Code
     *  Code
     *  Code. Type
     *
     * @return \App\UBL\Common\CBC\PositionCode
     */
    public function getPositionCode()
    {
        return $this->positionCode;
    }

    /**
     * Sets a new positionCode
     *
     * BBIE
     *  Physical Attribute. Position Code. Code
     *  A code signifying the position of this physical attribute.
     *  0..1
     *  Physical Attribute
     *  Position Code
     *  Code
     *  Code. Type
     *
     * @param \App\UBL\Common\CBC\PositionCode $positionCode
     * @return self
     */
    public function setPositionCode(?\App\UBL\Common\CBC\PositionCode $positionCode = null)
    {
        $this->positionCode = $positionCode;
        return $this;
    }

    /**
     * Gets as descriptionCode
     *
     * BBIE
     *  Physical Attribute. Description Code. Code
     *  A description of the physical attribute, expressed as a code.
     *  0..1
     *  Physical Attribute
     *  Description Code
     *  Code
     *  Code. Type
     *  XXL , Small
     *
     * @return \App\UBL\Common\CBC\DescriptionCode
     */
    public function getDescriptionCode()
    {
        return $this->descriptionCode;
    }

    /**
     * Sets a new descriptionCode
     *
     * BBIE
     *  Physical Attribute. Description Code. Code
     *  A description of the physical attribute, expressed as a code.
     *  0..1
     *  Physical Attribute
     *  Description Code
     *  Code
     *  Code. Type
     *  XXL , Small
     *
     * @param \App\UBL\Common\CBC\DescriptionCode $descriptionCode
     * @return self
     */
    public function setDescriptionCode(?\App\UBL\Common\CBC\DescriptionCode $descriptionCode = null)
    {
        $this->descriptionCode = $descriptionCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Physical Attribute. Description. Text
     *  A description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \App\UBL\Common\CBC\Description $description
     */
    public function addToDescription(\App\UBL\Common\CBC\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Physical Attribute. Description. Text
     *  A description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Physical Attribute. Description. Text
     *  A description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Physical Attribute. Description. Text
     *  A description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Physical Attribute. Description. Text
     *  A description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

